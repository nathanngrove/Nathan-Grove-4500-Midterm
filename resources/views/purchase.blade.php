@extends('adminlte::page')

@section('title', 'Inventory')

@section('content_header')
    <h1>Current Inventory</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th>Employee ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Hardware ID</th><th>Manufacturer Name</th><th>Date</th><th>Hardware Specs</th><th>Notes</th>
        </tr>
      </thead>
      <tbody>
        @foreach($purchases AS $purchase)
        <tr>
          <td>{{ $purchase->employee->id }}</td>
          <td>{{ $purchase->employee->name }}</td>
          <td>{{ $purchase->employee->email }}</td>
          <td>{{ $purchase->employee->phone }}</td>
          <td><a href="hardwares/{{$purchase->hardware->id}}">{{ $purchase->hardware->id }}</a></td>
          <td><a href="manufacturers/{{$purchase->hardware->manufacturer->id}}">{{ $purchase->hardware->manufacturer->name }}</a></td>
          <td>{{ $purchase->created_at }}</td>
          <td><a href="hardwares/{{$purchase->hardware->id}}" class="btn btn-primary">View Hardware Specs</a></td>
          <td><a href="notes/{{$purchase->id}}" class="btn btn-primary">View Notes</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('purchases.create') }} " class="btn btn-primary" >Make a Purchase</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop