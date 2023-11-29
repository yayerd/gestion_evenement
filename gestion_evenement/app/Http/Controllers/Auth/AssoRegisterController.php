<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Association;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AssoRegisterController extends Controller
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
        return view('auth.assoregister');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     try {

    //         $validated = $request->validate([
    //             'nom_asso' => ['required', 'string', 'between:2,255'],
    //             'email' => ['required', 'email', 'unique:users'],
    //             'password' => ['required', 'string', 'min:8'],
    //             'passwordconf' => ['required', 'same:password'],
    //             'date_creation' => ['required'],
    //             'logo' => ['required'],
    //             'slogan' => ['required']

    //         ]);

    //         if ($validated['password'] = Hash::make($validated['password'])) {
    //             // dd($validated);
    //             return 'Inscription Association reussie';
    //         } else {
    //             return 'erreur';
    //         }

    //         $association = Association::create($validated);
    //     } catch (\Exception $e) {
    //         dd($e->getMessage());
    //     }

    //     // return ;
    // }

    Public function store(Request $request){
        {
            try {
                // dd($request);

            $validated=$request->validate([
                'nom_asso'=>['required','string','max:255'],
                'email'=>['required','string','lowercase','email','max:255','unique:associations'],
                'password'=>['required'],
                'passwordconf'=>['required', 'same:password'],
                'date_creation'=>['required','date'],
                'logo'=>['required','image','mimes:jpeg,png,jpg,gif'],
                'slogan'=>['required','string','max:255'],


            ]);
            $validated['password']=Hash::make($validated ['password']);

           $association = Association::create($validated);

           $image=$request->file('image');
           

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        }
       } 
       Private function storeImage($image){
        return $image->store('image','public');
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
