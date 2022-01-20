@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="alert alert-success" role="alert">
                    This is a success alert—check it out!
                </div>
                <div class="card my-3">
                    <div class="card-header">
                        <h4>create new task</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form>
                                <div class="form-group row">
                                    <label for="task_title" class="col-sm-2 col-form-label">Title: </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="task_title" class="form-control" id="task_title" value="">
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="Task_description" class="col-sm-2 col-form-label">Description: </label>
                                    <div class="col-sm-10">
                                    <textarea type="text" name="description" class="form-control" id="Task_description">
                                    </textarea>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="Task_description" class="col-sm-2 col-form-label">Status: </label>
                                    <div class="col-sm-10">
                                        <select  class="form-control">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-3 justify-content-center">
                                    <div class="col-sm-2">
                                        <button class="btn btn-primary  w-100">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-3">
                                    <a href="{{route('tasks.index')}}" class="btn btn-success btn-sm " >Back To Tasks</a>
                                </div>
                                <div class="col-3">
                                    <button class="btn btn-danger btn-sm float-end">Remove Task</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
