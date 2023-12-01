<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Association>
 */
class AssociationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom_asso'=>'Simplon Asso',
            'email'=>'simplonasso@gmail.com', 
            'password' =>Hash::make('azerty12'),
            'date_creation' => '2020-12-06',
            'logo' => 'addfezfrezfezfsd.jpg',
            'slogan' =>'Simplonnnnnnnnnnnn',
            ];
    }
}