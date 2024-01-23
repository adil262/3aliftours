@extends('layout.header')
@extends('layout.sidebar')
@section('title', 'COSTUMER')
@section('container')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
    <div class="container">
        <h2>LIST COSTUMER</h2>
        <!-- ADD SCHEDULE -->
        <a href="costumer/create" class="btn btn-primary my-3 float-right">ADD</a>

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <table class="table table-hover table-light">
            <thead class="thead-light">
            <tr>
                <th scope="col">NAME</th>
                <th scope="col">TELEPHONE</th>
                <th scope="col">ADDRESS</th>
                <th scope="col">EMAIL</th>
                <th scope="col">ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($costumer as $costumer)    
            <tr>
            <td>{{$costumer->name_cos}}</th>
            <td>{{$costumer->nohp_cos}}</td>
            <td>{{$costumer->address_cos}}</td>
            <td>{{$costumer->email_cos}}</td>
            <td><a href="costumer/{{$costumer->id}}/edit" class="btn btn-primary">Edit</a>
            <a href ="costumer/{{$costumer->id}}/delete" class="btn btn-danger">Delete</a>
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