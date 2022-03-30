@extends('adminlte::page')

@section('title', 'Registered Manufacturer')

@section('content_header')
    <h1>Manufacturer</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th><th>Name</th><th>Address</th><th>Email</th><th>Phone</th><th>Support Email</th><th>Support Phone</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $manufacturer->id; }}</td>
          <td>{{ $manufacturer->name; }}</td>
          <td>{{ $manufacturer->address;</td>
          <td>{{ $manufacturer->email; }}</td>
          <td>{{ $manufacturer->phone; }}</td>
          <td>{{ $manufacturer->support_email; }}</td>
          <td>{{ $manufacturer->support_phone; }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('manufacturers.index') }} " class="btn btn-primary" >Back to Manufacturers</a>
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