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



        User::resolveRelationUsing('tasks' , function () {
            return $this->hasMany(Task::class);
        });

        Route::middleware('web')->group(base_path('Task/routes/routes.php'));
        $this->loadMigrationsFrom([base_path('Task/migration')]);
        $this->loadViewsFrom(base_path('Task/views') , 'Task');
    }
}
