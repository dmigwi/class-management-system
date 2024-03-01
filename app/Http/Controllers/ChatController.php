<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Log;
use App\Models\Unit;
use App\Models\Chat;
use App\Models\User;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {
        if (Auth::check()) {
            $user = Auth::user();
            $role = $user->role;
            $data = (object)['page' => "Chat"];

            $units = [];
            $admin_id = 1; // The admin special unit has a reserved id 1.
            $unit_id = $request->unit_id ?? null;
            
            // Set the units and unit_is fields
            switch ($role) {
                case 'student':
                    $units = Unit::leftjoin('unit_user','units.id', 'unit_user.unit_id')
                                    ->where('unit_user.user_id', $user->id)
                                    ->orWhere('units.id', $admin_id) // Append the Administrator unit
                                    ->orderBy('updated_at', 'desc')
                                    ->paginate(
                                        $perPage = 10,
                                        $columns = ['units.id', 'name', 'code', 'instructor'],
                                        $pageName = 'units'
                                    );
                    break;

                case 'instructor':
                    $units = Unit::where('instructor', $user->id)
                                ->orWhere('id', $admin_id) // Append the Administrator unit
                                ->orderBy('updated_at', 'desc')
                                ->paginate(
                                    $perPage = 10,
                                    $columns = ['id', 'name', 'code', 'instructor'],
                                    $pageName = 'units'
                                );
                    break;

                default:
                    $unit_id =  $admin_id;
                    break;
            }

            if (is_null($unit_id) && !empty($units)) {
                $unit_id = $units->getCollection()->first()->id ?? null;
            }

            if (!is_null($unit_id)) {
                $data->unit = Unit::where('id', $unit_id)->select('*')->first();
            }

            // query the conversation thread per user role.
            $conversation = [];
            $users = [];
            $recipient = $request->recipient_id ?? null;
            switch ($role) {
                case 'student':
                    $recipient = $user->id;
                    break;

                case 'instructor':
                    // Returns a list of all people assigned the selected unit. The unit in question cannot be the
                    // special administrator unit.
                    if ($unit_id > $admin_id) {
                        $users = DB::table('unit_user')
                                    ->join('users','users.id', 'unit_user.user_id')
                                    ->where('unit_user.unit_id', $unit_id)
                                    ->distinct()
                                    ->paginate(
                                        $perPage = 10,
                                        $columns = ['users.id', 'title', 'firstname', 'middlename', 'lastname', 'role'],
                                        $pageName = 'users'
                                    );
                    } else {
                        // When communicating with the admin use the instructor's own id.
                        $recipient = $user->id;
                    }
                    break;
                
                default: // admin role
                    // It should only return a list of the people who have messaged the admin first.
                    // The admins only replys to issues but cannot initiate a conversation.
                    $users = Chat::join('users','users.id', 'chats.sender_id')
                                    ->where('chats.unit_id', $admin_id)
                                    ->where('users.id', '!=' , $admin_id)
                                    ->distinct()
                                    ->paginate(
                                        $perPage = 10,
                                        $columns = ['users.id', 'title', 'firstname', 'middlename', 'lastname', 'role'],
                                        $pageName = 'users'
                                    );
                    break;
            }

            // If a collection of users exists and the user id is still null pick the first user as the selected user.
            if (is_null($recipient) && !empty($users)) {
                $recipient = $users->getCollection()->first()->id ?? null;
            }

            // current authenticated user cannot be the sender and also the recipient
            if (!is_null($recipient) && $role !== 'student' && $recipient != $user->id) {
                $data->user = User::where('id', $recipient)->select('*')->first();
            }

            // Chat to admin and instructor do not have a recipient field set. 
            // They are tied to the units each is assigned.
            // Messages to students must contain the recipient field set.

            // Set the read status on the message sent
            Chat::where("unit_id", $unit_id)
                ->when($role !== "admin", function ($query) use ($user) {
                    $query ->where('recipient_id', $user->id);
                })
                ->when($role === "admin", function ($query) use ($recipient) {
                    $query ->where('sender_id', $recipient);
                })
                ->where('read_at', null)
                ->update(['read_at' => date('Y-m-d H:i:s')]);

            $conversation = Chat::where("unit_id", $unit_id)
                                ->where(function ($query) use ($recipient) {
                                    $query->where('sender_id', $recipient)
                                        ->orWhere('recipient_id', $recipient);
                                })
                                ->orderBy('created_at', 'asc')
                                ->paginate(
                                        $perPage = 25,
                                        $columns = ['id', 'message', 'sender_id', 'read_at', 'created_at'],
                                        $pageName = 'chats'
                                    );

            return view('index', ["account" => $data, "units" => $units, "users" => $users, 'conversation' => $conversation]);
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
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        if (Auth::check()) {
            $user = Auth::user();

            $validator = Validator::make($request->all(), [
                'message' => 'required|min:1|max:500',
                'unit_id' => 'required',
                'recipient_id'=> 'exclude_if:recipient_id,null',
            ]);
           
            if ($validator->fails()) {
                return back()->withErrors(['status' => $validator->errors()->first()]);
            }

            $inputs = $validator->validated();
            $inputs = array_merge($inputs, ['sender_id' => $user->id, 'created_at' => date('Y-m-d H:i:s')]);

            Chat::insert($inputs);

            return to_route('chat', $request->all());
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
