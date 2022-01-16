<?php

namespace Task\Database;

use Task\Models\Task;

class TaskStore
{
    /**
     * Save Task Into Tasks Table
     *
     * @param array $data
     * @param int $user_id
     * @return Task
     */
    public static function store($data , $user_id) : Task
    {
        return $task = Task::create($data + ['user_id' => $user_id]);
    }

    /**
     * @param int $user_id
     * @return int
     */
    public static function countTask(int $user_id) : int
    {
        return Task::where('user_id' , $user_id)->count();
    }

}
