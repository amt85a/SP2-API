<?php

namespace Database\Factories;

use App\Models\Agency;
use App\Models\Group;
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
        $groups = Group::count();
        $states = State::count();
        return [
            'reference' => fake()->numerify('########'),
            'user_id' => rand(1, $users),
            'group_id' => rand(1, $groups),
            'state_id' => rand(1, $states),
        ];
    }
}
