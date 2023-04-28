<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word,
            'description' => fake()->realText($maxNbChars = 200, $indexSize = 2),
            'image' => fake()->imageUrl,
            'price' => fake()->randomFloat(2, 10, 100),
            'categoria_id' => fake()->numberBetween(1, 5),
        ];
    }
}
