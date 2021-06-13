<?php

namespace Database\Seeders;

use App\Models\Dentista;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
        Dentista::create(['nome'=> 'Felipe Leonardo Gonçalves']);
        Dentista::create(['nome'=> 'Ayla Cláudia das Neves']);
        Dentista::create(['nome'=> 'Elias Tomás Nogueira']);
        Dentista::create(['nome'=> 'Mirella Rebeca Bernardes']);
        Dentista::create(['nome'=> 'Oliver Isaac Marcelo Farias']);
        Dentista::create(['nome'=> 'Bianca Rosa Joana Sales']);
    
    }
}
