<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          'fname' => fake()->firstName(),
          'lname' => fake()->lastName(),
          'age' => fake()->numberBetween($min = 18, $max = 22),
          'gender' => fake()->randomElement(['Male', 'Female']),
          'email' => fake()->safeEmail(),
        ];
    }
}
