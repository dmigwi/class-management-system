<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('login');
    }

    /**
     * Handles an authentication attempt.
     */
    public function authenticate(Request $request) {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'password' => 'required',
        ]);
       
        if ($validator->fails()) {
            return back()->withErrors(['status' => 'Missing required field(s)']);
        }

        // Retrieve the validated input...
        $validated = (object)$validator->validated();
        
        $user = DB::table('users')->where('id', $validated->id)->first();
        $isPassMatching = Hash::check($validated->password, $user->password);

        if (!is_null($user) && $isPassMatching) {

            if ($user->is_confirm_password) {
                // Trigger password reset using the same form.
                return back()->withInput($request->only('id'));
            }

            $name = $user->title.' '.$user->firstname.' '.$user->middlename.' '.$user->lastname;
            session(["id" => $user->id, "role" => $user-> role, "name" => $name]);

            return redirect()->intended('dashboard');
        }

        // User authentication failed.
        return back()->withErrors([
            'status' => 'Credentials provided do not match our records']);
    }

     /**
     * Update the specified resource in storage.
     */
    public function passwordreset(Request $request) {
        /* 
        Validation
        */
        $request->validate([
            'id' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        /*
        Database Update
        */
        $user = User::find($request->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

     /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    { 
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
 
        return redirect('/');
     }
}
