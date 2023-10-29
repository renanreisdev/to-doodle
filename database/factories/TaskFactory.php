<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Priority;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::all()->random();

        while ($user->categories->count() === 0 && $user->priorities->count() === 0) {
            $user = User::all()->random();
        }

        return [
            'is_done' => fake()->boolean(),
            'title' => fake()->text(30),
            'description' => fake()->text(100),
            'due_date' => now(),
            'category_id' => $user->categories->random(),
            'priority_id' => $user->priorities->random(),
            'user_id' => $user,
        ];
    }
}
