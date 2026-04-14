<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\DestinationSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('12345678'),
        ]);
        User::factory()->create([
            'name' => 'Jiehan Ashara',
            'email' => 'jiehanahara@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'name' => fake("id_ID")->name(),
                'email' => fake("id_ID")->email(),
                'password' => bcrypt('12345678'),
            ]);
        }

        $this->call(DestinationSeeder::class);
    }
}
