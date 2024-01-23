@extends('layout.header')
@extends('layout.sidebar')
@section('title', 'ADD COSTUMER')
@section('container')
<div class="container mt-5">
<div class="card">
    <div class="card-body">
    <div class="container">
        <h2>ADD COSTUMER</h2>
        <br>
        
        <!-- ADD SCHEDULE -->
    <form method="POST" action="{{url('costumer')}}">
    @csrf
        <div class="form-group">
            <label for="name_cos">NAME</label>
            <input type="text" class="form-control @error('name_cos') is-invalid @enderror" id="name_cos" 
            placeholder="NAME"
            name="name_cos" value="{{old('name_cos')}}">
            @error('name_cos')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="nohp_cos">TELEPHONE</label>
            <input type="text" class="form-control @error('nohp_cos') is-invalid @enderror" id="nohp_cos" 
            placeholder="TELEPHONE"
            name="nohp_cos" value="{{old('nohp_cos')}}">
            @error('nohp_cos')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="address_cos">ADDRESS</label>
            <input type="text" class="form-control @error('address_cos') is-invalid @enderror" id="address_cos" 
            placeholder="ADDRESS"
            name="address_cos" value="{{old('address_cos')}}">
            @error('address_cos')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="email_cos">EMAIL</label>
            <input type="email" class="form-control @error('email_cos') is-invalid @enderror" id="email_cos" 
            placeholder="email@gmail.com"
            name="email_cos" value="{{old('email_cos')}}">
            @error('email_cos')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>
    </div>  
</div>
</div>
</div>
@endsection