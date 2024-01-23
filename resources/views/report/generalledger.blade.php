@extends('layout.header')
@extends('layout.sidebar')
@section('title', 'REPORT')
@section('container')
<div class="container mt-5">
<div class="card">
    <div class="card-body">
    <div class="container">
    <h2>GENERAL LEDGER</h2>
<form action="{{url('search')}}" method="GET">
@csrf
    <div class="col-md-12">
    <div class="container mt-5">
        <table class="table table-hover table-light">
            <thead class="thead-light">
            <tr>
                <th scope="col">DATE</th>
                <th scope="col">INFORMATION</th>
                <th scope="col">DEBET</th>
                <th scope="col">KREDIT</th>
            </tr>
            
            </thead>
            <tbody>
            <tr>
            @foreach($report as $report)
              
              <td>{{date('d M Y', strtotime($report->date_tr))}}</td>
              <td>CASH<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$report->information_tr}}</td>
              <td>IDR. {{number_format($report->price_tr)}}</td>
              <td><br> IDR. {{number_format($report->price_tr)}}</td>
            </tr>
            @endforeach
            <tr>
            <td></td>
            <td><b>Total :</b></td>
            <td><b><i>IDR. {{number_format($total)}}</i></b></td>
            <td><b><i>IDR. {{number_format($total)}}</i></b></td>
            </tr>
            </tbody>
        </table>
        </div>
</div>
@endsection