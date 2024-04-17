<?php

namespace Database\Factories;

use App\Models\Operation;
use App\Models\Partner;
use App\Models\Sock;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SockOperationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $socks = Sock::count();
        $operations = Operation::count();
        $partners = Partner::count();
        return [
            "sock_id" => rand(1,$socks),
            "operation_id" =>rand(1,$operations),
            "partner_id" =>rand(1,$partners),
        ];
    }
}
