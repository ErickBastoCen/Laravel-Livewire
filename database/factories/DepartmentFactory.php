<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Building;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $building = Building::inRandomOrder()->first();
        return [ 
            'name' => fake()->word(),
            'description' => fake()->paragraph(),
            
            'id_building' => $building->id,
        ];
    }
}
