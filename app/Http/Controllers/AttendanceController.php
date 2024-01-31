<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Unit;
use App\Models\Timer;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $name = $user->title.' '.$user->firstname.' '.$user->middlename.' '.$user->lastname;
            $data = (object)['id' => Auth::id(), 'role' => $user->role, 'name' => $name, 'page' => "Attendance"];
            return view('index', ["account" => $data]);
        }
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $id = Auth::id();
            $validator = Validator::make($request->all(), [
                'id' => 'required|same:'.$id,
                'code' => 'required',
            ]);
           
            if ($validator->fails()) {
                return back()->withErrors(['status' => 'Mismatch in required field(s)']);
            }

            $unit = Unit::where('instructor', $id)->where('code', $request->code)->first();
            if (empty($unit)) {
                return back()->withErrors(['status' => 'You are not allocated this unit.']);
            }

            $timer = DB::table('start_stop')->insert([
                "instructor" => $id,
                "unit_id" => $unit->id,
            ]);

            $data = (object)[
                'code' => $request->code, 
                'timer_id' => $timer->id,
                'start_time'=>$timer->created_at,
            ];
            return view('attendance', ["account" => $data]);
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
        if (Auth::check()) {
            $id = Auth::id();
            $validator = Validator::make($request->all(), [
                'c' => 'required',
            ]);
           
            if ($validator->fails()) {
                return back()->withErrors(['status' => 'Missing required field']);
            }

            $unit = Unit::where('instructor', $id)->where('code', $request->code)->first();
            if (empty($unit)) {
                return back()->withErrors(['status' => 'You are not allocated this unit.']);
            }

            $timer = Timer::where("instructor", $request->c)->first();
            if (empty($timer) || $timer->stopped_at != null) {
                return back()->withErrors(['status' => 'signing attendance has been disabled']);
            }

            Attendance::insert([
                "unit_id" => $timer->id,
                "sender" => Auth::id(),
            ]);

            return view('attendance');
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
                'id' => 'required|same:'.$id,
                'code' => 'required',
            ]);
           
            if ($validator->fails()) {
                return back()->withErrors(['status' => 'Mismatch in required field(s)']);
            }

            $unit = Unit::where('instructor', $id)->where('code', $request->code)->first();
            if (empty($unit)) {
                return back()->withErrors(['status' => 'You are not allocated this unit.']);
            }

            $timer = Timer::where('instructor', $id)
                            ->where("unit_id", $unit->id)
                            ->where("stopped_at", null)
                            ->first();
    
            if(empty($timer)) {
                return back()->withErrors(['status' => 'Stopping the timer failed.']);
            }

            $now =date('Y-m-d H:i:s');
            $timer->update(['stopped_at', $now]);

            $data = (object)[
                'id' => $id, 
                'role' => $user->role,
                'name' => $name, 
                'code' => $request->code, 
                'stop_time'=> $now,
            ];
            return view('attendance', ["account" => $data]);
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
