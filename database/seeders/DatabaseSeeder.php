<?php

namespace Database\Seeders;

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

         \App\Models\User::factory()->create([
            'id'=>1,
             'name' => 'Garcia',
             'email' => 'mail@example.com',
             'hospital'=>'Kennedy Norte',
             'hospital_address'=>'La puntilla',
             'password'=>bcrypt('password123') //password123
         ]);

         \App\Models\Patient::factory(20)->create();
         \App\Models\History::factory(10)->create();

         \App\Models\Citation::factory(20)->create();
         // \App\Models\User::factory(10)->create();

    }
}
