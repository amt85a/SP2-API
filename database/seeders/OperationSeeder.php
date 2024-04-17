<?php

namespace Database\Seeders;

use App\Models\Operation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $operations = ['laver', 'recoudre', 'repasser'];
        foreach ($operations as $operation){
            Operation::create([
                'name' => $operation,
            ]);
        }
    }
}
