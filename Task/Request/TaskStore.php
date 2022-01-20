<?php

namespace Task\Request;

use Illuminate\Support\Facades\Validator;

class TaskStore
{
    public static function rules()
    {
      return
          [
            'title'  => ['required']
      ];
    }
}
