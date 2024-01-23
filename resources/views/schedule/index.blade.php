@extends('layout.header')
@extends('layout.sidebar')
@section('title', 'SCHEDULE')
@section('container')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
    <div class="container cont">
        <h2>LIST SCHEDULE</h2>
        <!-- ADD SCHEDULE -->
        <a href="schedule/create" class="btn btn-primary my-3 float-right">ADD</a>

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <table class="table table-hover table-light">
            <thead class="thead-light">
            <tr>
                <th scope="col">DATE FLIGHT</th>
                <th scope="col">DATE RETURN</th>
                <th scope="col">MASKAPAI</th>
                <th scope="col">ROUTE</th>
                <th scope="col">ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($schedule as $schedule)    
            <tr>
            <td>{{date('d M Y', strtotime($schedule->tgl_flight))}}</td>
            <td>{{date('d M Y', strtotime($schedule->tgl_return))}}</td>
            <td>{{$schedule->maskapai}}</td>
            <td>{{$schedule->route}}</td>
            <td><a href="schedule/{{$schedule->id}}/edit" class="btn btn-primary">Edit</a>
            <a href ="schedule/{{$schedule->id}}/delete" class="btn btn-danger">Delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table> 
    </div>  
</div>
</div>
</div>
@endsection