<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
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
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            // 'reservation' => 'sometimes',
            'nombre_place' => 'required',
            // 'date_reservation' => 'required',
        ]);
        $reservation = new Reservation();
        $autoref = uniqid();
        $reservation->reference = $request->$autoref = uniqid() ;
        $reservation->nombre_place = $request->nombre_place ;
        // $reservation->date_reservation = $request->date_reservation ;
        $reservation->user_id = Auth::guard('web')->user()->id;
        $reservation->evenement_id = $request->evenement_id; 
        
        // dd($request);
        $reservation->save();
        // return "Réservé";
        // return back();
        return redirect('/evenement/lister');


    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
