@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Create new task</h1>
                    </div>
                </div>
                <div class="card-body">
                    {{Form::open()}}
                    <input type="text" name="name" placeholder="Task"/>
                    <input type="submit" value="Create"/>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>


@endsection

