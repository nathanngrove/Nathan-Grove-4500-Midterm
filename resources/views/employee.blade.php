@extends('adminlte::page')

@section('title', 'Employees')

@section('content_header')
    <h1>Registered Employees</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th><th>Name</th><th>Email</th><th>Phone</th>
        </tr>
      </thead>
      <tbody>
        @foreach($persons AS $person)
        <tr>
          <td>{{ $person->id }}</td>
          <td>{{ $person->name }}</td>
          <td>{{ $person->email }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<a href="{{ route('employees.create') }} " class="btn btn-primary">Register Employee</a>
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