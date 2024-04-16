<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sock>
 */
class SockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $bookings = Booking::count();
        return [
            'reference' => fake()->word(),
            'description' => fake()->paragraph(),
            'amount' => fake()->numberBetween(1, 100),
            'booking_id'=> rand(1, $bookings),
        ];
    }
}
