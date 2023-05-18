<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\todolist>
 */
class TodolistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(7),
            'description' => $this->faker->paragraph(10),
            'status' => rand(0, 1),
            'user_id' => rand(1,50),
            'due_date' => now(),

        ];
    }
}
