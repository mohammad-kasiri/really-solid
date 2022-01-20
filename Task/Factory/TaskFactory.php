<?php

namespace Task\Factory;

use Illuminate\Database\Eloquent\Factories\Factory;
use Task\Models\Task;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        return [
            'user_id'     => 1,
            'title'       => $this->faker->word(),
            'description' => $this->faker->sentence()
        ];
    }
}
