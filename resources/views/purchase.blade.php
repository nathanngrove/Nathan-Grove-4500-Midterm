@extends('adminlte::page')

@section('title', 'Purchases')

@section('content_header')
    <h1>Purchases</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th><th>Employee</th><th>Price</th><th>Manufacturer</th><th>Date</th><th>Notes</th>
        </tr>
      </thead>
      <tbody>
        @foreach($purchases AS $purchase)
        <tr>
          <td>{{ $purchase->id }}</td>
          <td>{{ $purchase->employee->name }}</td>
          <td>{{ $purchase->price }}</td>
          <td>{{ $purchase->hardware->manufacturer->name }}</td>
          <td>{{ $purchase->created_at }}</td>
          <td><a href="{{ route('purchases.notes.show') }}" class="btn btn-primary">View Notes</a></td>
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