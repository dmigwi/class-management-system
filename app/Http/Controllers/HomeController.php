<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {
        if (Auth::check()) {
            $user = Auth::user();
            
            $page = "Home";
            $users = [];
            $units = [];
            $data = (object)[];
            
            if ($user->role == "admin") {
                $tab = $request->tab ?? 'list-users';
                $data->tab = $tab;
                $page = 'Admin';

                switch ($tab) {
                    case 'list-units':
                        $units = Unit::orderBy('updated_at', 'desc')->paginate(
                            $perPage = 10,
                            $columns = ['id', 'name', 'code', 'semester', 'year'],
                            $pageName = 'page'
                        )->appends(['tab' => $tab]);
                        break;
                    
                    case 'add-user':
                        $units = Unit::orderBy('updated_at', 'desc')->paginate(
                            $perPage = 10,
                            $columns = ['id', 'name', 'code'],
                            $pageName = 'page'
                        )->appends(['tab' => $tab]);
                        break;

                    case 'add-unit':
                        $users = User::where('role', 'instructor')->orderBy('updated_at', 'desc')->paginate(
                            $perPage = 10,
                            $columns = ['id', 'title', 'firstname', 'middlename', 'lastname'],
                            $pageName = 'page'
                        )->appends(['tab' => $tab]);
                        break;
                    
                    default: #'list-users'
                        $users = User::orderBy('updated_at', 'desc')->paginate(
                            $perPage = 10,
                            $columns = ['id', 'title', 'firstname', 'middlename', 'lastname', 'role', 'email'],
                            $pageName = 'page'
                        )->appends(['tab' => $tab]);

                        $instructor_id = (int)($request->user ?? '0');
                        if ($instructor_id > 0) {
                            // returns classes assigned to the current instructor.
                            $units = Unit::where('instructor', $instructor_id)->orderBy('updated_at', 'desc')->paginate(
                                $perPage = 10,
                                $columns = ['id', 'name', 'code'],
                                $pageName = 'view'
                            )->appends(['tab' => $tab]);
                        }
                        break;
                }

                $unit = $request->unit ?? null;
                if (!is_null($unit)) {
                    $data->unit = Unit::where('id', $unit)->select('*')->first();
                }

                $user = $request->user ?? null;
                if (!is_null($user)) {
                    $data->user = User::where('id', $user) -> select('*') -> first();
                }
            }

            $data->page = $page;
            return view('index', ["account" => $data,  "users" => $users, "units" => $units]);
        }
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Validator function for the unit insert and edit functions.
     */
    public function unitValidator(Request $request) {
        return Validator::make($request->all(), [
            'instructor'=> 'exclude_if:instructor,null',
            'name' => 'required|min:5|max:55',
            'code' => 'required|min:5|max:55',
            'semester'=> 'exclude_if:semester,null',
            'year'=> 'exclude_if:year,null|min:5|max:55',
            'start_date' => 'exclude_if:start_date,null',
            'end_date' => 'exclude_if:end_date,null',
            'duration' => 'exclude_if:duration,null',
            'midterm_exam' => 'exclude_if:midterm_exam,null',
            'final_exam' => 'exclude_if:final_exam,null',
        ]);
    }

    /**
     * Validator function for the user insert and edit functions.
     */
    public function userValidator(Request $request) {
        return Validator::make($request->all(), [
            'title'=> 'required',
            'firstname' => 'required|min:1|max:55',
            'middlename' => 'exclude_if:middlename,null|min:1|max:55',
            'lastname' => 'required|min:1|max:55',
            'password'=> 'required|min:5',
            'role'=> 'required',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|min:9|max:15',
            'faculty' => 'required',
            'country' => 'required',
        ]);
    }

    /**
     * Stores a newly created unit in storage. Operation reserved for an admin only.
     */
    public function storeUnit(Request $request) {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role !== "admin") {
                return back()->withErrors(['status' => 'unit insert operation reserved for admins only!']);
            }

            $validator = $this->unitValidator($request);
            if ($validator->fails()) {
                return back()->withErrors(['status' => $validator->errors()->first()]);
            }

            if (!Unit::create($validator->validated())->save()) {
                return back()->withErrors(['status' => 'failed to insert the unit data into the db. Try again!']);
            }

            return to_route('dashboard', ['tab' => 'list-units']);
        }
        return view('login');
    }

    /**
     * Stores a newly created user in storage. Operation reserved for an admin only.
     */
    public function storeUser(Request $request) {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role !== "admin") {
                return back()->withErrors(['status' => 'user insert operation reserved for admins only!']);
            }

            $validator = $this->userValidator($request);
            if ($validator->fails()) {
                return back()->withErrors(['status' => $validator->errors()->first()]);
            }

            $input = array_merge($validator->validated(), ['is_confirm_password' => true]);
            $user_info = User::create($input);

            if (!$user_info->save()) {
                return back()->withErrors(['status' => 'failed to insert the user data into the db. Try again!']);
            }

            $role = $request->get('role');
            // Add the units assigned to a given person
            $assignedUnits = $request->only(['classes']);

            foreach(head($assignedUnits) as $unit_id) {
                $network = Unit::find((int)($unit_id));

                if (!empty($network)) {
                    if ($role === "student" ) {
                        $user_info->units()->save($network);
                    } elseif ($role === "instructor" ) {
                        $network->fill(["instructor" => $user_info->id]);
                        $network->save();
                    }
                }
            }

            return to_route('dashboard', ['tab' => 'list-users']);
        }
        return view('login');
    }

    /**
     * Update an existing instance of the unit. Operation reserved for an admin only.
     */
    public function updateUnit(Request $request, string $unit_id) {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role !== "admin") {
                return back()->withErrors(['status' => 'unit update operation reserved for admins only!']);
            }

            $validator = $this->unitValidator($request);
            if ($validator->fails()) {
                return back()->withErrors(['status' => $validator->errors()->first()]);
            }
            
            $unit_info = Unit::find((int)($unit_id));
            if (empty($unit_info)) {
                return back()->withErrors(['status' => 'unit ('.$unit_id.') does not exist']);
            }

            $unit_info->fill($validator->validated());
            if (!$unit_info->save()) {
                return back()->withErrors(['status' => 'failed to insert the unit data into the db. Try again!']);
            }

            return to_route('dashboard', ['tab' => 'list-units']);
        }
        return view('login');
    }

    /**
     * Update an existing instance of the user. Operation reserved for an admin only.
     */
    public function updateUser(Request $request, string $user_id) {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role !== "admin") {
                return back()->withErrors(['status' => 'user update operation reserved for admins only!']);
            }

            $validator = $this->userValidator($request);
            if ($validator->fails()) {
                return back()->withErrors(['status' => $validator->errors()->first()]);
            }
            
            $user_info = User::find((int)($user_id));
            if (empty($user_info)) {
                return back()->withErrors(['status' => 'user ('.$user_id.') does not exist']);
            }

            $input = array_merge($validator->validated(), ['is_confirm_password' => true]);
            $user_info->fill($input);

            if (!$user_info->save()) {
                return back()->withErrors(['status' => 'failed to insert the user data into the db. Try again!']);
            }

            // before updating the assigned units drop all the previously assigned units.
            $role = $user_info->role;
            if ($role === "student") {
                DB::table('unit_user')->where('user_id', $user_info->id)->delete();
            } elseif ($role === "instructor" ) {
                Unit::where("instructor", $user_info->id)->update(["instructor" => null]);
            }

            // Add the units assigned to a given person
            $assignedUnits = $request->only(['classes']) ?? [];

            if (!empty($assignedUnits)) {
                foreach(head($assignedUnits) ?? [] as $unit_id) {
                    $network = Unit::find((int)($unit_id));

                    if (!empty($network)) {
                        if ($role === "student" ) {
                            $user_info->units()->save($network);
                        } elseif ($role === "instructor" ) {
                            $network->fill(["instructor" => $user_info->id]);
                            $network->save();
                        }
                    }
                }
            }

            return to_route('dashboard', ['tab' => 'list-users']);
        }
        return view('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Removes the specified unit by its provided id.
     */
    public function destroyUnit(string $id) {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role === "admin") {
               $unit_info = Unit::find((int)($id));

               if (!is_null($unit_info)) {
                $unit_info->delete();
               }
            }
            return to_route('dashboard', ['tab' => 'list-units']);
        }
        return view('login');
    }

     /**
     * Removes the specified User by its provided id.
     */
    public function destroyUser(string $id) {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role === "admin") {
               $user_info = User::find((int)($id));

               if (!is_null($user_info)) {
                $user_info->delete();
               }
            }
            return to_route('dashboard', ['tab' => 'list-users']);
        }
        return view('login');
    }
}
