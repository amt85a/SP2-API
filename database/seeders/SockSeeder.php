<?php

namespace Database\Seeders;

use App\Models\Sock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $socks = Sock::factory()
            ->count(25)
            ->create();
    }
}
