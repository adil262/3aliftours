@extends('layout.header')
@extends('layout.sidebar')
@section('title', 'EDIT COSTUMER')
@section('container')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
    <div class="container">
        <h2>EDIT COSTUMER</h2>
        <br>
        
        <!-- ADD SCHEDULE -->
    <form method="POST" action="/3aliftour/public/costumer/{{$costumer->id}}">
    @method('patch');
    @csrf
        <div class="form-group">
            <label for="name_cos">NAME</label>
            <input type="text" class="form-control @error('name_cos') is-invalid @enderror" id="name_cos" placeholder="NAME"
            name="name_cos" value="{{$costumer->name_cos}}">
            @error('name_cos')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="nohp_cos">TELEPHONE</label>
            <input type="text" class="form-control @error('nohp_cos') is-invalid @enderror" id="nohp_cos" placeholder="TELEPHONE"
            name="nohp_cos" value="{{$costumer->nohp_cos}}">
            @error('nohp_cos')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="address_cos">ADDRESS</label>
            <input type="text" class="form-control @error('address_cos') is-invalid @enderror" id="address_cos" placeholder="ADDRESS"
            name="address_cos" value="{{$costumer->address_cos}}">
            @error('address_cos')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="email_cos">EMAIL</label>
            <input type="email" class="form-control @error('email_cos') is-invalid @enderror" id="email_cos" placeholder="email_cos"
            name="email_cos" value="{{$costumer->email_cos}}">
            @error('email_cos')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <button type="submit" class="btn btn-warning">UPDATE</button>
    </form>
    </div>  
</div>
</div>
</div>
@endsection