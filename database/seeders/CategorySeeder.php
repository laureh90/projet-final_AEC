<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Categorie::create([
            'title' => 'Poke bowl'
        ]);
        Categorie::create([
            'title' => 'Sushi'
        ]);
        Categorie::create([
            'title' => 'Drink'
        ]);
        Categorie::create([
            'title' => 'Salad'
        ]);
    }
}
