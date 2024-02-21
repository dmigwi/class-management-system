<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Unit;
use App\Models\Timer;
use App\Models\Attendance;
use \Illuminate\Database\QueryException;

// use Illuminate\Support\Facades\Log;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Admin should not have access to attendance page.
            if ($user->role === "admin") {
                return redirect('/dashboard');
            }

            $data = (object)[
                'page' => "Attendance",
            ];

            $units = [];
            if ($user->role === "instructor") {
               $units = Unit::where('instructor', Auth::id())->select('name', 'code')->paginate(10);

               // Prevents running timers for more than 1 unit per instructor.
               $timer_id = DB::table('start_stop')->select('id', 'unit_id')
                                    ->where("instructor", Auth::id())
                                    ->where("stopped_at", null)->first();

                if (!is_null($timer_id)) {
                    $data->timer_id = $timer_id->id;

                   $openUnit = Unit::where('instructor', Auth::id())
                                ->where("id", $timer_id->unit_id)
                                -> select('code')->first();
                    $data->code = $openUnit->code;
                }
            }

           return view('index',  ["account" => $data, "units" => $units]);
        }
        return view('login');
    }

    /**
     * Show the form for creating a new attendance if the student is already authenticated.
     */
    public function create(Request $request, int $timer_id) { 
       return $this->attendance($timer_id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $id = Auth::id();
            $validator = Validator::make($request->all(), [
                'id' => 'required',
                'code' => 'required',
            ]);
           
            if ($validator->fails()) {
                return back()->withErrors(['status' => 'Missing in required field(s)']);
            }

            $unit = Unit::where('instructor', $request->id)->where('code', $request->code)->first();
            if (empty($unit)) {
                return back()->withErrors(['status' => 'You are not allocated this unit.']);
            }

            $timer = DB::table('start_stop')->insertGetId([
                "instructor" => $id,
                "unit_id" => $unit->id,
                "stopped_at" => null,
            ]);

            $user = Auth::user();
            $name = $user->title.' '.$user->firstname.' '.$user->middlename.' '.$user->lastname;
            $data = (object)[
                'id' => Auth::id(),
                'role' => $user->role, 
                'name' => $name, 
                'page' => "Attendance",
                'code' => $request->code, 
                'timer_id' => $timer,
            ];

            $units = [];
            if ($user->role === "instructor") {
                $units = Unit::where('instructor', Auth::id())->select('name', 'code')->paginate(10);
             }

            return redirect('/attendance')->with("account", $data)->with("units", $units);
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
    public function edit(string $id) {
        //
    }

    /**
     * Handles the attendance signing functionality
     */
    public static function attendance(int $timer_id) {
        if (Auth::check()) {
            $validator = Validator::make(['id' => $timer_id], ['id' => 'required']);
           
            if ($validator->fails()) {
                return back()->withErrors(['status' => 'Missing required field']);
            }

            $timer = DB::table('start_stop')->where("id", $timer_id)->first();
            if (empty($timer) || $timer->stopped_at != null) {
                return back()->withErrors(['status' => 'signing attendance has been disabled']);
            }

            $id = Auth::id();
            $unitAssignment = DB::table('user_unit')->where('user_id', $id)
                    ->where('unit_id', $timer->unit_id)->first();
            if (empty($unitAssignment)) {
                return back()->withErrors(['status' => 'You are not allocated this unit.']);
            }

            $success = "success";
            try {
                $attendanceID = Attendance::insertGetId([
                    "timer_id" => $timer->id,
                    "sender" => $id,
                ]);

                if ($attendanceID === 0) {
                    return back()->withErrors(['status' => 'signing attendance failed']);
                }
            } catch(QueryException $e){
                $success = "already-exists";
            }

            $user = Auth::user();
            $name = $user->title.' '.$user->firstname.' '.$user->middlename.' '.$user->lastname;
            $data = (object)[
                'id' => $id,
                'role' => $user->role, 
                'name' => $name, 
                'page' => "Attendance",
                'status' => $success, 
            ];

            return redirect('/attendance')->with("account", $data);
        }
        return view('login');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request) {
        if (Auth::check()) {
            $id = Auth::id();
            $validator = Validator::make($request->all(), [
                'id' => 'required',
                'code' => 'required',
            ]);
           
            if ($validator->fails()) {
                return back()->withErrors(['status' => 'Mismatch in required field(s)']);
            }

            $unit = Unit::where('instructor', $request->id)->where('code', $request->code)->first();
            if (empty($unit)) {
                return back()->withErrors(['status' => 'You are not allocated this unit.']);
            }

            $timer = DB::table('start_stop')->where('instructor', $id)
                            ->where("unit_id", $unit->id)
                            ->where("stopped_at", null)
                            ->first();
    
            if(empty($timer)) {
                return back()->withErrors(['status' => 'Stopping the timer failed.']);
            }

            $now =date('Y-m-d H:i:s');
            DB::table('start_stop')->where('id', $timer->id)->update(['stopped_at' => $now]);

            $user = Auth::user();
            $name = $user->title.' '.$user->firstname.' '.$user->middlename.' '.$user->lastname;
            $data = (object)[
                'id' => $id, 
                'role' => $user->role,
                'name' => $name, 
                'page' => "Attendance",
                'code' => $request->code, 
                'stop_time'=> $now,
            ];

            $units = [];
            if ($user->role === "instructor") {
                $units = Unit::where('instructor', Auth::id())->select('name', 'code')->paginate(10);
             }

            return redirect('/attendance')->with("account", $data)->with("units", $units);
        }
        return view('login');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
