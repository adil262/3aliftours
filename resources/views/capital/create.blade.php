@extends('layout.header')
@extends('layout.sidebar')
@section('title', 'ADD CAPITAL')
@section('container')
<div class="container mt-6">
    <div class="card">
        <div class="card-body">
    <div class="container">
        <h2>ADD CAPITAL</h2>
        <br>
        
        <!-- ADD TICKET -->
    <form method="POST" action="{{url('capital')}}">
    @csrf
        <div class="form-group">
            <label for="date_tr">DATE</label>
            <input type="date" class="form-control @error('date_tr') is-invalid @enderror" id="date_tr" 
            placeholder="DATE"
            name="date_tr" value="{{old('date_tr')}}">
            @error('date_tr')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="balance">TYPE OF BALANCE</label>
            <input class="form-control @error('balance') is-invalid @enderror" id="balance"
            name="balance" value="{{old('balance')}}">
            @error('balance')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="price_tr">PRICE</label>
            <input type="text" class="form-control @error('price_tr') is-invalid @enderror" id="price_tr" 
            placeholder="PRICE"
            name="price_tr" value="{{old('price_tr')}}">
            @error('price_tr')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="information_tr">INFORMATION</label>
            <input type="text" class="form-control @error('information_tr') is-invalid @enderror" id="information_tr" 
            placeholder="INFORMATION"
            name="information_tr" value="{{old('information_tr')}}">
            @error('information_tr')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <a href="{{url('capital')}}" type="submit" class="btn btn-light">CANCEL</a>
        <button type="submit" class="btn btn-primary">SUBMIT</button>
        
    </form>
    </div>  
</div>
</div>
</div>
@endsection