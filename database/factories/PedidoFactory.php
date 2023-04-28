<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Modesl\Pedido;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name,
            'address' => fake()->realText($maxNbChars = 200, $indexSize = 2),
            'payment' => fake()->realText($maxNbChars = 200, $indexSize = 2),
            'quantity' => fake()->numberBetween(1, 8),
            'produtos_id' => fake()->numberBetween(1, 5),
        ];
    }
}
