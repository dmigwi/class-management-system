<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
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
            $tab = request()->tab ?? 'list-users';
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

                $unit = request()->unit ?? null;
                if (!is_null($unit)) {
                    $data->unit = Unit::where('id', $unit) -> select('*') -> first();
                }

                $user = request()->user ?? null;
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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
