<?php

namespace Database\Seeders;

use App\Models\User;
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

        $this->call([
            CategorySeeder::class,
            MenuSeeder::class,
            PackageSeeder::class,
            PostSeeder::class,
        ]);

        // Les 3 programmeuse et L'admin (notre client)
        User::factory()->create([
            'name' => 'Stephanie Millette',
            'email' => 'smillette79@hotmail.com',
            'category' => 1
        ]);

        User::factory()->create([
            'name' => 'Joannie Langlois',
            'email' => 'joannie.langlois@gmail.com',
            'category' => 1
        ]);

        User::factory()->create([
            'name' => 'Laurence Hamel',
            'email' => 'laurence.hamel90@outlook.com',
            'category' => 1
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@kaloha.com',
            'category' => 1
        ]);
    }
}
