@extends('layout.header')
@extends('layout.sidebar')
@section('title', 'ADD SCHEDULE')
@section('container')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
    <div class="container">
        <h2>ADD SCHEDULE</h2>
        <br>
        
        <!-- ADD SCHEDULE -->
    <form method="POST" action="{{url('schedule')}}">
    @csrf
        <div class="form-group">
            <label for="tgl_flight">DATE FLIGHT</label>
            <input type="date" class="form-control @error('tgl_flight') is-invalid @enderror" id="tgl_flight" placeholder="DATE FLIGHT"
            name="tgl_flight" value="{{old('tgl_flight')}}">
            @error('tgl_flight')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="tgl_return">DATE RETURN</label>
            <input type="date" class="form-control @error('tgl_flight') is-invalid @enderror" id="tgl_return" placeholder="DATE RETURN"
            name="tgl_return" value="{{old('tgl_return')}}">
            @error('tgl_flight')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="maskapai">MASKAPAI</label>
            <input type="text" class="form-control @error('maskapai') is-invalid @enderror" id="maskapai" placeholder="MASKAPAI"
            name="maskapai" value="{{old('maskapai')}}">
            @error('maskapai')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="ROUTE">ROUTE</label>
            <input type="text" class="form-control @error('route') is-invalid @enderror" id="route" placeholder="ROUTE"
            name="route" value="{{old('route')}}">
            @error('route')
            <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>
    </div>  
</div>
</div>
</div>
@endsection