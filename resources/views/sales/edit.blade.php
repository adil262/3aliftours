@extends('layout.header')
@extends('layout.sidebar')
@section('title', 'EDIT SALES')
@section('container')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
    <div class="container">
        <h2>EDIT SALES</h2>
        <br>
        
        <!-- ADD SCHEDULE -->
    <form method="POST" action="/3aliftour/public/sales/{{$sales->id}}">
    @method('patch')
    @csrf
        <div class="form-group">
            <label for="date_tr">DATE</label>
            <input type="date" class="form-control @error('date_tr') is-invalid @enderror" id="date_tr"
            name="date_tr" value="{{$sales->date_tr}}">
            @error('date_tr')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="balance">TYPE OF BALANCE</label>
            <input type="text" class="form-control @error('balance') is-invalid @enderror" id="balance"
            name="balance" value="{{$sales->balance}}">
            @error('balance')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="price_tr">PRICE</label>
            <input type="text" class="form-control @error('price_tr') is-invalid @enderror" id="price_tr"
            name="price_tr" value="{{$sales->price_tr}}">
            @error('price_tr')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="information_tr">INFORMATION</label>
            <input type="text" class="form-control @error('information_tr') is-invalid @enderror" id="information_tr"
            name="information_tr" value="{{$sales->information_tr}}">
            @error('information_tr')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <button type="submit" class="btn btn-warning">UPDATE</button>
    </form>
    </div>  
</div>
</div>
</div>
@endsection