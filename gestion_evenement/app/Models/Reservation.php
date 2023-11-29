<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evenement;
use App\Models\User;

class Reservation extends Model
{
    use HasFactory;

    public function evenements(){
        return $this->hasMany(Evenement::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
    protected $fillable = [
        'reference',
        'date_reservation',
        'statut',
        'nombre_place',
        
    ];
}
