@extends('layouts.app')
<style>
    table {
        border: 2px solid black;
        margin-top: 10px;
        width: 100%
    }
    table th {
        border: 1px solid black;
        text-align: center;
    }
    table tr {
        border: 1px solid black;
    }
    table td {
        border: 1px solid black;
    }
    .remove {
        text-align: center;
    }
</style>


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h1>ToDo list</h1>
                    <small><a href="new">New task</a></small>
                </div>
                <div class="card-body">
                    <table>
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Chicken dinner</td>
                            <td>Done</td>
                            <td class="remove">X</td>
                        </tr>
                        <tr>
                            <td>List from MySQL</td>
                            <td>In Progress</td>
                            <td class="remove">X</td>
                        </tr>
                        <tr>
                            <td>ToDo list finished</td>
                            <td>In Progress</td>
                            <td class="remove">X</td>
                        </tr>
                        <tr>
                            <td>Had Dinner</td>
                            <td>Done</td>
                            <td class="remove">X</td>
                        </tr>
                        </tbody>
                    </table>
            </div>
        </div>

{{--            <ul>--}}
{{--                @foreach($items as $item)--}}
{{--                    <li>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
        </div>
    </div>
</div>
@endsection
