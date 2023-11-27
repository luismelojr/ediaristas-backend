<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Service::create([
            'name' => 'Limpeza simples',
            'minimum_value' => 100,
            'amount_hours' => 6,
            'percentage' => 10,
            'bedroom_value' => 20,
            'bedroom_hours' => 2,
            'living_room_value' => 20,
            'living_room_hours' => 2,
            'bathroom_value' => 20,
            'bathroom_hours' => 2,
            'kitchen_value' => 20,
            'kitchen_hours' => 2,
            'yard_value' => 20,
            'yard_hours' => 2,
            'others_value' => 20,
            'others_hours' => 2,
            'icon' => 'tw-cleaning-1',
            'position' => 1
        ]);
    }
}
