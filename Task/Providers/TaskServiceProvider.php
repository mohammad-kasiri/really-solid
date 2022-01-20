<?php

namespace Task\Providers;

use App\Models\User;
use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Task\Models\Task;

class TaskServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
       \Task\Middlewares\Authentication::Install();
       \Task\Middlewares\PreventTooManyTasks::install();
       \Task\Middlewares\Validation::install();



        User::resolveRelationUsing('tasks' , function ($user) {
            return $user->hasMany(Task::class);
        });


        Route::middleware('web')->group(base_path('Task/routes/routes.php'));
        $this->loadMigrationsFrom([base_path('Task\migrations')]);
        $this->loadViewsFrom(base_path('Task/views') , 'Task');
        $this->mergeConfigFrom(base_path('Task/config/config.php') , 'task');
    }
}
