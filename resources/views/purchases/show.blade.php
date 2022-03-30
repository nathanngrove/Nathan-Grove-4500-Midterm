@extends('adminlte::page')

@section('title', 'Purchased')

@section('content_header')
    <h1>Purchase</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th><th>Employee</th><th>Price</th><th>Manufacturer</th><th>Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $purchase->id }}</td>
          <td>{{ $purchase->employee->name }}</td>
          <td>{{ $purchase->price }}</td>
          <td>{{ $purchase->hardware->manufacturer->name }}</td>
          <td>{{ $purchase->date }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
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