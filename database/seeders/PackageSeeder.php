<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // package discovery
        Package::create([
            'title' => 'Discovery',
            'Package_description' => 'Snorkel in the extinct volcanic crater of Molokini on a thrilling Maui excursion. Head to Turtle Town to swim with Hawaiian green turtles. Choose during your stay the day that suits you to go swimming with the green turtles of Hawaii. You will have the chance to snorkel and paddle board.',
            'Room_description' => 'The sea is calling you? The Hummingbird Room, located on the first floor of the hotel, offers you a direct view of the beach. You will be able to sleep while rocking to the sound of the waves. Double occupancy.',
            'Convenience' => 'Balcony, Air conditionning, Satellite TV, WiFi, Breakfast included, Hairdryer 220W, Safe, Bathrobe and slippers, Room service 24h/24h',
            'price' => 115
        ]);

        // package straiway to heaven
        Package::create([
            'title' => 'Stairway to heaven',
            'Package_description' => 'The only legal way to get to the top of the Haiku (Stairway To Heaven) stairs. Experience Oahu above the clouds! On the way to Kanehoe Bay, we saw the Ha\'iku Stairs known as the Stairway to Heaven. The vertical hike consists of 3,922 steps through the Ko\'olau Range. The stairs were built in 1942 by the U.S. Navy to transmit radio signals to ships sailing in the Pacific Ocean...',
            'Room_description' => 'With this package we deduce that you like nature and heights. The paradise room which is located on the 4th floor gives you a view on the dense vegetation of the site. Double occupancy.',
            'Convenience' => 'Balcony, Air conditionning, Satellite TV, WiFi, Breakfast included, Hairdryer 220W, Safe, Bathrobe and slippers, Room service 24h/24h',
            'price' => 135
        ]);

        // package gourmet
        Package::create([
            'title' => 'Gourmet',
            'Package_description' => 'Hawaiian cuisine is rich in culinary flavors from many countries, especially American, Chinese, Filipino, Japanese, Korean, Portuguese and Polynesian. This package is for the foodies of this world. Relax, strut your stuff and eat. A full day of varied tastings. The chefs will concoct for you tapas of sorts that you will taste all the famous dishes of the island. Special breakfast in your room, lunch and dinner in our dining room at our most beautiful table...',
            'Room_description' => 'The luxury of eating and the luxury of comfort. The deluxe room is ideal for this sensory experience. You will be king and queen of your stay at kahola.',
            'Convenience' => 'Balcony, Air conditionning, Satellite TV, WiFi, Breakfast included, Hairdryer 220W, Safe, Bathrobe and slippers, Room service 24h/24h',
            'price' => 175
        ]);
    }
}
