@extends('layout.header')
@extends('layout.sidebar')
@section('title', 'SUPPLIER')
@section('container')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
    <div class="container">
        <h2>LIST SUPPLIER</h2>
        <!-- ADD SCHEDULE -->
        <a href="supplier/create" class="btn btn-primary my-3 float-right">ADD</a>

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
            @foreach ($supplier as $supplier)    
            <tr>
            <td>{{$supplier->name_sup}}</th>
            <td>{{$supplier->nohp_sup}}</td>
            <td>{{$supplier->address_sup}}</td>
            <td>{{$supplier->email_sup}}</td>
            <td><a href="supplier/{{$supplier->id}}/edit" class="btn btn-primary">Edit</a>
            <a href ="supplier/{{$supplier->id}}/delete" class="btn btn-danger">Delete</a>
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