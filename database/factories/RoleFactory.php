<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            //
            'task_name' => fake()->unique()->randomElement(['Kerjaan 1', 'Kerjaan 2', 'Kerjaan 3', 'Kerjaan 4', 'Kerjaan 5']),
        ];
    }
}
