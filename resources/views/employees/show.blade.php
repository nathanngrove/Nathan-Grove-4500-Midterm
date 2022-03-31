@extends('adminlte::page')

@section('title', 'Registered Employee')

@section('content_header')
    <h1>Employee Information</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th>Employee ID</th><th>Employee Name</th><th>Email</th><th>Phone</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $employee->id }}</td>
          <td>{{ $employee->name }}</td>
          <td>{{ $employee->email }}</td>
          <td>{{ $employee->phone }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('employees.index') }} " class="btn btn-primary" >Back to Employees</a>
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