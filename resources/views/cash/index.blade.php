@extends('layout.header')
@extends('layout.sidebar')
@section('title', 'CASH')
@section('container')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
    <div class="container">
        <h2>LIST CASH</h2>
        <br>
        <br>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <table class="table table-hover table-light">
            <thead class="thead-light">
            <tr>
                <th scope="col">DATE</th>
                <th scope="col">TYPE OF BALANCE</th>
                <th scope="col">AMOUNT</th>
                <th scope="col">INFORMATION</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($cash as $cash)    
            <tr>
            <td>{{date('d M Y', strtotime($cash->date_tr))}}</td>
            <td>{{$cash->balance}}</td>
            <td>IDR. {{number_format($cash->price_tr,0)}}</td>
            <td>{{$cash->information_tr}}</td>
            </form>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>  
</div>
</div>
</div>
@endsection