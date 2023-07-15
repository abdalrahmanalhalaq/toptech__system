<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trainer>
 */
class TrainerFactory extends Factory
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
            'name' => fake()->name(),
            'email' =>fake()->email(),
            // 'mobile' => fake()->phoneNumber(),
            'mobile' => 970591231234,
            'address' => fake()->text('50'),
            'gender' => fake()->randomElement(['male' ,'female']),
        ];
    }
}
