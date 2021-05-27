@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>ToDo list</h2></div>
                </div>
            </div>
        </div>
    </div>
        <table style="border: 2px solid black">
            <tbody>
                <tr>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Remove</th>
                </tr>
                <tr>
                    <td>Fix MySQL</td>
                    <td>Done</td>
                    <td class="remove">X</td>
                </tr>
                <tr>
                    <td>LogIn</td>
                    <td>Done</td>
                    <td class="remove">X</td>
                </tr>
                <tr>
                    <td>Try to make this look ok</td>
                    <td>In progress</td>
                    <td class="remove">X</td>
                </tr>
            </tbody>
        </table>
</div>
@endsection
