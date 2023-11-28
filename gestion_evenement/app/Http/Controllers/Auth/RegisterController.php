<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $validated = $request->validate([
                'prenom' => ['required', 'string', 'between:3,35'],
                'nom' => ['required', 'string', 'between:2,25'],
                'email' => ['required', 'email', 'unique:users'],
                'motdepasse' => ['required', 'string', 'min:8'],
                'motdepasseconf' => ['required', 'same:motdepasse']

            ]);

            $validated['motdepasse'] = Hash::make($validated['motdepasse']);

            // dd($validated);
            $user = User::create($validated);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        // return ;
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
