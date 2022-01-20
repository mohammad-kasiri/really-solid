<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Task\Factory\TaskFactory;
use Task\Models\Task;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()->admin()->hasTasks(3)->create();
    }
}
