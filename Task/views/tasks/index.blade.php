@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-success" role="alert">
                    This is a success alert—check it out!
                </div>
                <h5 class="my-4">You have 3h 3m before the end of the day</h5>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>

                        <a class="nav-item nav-link">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" >
                            <label class="form-check-label" for="defaultCheck1">
                                Not started
                            </label>
                        </a>

                        <a class="nav-item nav-link" >
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
                            <label class="form-check-label" for="defaultCheck2">
                                Doing
                            </label>
                        </a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="card my-3">
                            <div class="card-header">
                                <h2>List Of Tasks</h2>
                            </div>
                            <div class="card-body">
                                <table class="table ">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Task 1</td>
                                        <td>This Is About Task 1</td>
                                        <td>not started</td>
                                        <td>edit</td>
                                        <td>delete</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
