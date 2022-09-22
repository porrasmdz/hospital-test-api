<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'names' => fake()->name(),
            'lastnames'=> fake()->lastName(),
            'gender'=> fake()->word(),
            'cellphone'=>fake()->phoneNumber(),
            'phone_number'=>fake()->phoneNumber(),
            'age'=>fake()->randomNumber(),
            'occupation'=>fake()->jobTitle(),
            'born_date'=> fake()->date(),
            'civil_status'=>fake()->randomElement(['Married', 'Not Married']),
            'nationality'=>fake()->country(),
            'residence_city'=>fake()->city(),
            'address'=>fake()->address(),
            'education_grade'=>fake()->randomElement(['primary', 'college', 'university']),
            'city_id'=>fake()->randomNumber(9),
            'user_id'=>2,
            'email' => fake()->unique()->safeEmail(),


        ];
    }
}
