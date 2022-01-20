<?php

namespace Task\Middlewares;

use Imanghafoori\HeyMan\Facades\HeyMan;
use Task\Request\TaskStore;


class Validation
{
    public static function Install()
    {
        HeyMan::onRoute('tasks.store')->validate(TaskStore::rules());
    }
}
