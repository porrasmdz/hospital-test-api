<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\History>
 */
class HistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'hospital_motive' => fake()->name(),
            'actual_disease'=> fake()->lastName(),
            'disease_bg'=> fake()->word(),
            'family_bg'=>fake()->sentence(),
            'habits'=>fake()->sentence(),
            'smoke'=>fake()->sentence(),
            'drugs'=>fake()->sentence(),
            'drinks'=> fake()->sentence(),
            'couple'=>fake()->sentence(),
            'eating'=>fake()->sentence(),
            'sleep'=>fake()->sentence(),
            'sexuality'=>fake()->sentence(),
            'workout'=>fake()->sentence(),
            'allergies'=>fake()->sentence(),
            'patient_id' => rand(1,8),

        ];
    }
}
