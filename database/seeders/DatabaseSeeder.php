<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            "email" =>"elliot.fontai@example.com",
            "password" => Hash::make("goldfish"),
            "nom" => "Fontai",
            "prenom" => "Elliot",
            "birth" => '2000-01-01',
            "age" => 23,
            "ville" => "Clermont-Ferrand",
            "pays" => "France",
            "telephone" => "06-85-03-68-08",
            "url_photo" => "https://randomuser.me/api/portraits/men/10.jpg",
            "civilite" => "Homme",
            "categorie" => "Technique"
        ]);
        \App\Models\User::create([
            "email" =>"lea.bourgeois@example.com",
            "password" => Hash::make("thunder1"),
            "nom" => "Bourgeois",
            "prenom" => "Léa",
            "birth" => '2000-01-01',
            "age" => 23,
            "ville" => "Grenoble",
            "pays" => "France",
            "telephone" => "06-85-03-68-08",
            "url_photo" => "https://randomuser.me/api/portraits/med/women/74.jpg",
            "civilite" => "Femme",
            "categorie" => "Marketing"

        ]);
        // \App\Models\User::factory(10)->create();
    }
}
