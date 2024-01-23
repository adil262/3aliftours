@extends('layout.header')
@extends('layout.sidebar')
@section('title', 'PURCHASE')
@section('container')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
    <div class="container">
        <h2>LIST PURCHASE</h2>
        <!-- ADD SCHEDULE -->
        <a href="purchase/create" class="btn btn-primary my-3 float-right">ADD</a>

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
                <th scope="col">ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($purchase as $purchase)    
            <tr>
            <td>{{date('d M Y', strtotime($purchase->date_tr))}}</td>
            <td>{{$purchase->balance}}</td>
            <td>IDR. {{number_format($purchase->price_tr,0)}}</td>
            <td>{{$purchase->information_tr}}</td>
            <td><a href="purchase/{{$purchase->id}}/edit" class="btn btn-primary">Edit</a>
            </td>
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