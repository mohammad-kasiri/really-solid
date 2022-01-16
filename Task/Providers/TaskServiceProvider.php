<?php

namespace Task\Providers;

use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class TaskServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        Event::listen(RouteMatched::class , function (RouteMatched $event){
            Str::is('tasks.*' , $event->route->getName()) &&
            !auth()->check() &&
            redirect()->guest('login')->throwResponse();
        User::resolveRelationUsing('tasks' , function () {
            return $this->hasMany(Task::class);
        });

        Route::middleware('web')->group(base_path('Task/routes/routes.php'));
        $this->loadMigrationsFrom([base_path('Task/migration')]);
        $this->loadViewsFrom(base_path('Task/views') , 'Task');
    }
}
