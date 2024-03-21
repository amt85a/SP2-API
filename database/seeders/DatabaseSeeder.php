<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            AgencySeeder::class,
            StateSeeder::class,
            BookingSeeder::class,
            OperationSeeder::class,
            SockSeeder::class,
            SockOperationSeeder::class,
        ]);


    }
}
