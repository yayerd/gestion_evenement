<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Association;

class Evenement extends Model
{
    use HasFactory;

    public function associations(){
        return $this->belongsTo(Association::class);
    }

    protected $fillable = [
        'libelle',
        'description',
        'date_evenement',
        'image',
        'statut',
        'date_limite',
        
    ];
}
