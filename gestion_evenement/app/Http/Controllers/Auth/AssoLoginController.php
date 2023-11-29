<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Association;
use Illuminate\Support\Facades\Auth;

class AssoLoginController extends Controller
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
        return view('auth.assologin');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request) {
        $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]); 
        $check = $request->only('email', 'password');

        // dd(Auth::guard('association')->attempt($check));
        if (Auth::guard('association')->attempt($check)) {
           return 'Connexion Association reussie';
        } else {
            return 'Erreur de connexion';
        }
            // return redirect();
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
