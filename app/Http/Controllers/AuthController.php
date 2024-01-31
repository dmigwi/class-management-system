<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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

       if (Auth::attempt($validator->validated())) {
            if ( Auth::user()->is_confirm_password) {
                // Trigger password reset using the same form.
                return back()->withInput($request->only('id'));
            }
        
            $request->session()->regenerateToken();
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
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);
       
        if ($validator->fails()) {
            return back()->withErrors(['status' => 'Missing required field(s), pwd (min-8 chars)']);
        }

        $data = (object)$validator->validated();
        $hashed = Hash::make($data->password);
        if (Hash::needsRehash($hashed)){
            $hashed = Hash::make($data->password);
        }

        User::where('id', $data->id)->update(['password' => $hashed, 
                            'is_confirm_password' => false]);

        Auth::loginUsingId($data->id);
        $request->session()->regenerateToken();

        return redirect()->intended('dashboard');
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
