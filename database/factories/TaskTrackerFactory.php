<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\TaskTracker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TaskTrackerFactory extends Factory
{

    protected $model = TaskTracker::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'title' => fake()->text(10),
            'content' => fake()->sentence(25),
            'priority' => fake()->randomElement(['low','medium','high']),
            'status' => fake()->randomElement(['in progress','completed']),
        ];
    }
}
