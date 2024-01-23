@extends('layout.log')
@section('title', 'LOGIN')
@section('login')
<form action="{{url('dashboard')}}" method="get">
@csrf
<div class="card-body">
    <center><h5 class="card-title">LOGIN</h5></center>
    <div class="form-group">
        <label for="username">USERNAME</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary float-right">LOGIN</button>
  </div>
</div>
</form>
@endsection