<?php

namespace Task\Middlewares;

use Imanghafoori\HeyMan\Facades\HeyMan;
use Task\Database\TaskStore;
use Task\Models\Task;

class PreventTooManyTasks
{
    public static function install()
    {
        HeyMan::onRoute('tasks.store')
            ->thisMethodShouldAllow([static::class , 'exceedsAffordableTasks'])
            ->otherwise()
            ->weRespondFrom([static::class, 'response']);
    }

    public static function response()
    {
        return redirect()
            ->route('tasks.index')
            ->with(['error' , 'you can not create too many daily tasks']);
    }

    public static function exceedsAffordableTasks(){
        return  TaskStore::countTask( auth()->id() ) < config('task.maximum_daily_task');
    }
}
