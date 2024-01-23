@extends('layout.header')
@extends('layout.sidebar')
@section('title', 'ADD SUPPLIER')
@section('container')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
    <div class="container">
        <h2>ADD SUPPLIER</h2>
        <br>
        <!-- ADD SCHEDULE -->
    <form method="POST" action="{{url('supplier')}}">
    @csrf
        <div class="form-group">
            <label for="name_sup">NAME</label>
            <input type="text" class="form-control @error('name_sup') is-invalid @enderror" id="name_sup" 
            placeholder="NAME"
            name="name_sup" value="{{old('name_sup')}}">
            @error('name_sup')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="nohp_sup">TELEPHONE</label>
            <input type="text" class="form-control @error('nohp_sup') is-invalid @enderror" id="nohp_sup" 
            placeholder="TELEPHONE"
            name="nohp_sup" value="{{old('nohp_sup')}}">
            @error('nohp_sup')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="address_sup">ADDRESS</label>
            <input type="text" class="form-control @error('address_sup') is-invalid @enderror" id="address_sup" 
            placeholder="ADDRESS"
            name="address_sup" value="{{old('address_sup')}}">
            @error('address_sup')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="email_sup">EMAIL</label>
            <input type="email" class="form-control @error('email_sup') is-invalid @enderror" id="email_sup" 
            placeholder="email@gmail.com"
            name="email_sup" value="{{old('email_sup')}}">
            @error('email_sup')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>
    </div>  
</div>
</div>
</div>
@endsection