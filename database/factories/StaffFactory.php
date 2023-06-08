<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Department;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $department = Department::inRandomOrder()->first();
        return [ 
            'name' => fake()->name(),
            'lastName' => fake()->lastName(),
            'position' => fake()->jobTitle(),
            
            'id_department' => $department->id,
        ];
    }
}
