@extends('layout.header')
@extends('layout.sidebar')
@section('title', 'DASHBOARD')
@section('container')
<div class="container mt-5">

    
        
        <div class="row">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
      <div class="card-title">
        <h5>ACCOUNT</h5>
        <i class="fa fa-fw fa-list-ul"></i>
        <a href="{{url('account')}}" class="btn btn-primary">View</a>
      </div>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
      <div class="card-title">
        <h5>SCHEDULE</h5>
        <i class="fa fa-fw fa-briefcase"></i>
        <a href="{{url('schedule')}}" class="btn btn-primary">View</a>
      </div>
    </div>
  </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
      <div class="card-title">
        <h5>TICKETING</h5>
        <i class="fa fa-fw fa-briefcase"></i>
        <a href="{{url('ticket')}}" class="btn btn-primary">View</a>
      </div>
    </div>
  </div>
</div>
<div class="col-sm-3">
    <div class="card">
      <div class="card-body">
      <div class="card-title">
        <h5>COSTUMERS</h5>
        <i class="fa fa-fw fa-users"></i>
        <a href="{{url('costumer')}}" class="btn btn-primary">View</a>
      </div>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
      <div class="card-title">
        <h5>SUPPLIERS</h5>
        <i class="fa fa-fw fa-users"></i>
        <a href="{{url('supplier')}}" class="btn btn-primary">View</a>
      </div>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
      <div class="card-title">
        <h5>CASH</h5>
        <i class="fa fa-fw fa-exchange"></i>
        <a href="{{url('cash')}}" class="btn btn-primary">View</a>
      </div>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
      <div class="card-title">
        <h5>CAPITAL</h5>
        <i class="fa fa-fw fa-exchange"></i>
        <a href="{{url('capital')}}" class="btn btn-primary">View</a>
      </div>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
      <div class="card-title">
        <h5>SALES</h5>
        <i class="fa fa-fw fa-exchange"></i>
        <a href="{{url('sales')}}" class="btn btn-primary">View</a>
      </div>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
      <div class="card-title">
        <h5>PURCHASE</h5>
        <i class="fa fa-fw fa-exchange"></i>
        <a href="{{url('purchase')}}" class="btn btn-primary">View</a>
      </div>
      </div>
    </div>
  </div>

          
</div>
@endsection