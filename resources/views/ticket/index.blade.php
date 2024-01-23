@extends('layout.header')
@extends('layout.sidebar')
@section('title', 'TICKET')
@section('container')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
    <div class="container">
        <h2>LIST TICKET</h2>
        <!-- ADD SCHEDULE -->
        <a href="ticket/create" class="btn btn-primary my-3 float-right">ADD</a>

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <table class="table table-hover table-light">
            <thead class="thead-light">
            <tr>
                <th scope="col">NAME TICKET</th>
                <th scope="col">TYPE TICKET</th>
                <th scope="col">LENGTH OF JOURNEY</th>
                <th scope="col">PRICE</th>
                <th scope="col">ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($ticket as $ticket)    
            <tr>
            <td>{{$ticket->name_ticket}}</th>
            <td>{{$ticket->type_ticket}}</td>
            <td>{{$ticket->lenght}}</td>
            <td>IDR . {{number_format($ticket-> price,0)}}</td>
            <td><a href="ticket/{{$ticket->id}}/edit" class="btn btn-primary">Edit</a>
            <a href ="ticket/{{$ticket->id}}/delete" class="btn btn-danger">Delete</a>
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