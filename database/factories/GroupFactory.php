<?php

namespace Database\Factories;

use App\Models\Agency;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $agencies = Agency::count();
        return [
            'reference' => fake()->numerify('########'),
            'sendingDate' => $this->faker->date(),
            'receivingDate' => $this->faker->date(),
            'agency_id' => rand(1,$agencies),
        ];
    }
}
