@extends('layout.header')
@extends('layout.sidebar')
@section('title', 'SALES')
@section('container')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
    <div class="container">
        <h2>LIST SALES</h2>
        <!-- ADD SCHEDULE -->
        <a href="sales/create" class="btn btn-primary my-3 float-right">ADD</a>

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
            
            @foreach ($sales as $sales)    
            <tr>
            <td>{{date('d M Y', strtotime($sales->date_tr))}}</td>
            <td>{{$sales->balance}}</td>
            <td>IDR. {{number_format($sales->price_tr,0)}}</td>
            <td>{{$sales->information_tr}}</td>
            <td><a href="sales/{{$sales->id}}/edit" class="btn btn-primary">Edit</a>
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