<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.Login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'motdepasse' => ['required'],
            ]);
    
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
    
                return redirect()->back()->with('statut', 'Connexion réussie');
            }
    
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    

     //       public function store(Request $request) 
    //       {
    //         try {

    //           $credentials = $request->validate([
    //               'email' => ['required', 'email'],
    //               'motdepasse' => ['required'],
    //           ]);
        
    //           if (Auth::attempt($credentials)) {
    //               $request->session()->regenerate();
        
    //               return redirect()-> back()->with('status', 'Connexion Reussie');
    //           }
        
    //           return back()->withErrors([
    //               'email' => 'The provided credentials do not match our records.',
    //           ])->onlyInput('email');

    //       } catch (\Exception $e) {
    //         dd($e->getMessage());
        
    //     }
    // }


    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     //
    // }
    
}