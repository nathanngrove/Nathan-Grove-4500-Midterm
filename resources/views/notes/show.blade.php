@extends('adminlte::page')

@section('title', 'Note')

@section('content_header')
    <h1>Notes</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th><th>Employee</th><th>Service Type</th><th>Service Notes</th><th>Date</th><th></th>
        </tr>
      </thead>
      <tbody>
      @foreach($notes AS $note)
        <tr>
          <td>{{ $note->id }}</td>
          <td>{{ $note->purchase->employee->name }}</td>
          <td>{{ $note->service_type }}</td>
          <td>{{ $note->service_notes }}</td>
          <td>{{ $note->created_at }}</td>
          <td><a  class="btn btn-primary" style="background-color:red;" >Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('notes.create') }} " class="btn btn-primary" >Add a Note</a>
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