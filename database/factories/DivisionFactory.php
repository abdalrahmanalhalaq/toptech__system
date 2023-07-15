<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Division>
 */
class DivisionFactory extends Factory
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
            'price' => fake()->randomNumber(),
            'hours_number' => fake()->randomNumber(),
            'min_student_to_open' => fake()->randomNumber(),
            'status' => fake()->randomElement(['pending_progressing', 'information_meeting', 'in_progress', 'finished', 'closed']),
            'course_id' => fake()->numberBetween(0, 5),
            'trainer_id' => fake()->numberBetween(0, 5),
            'finished_at' => fake()->date(),
        ];
    }
}
