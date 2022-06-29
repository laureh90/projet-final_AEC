<?php

namespace Database\Seeders;

use App\Models\Post;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // csv post
        $csvFile = fopen(resource_path('data/post.csv'), 'r');

        while(($data = fgetcsv($csvFile, 2000, ";")) !== false){

                Post::create([
                    'title' => $data[1],
                    'description' => $data[2],
                    'date_post' => $data[3],
                    'image_path' => $data[4],
                ]);

            }
        fclose($csvFile);

    }
}
