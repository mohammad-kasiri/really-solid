<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Task\Models\Task;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Task::schema();
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
