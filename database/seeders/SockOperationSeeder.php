<?php

namespace Database\Seeders;

use App\Models\SockOperation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SockOperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sockOperation = SockOperation::factory()
            ->count(25)
            ->create();
    }
}
