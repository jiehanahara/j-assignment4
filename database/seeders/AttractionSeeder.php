<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create some sample attractions
        $attractions = [
            [
                'name' => 'Eiffel Tower',
                'description' => 'An iconic symbol of Paris, offering stunning views of the city.',
            ],
            [
                'name' => 'Great Wall of China',
                'description' => 'A historic fortification stretching across northern China.',
            ],
            [
                'name' => 'Machu Picchu',
                'description' => 'An ancient Incan city located in the Andes Mountains of Peru.',
            ],
        ];

        foreach ($attractions as $attraction) {
            \App\Models\Attraction::create($attraction);
        }

       
    }
}
