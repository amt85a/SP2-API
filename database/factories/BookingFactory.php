<?php

namespace Database\Factories;

use App\Models\Agency;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::count();
        $agencies = Agency::count();
        $states = State::count();
        return [
            'reference' => fake()->numerify('########'),
            'user_id' => rand(1, $users),
            'agency_id' => rand(1, $agencies),
            'state_id' => rand(1, $states),
        ];
    }
}
