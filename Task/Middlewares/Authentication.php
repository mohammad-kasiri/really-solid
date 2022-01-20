<?php

namespace Task\Middlewares;

use Imanghafoori\HeyMan\Facades\HeyMan;

class Authentication
{
    public static function Install()
    {
//        Event::listen(RouteMatched::class , function (RouteMatched $event){
//            Str::is('tasks.*' , $event->route->getName()) &&
//            !auth()->check() &&
//            redirect()->guest('login')->throwResponse();
//        });

        HeyMan::onRoute('tasks.*')
            ->checkAuth()
            ->otherwise()
            ->redirect()->guest('login');
    }
}
