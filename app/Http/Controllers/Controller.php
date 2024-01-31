<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests; 

    public function __construct() {

        if (Auth::check()) {
            $user = Auth::user();
            $name = $user->title.' '.$user->firstname.' '.$user->middlename.' '.$user->lastname;
            $data = (object)['id' => Auth::id(), 'role' => $user->role, 'name' => $name];
        
            // Sharing is caring
            View::share('xxxx', $data);
        }
    }
}
