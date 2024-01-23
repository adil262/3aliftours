@extends('layout.header')
@extends('layout.sidebar')
@section('title', 'ADD TICKET')
@section('container')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
    <div class="container">
        <h2>ADD TICKET</h2>
        <br>
        
        <!-- ADD TICKET -->
    <form method="POST" action="{{url('ticket')}}">
    @csrf
        <div class="form-group">
            <label for="name_ticket">NAME TICKET</label>
            <input type="text" class="form-control @error('name_ticket') is-invalid @enderror" id="name_ticket" 
            placeholder="NAME TICKET"
            name="name_ticket" value="{{old('name_ticket')}}">
            @error('name_ticket')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="type_ticket">TYPE TICKET</label>
            <input type="text" class="form-control @error('type_ticket') is-invalid @enderror" id="type_ticket" 
            placeholder="TYPE TYCKET"
            name="type_ticket" value="{{old('type_ticket')}}">
            @error('type_ticket')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="lenght">LENGTH OF JOURNEY</label>
            <input type="text" class="form-control @error('lenght') is-invalid @enderror" id="lenght" 
            placeholder="LENGTH OF JOURNEY"
            name="lenght" value="{{old('length')}}">
            @error('length')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="price">PRICE</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" 
            placeholder="PRICE"
            name="price" value="{{old('price')}}">
            @error('price')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>
    </div>  
</div>
</div>
</div>
@endsection