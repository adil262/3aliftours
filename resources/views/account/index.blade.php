@extends('layout.header')
@extends('layout.sidebar')
@section('title', 'ThreeAlifTour')
@section('container')

<div class="container mt-5">
<div class="card">
    <div class="card-body">
    <div class="container">
        <h2>LIST ACCOUNT</h2>
        <br>
        <br>
        <table class="table table-hover table-light">
            <thead class="thead-light">
            <tr>
                <th scope="col">NO ACCOUNT</th>
                <th scope="col">NAME ACCOUNT</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($account as $account)    
            <tr>
            <th scope="row">{{$account->id}}</th>
            <td>{{$account->name_account}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>  
</div>
</div>
</div>
@endsection