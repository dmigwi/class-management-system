<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Models\Unit;
use App\Models\User;

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
            $tab = $request->tab ?? 'list-users';
            $data = (object)['tab' => $tab ];

            if ($user->role == "admin") {
                $page = 'Admin';

                if ($tab ===  'list-units') {
                    $units = Unit::paginate(
                        $perPage = 10,
                        $columns = ['id', 'name', 'code', 'semester', 'year'],
                        $pageName = 'page'
                    )->appends(['tab' => $tab]);
                }

                if ($tab ===  'list-users') {
                    $users = User::paginate(
                        $perPage = 10,
                        $columns = ['id', 'title', 'firstname', 'middlename', 'lastname', 'role', 'email'],
                        $pageName = 'page'
                    )->appends(['tab' => $tab]);
                }

                if ($tab ===  'add-user') {
                    $units = Unit::paginate(
                        $perPage = 10,
                        $columns = ['id', 'name', 'code'],
                        $pageName = 'page'
                    )->appends(['tab' => $tab]);
                }

                if ($tab ===  'add-unit') {
                    $users = User::where('role', 'instructor')->paginate(
                        $perPage = 10,
                        $columns = ['id', 'title', 'firstname', 'middlename', 'lastname'],
                        $pageName = 'page'
                    )->appends(['tab' => $tab]);
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
     * Stores a newly created unit in storage.
     */
    public function storeUnit(Request $request) {
        if (Auth::check()) {
            $user = Auth::user();

            $validator = Validator::make($request->all(), [
                'instructor'=> 'exclude_if:instructor,null',
                'name' => 'required|min:5|max:55',
                'code' => 'required|min:5|max:55',
                'semester'=> 'exclude_if:semester,null',
                'year'=> 'exclude_if:year,null',
                'start_date' => 'exclude_if:start_date,null',
                'end_date' => 'exclude_if:end_date,null',
                'duration' => 'exclude_if:duration,null',
                'midterm_exam' => 'exclude_if:midterm_exam,null',
                'final_exam' => 'exclude_if:final_exam,null',
            ]);
           
            if ($validator->fails()) {
                return back()->withErrors(['status' => 'Unit name/code should be (min-5 & max-55 chars)']);
            }

            if (!Unit::create($validator->validated())->save()) {
                return back()->withErrors(['status' => 'failed to insert the unit data into the db. Try again!']);
            }

            $request = new Request(['tab' => 'list-units']);
            return $this->index($request);
        }
        return view('login');
    }


    /**
     * Stores a newly created user in storage.
     */
    public function storeUser(Request $request) {
        if (Auth::check()) {
            $user = Auth::user();

            $request = new Request(['tab' => 'list-users']);
            return $this->index($request);
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
