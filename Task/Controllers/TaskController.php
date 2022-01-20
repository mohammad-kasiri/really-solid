<?php

namespace Task\Controllers;

use Task\Database\TaskStore;

class TaskController
{
    public function index()
    {

    }

    public function create()
    {

    }
    public function store()
    {
        $data = request()->only(['title' , 'description']);
        $task = TaskStore::store($data  , auth()->id());
        return redirect()->route('tasks.index')->with(['success' => 'Task Created !']);
    }

    public function edit()
    {

    }

    public function update()
    {

    }
    public function destroy()
    {

    }
}
