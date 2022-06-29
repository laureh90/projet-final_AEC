<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // csv menu
        $csvFile = fopen(resource_path('data/menu.csv'), 'r');

        while(($data = fgetcsv($csvFile, 2000, ";")) !== false){

                Menu::create([
                    'title' => $data[1],
                    'price' => $data[2],
                    'description' => $data[3],
                    'category_id' => $data[4],
                ]);

            }
        fclose($csvFile);


    }
}
