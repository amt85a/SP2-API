<?php

namespace Database\Factories;

use App\Models\Operation;
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
        $socks = Sock::all();
        $sock_id = $socks[rand(0, count($socks)-1)]->id;
        $operations= Operation::all();
        $operation_id = $operations[rand(0, count($operations)-1)]->id;
        return [
            "sock_id" => $sock_id,
            "operation_id" =>$operation_id,
        ];
    }
}
