<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Perro;
use App\Models\Interaccion;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Perro::factory(10)->create();

        Interaccion::factory(10)->create();
        

    }
}
