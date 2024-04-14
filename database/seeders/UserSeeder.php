<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'email' => 'usersio@test.fr',
            'firstname' => '',
            'lastname' => '',
            'password' => 'password',
            'address' => '',
            'postal_code' => '',
        ]);
         \App\Models\User::factory(10)->create();


    }
}
