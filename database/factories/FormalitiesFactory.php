<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Department;


class FormalitiesFactory extends Factory
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
            'name' => fake()->word(),
            'description' => fake()->paragraph(),
            
            'id_department' => $department->id,
        ];
    }
}
