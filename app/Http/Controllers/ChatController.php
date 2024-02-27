<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Unit;
// use App\Models\User;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $role = $user->role;
            $data = (object)['page' => "Chat"];

            $units = [];
            $unit_id = $request->unit ?? null;
            
            if ($role === "student") {
                $units = $user->units()
                                // ->where('units.id', 1) // Append the Administrator unit
                                ->orderBy('updated_at', 'desc')
                                ->paginate(
                                    $perPage = 10,
                                    $columns = ['units.id', 'name', 'code', 'instructor'],
                                    $pageName = 'page'
                                );

            } elseif ($role === "instructor") {
                $units = Unit::where('instructor', $user->id)
                            ->where('id', 1) // Append the Administrator unit
                            ->orderBy('updated_at', 'desc')
                            ->paginate(
                                $perPage = 10,
                                $columns = ['id', 'name', 'code', 'instructor'],
                                $pageName = 'page'
                            );

            } else { // must be for the admin role. Only Pick courses where they are mentioned

            }

            if (is_null($unit_id)) {
                $unit_id = $units->getCollection()->first()->id ?? null;
            }

            if (!is_null($unit_id)) {
                $data->unit = Unit::where('id', $unit_id)->select('*')->first();
            }

            return view('index', ["account" => $data, "units" => $units]);
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
