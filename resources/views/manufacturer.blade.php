@extends('adminlte::page')

@section('title', 'Manufacturers')

@section('content_header')
    <h1>Registered Manufacturers</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th>Manufacturer ID</th><th>Name</th><th>Address</th><th>Email</th><th>Phone</th><th>Support Email</th><th>Support Phone</th>
        </tr>
      </thead>
      <tbody>
        @foreach($manufacturers AS $manufacturer)
        <tr>
          <td>{{ $manufacturer->id }}</td>
          <td>{{ $manufacturer->name }}</td>
          <td>{{ $manufacturer->address }}</td>
          <td>{{ $manufacturer->email }}</td>
          <td>{{ $manufacturer->phone }}</td>
          <td>{{ $manufacturer->support_email }}</td>
          <td>{{ $manufacturer->support_phone }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('manufacturers.create') }} " class="btn btn-primary" >Register a Manufacturer</a>
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