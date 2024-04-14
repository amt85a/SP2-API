<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = ['En attente de livraison', 'attribuée à une agence', 'envoyé en agence','envoyé chez le client'];
        foreach ($states as $state) {
            State::create([
                'name' => $state,
            ]);
        }

    }
}
