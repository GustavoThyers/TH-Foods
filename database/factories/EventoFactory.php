<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_user' => fake()->name(),
            'telephone_user' => fake()->phoneNumber(),
            'quantity' => fake()->numberBetween(1, 15),
            'date_time' => fake()->dateTimeThisMonth('+1 day'),
            'tipo_id' => fake()->numberBetween(1,5)
        ];
    }
}
