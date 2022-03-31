@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h1>Hardware</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th>Hardware ID</th><th>Name</th><th>Manufacturer</th><th>CPU</th><th>GPU</th><th>RAM</th><th>Type</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $hardware->id }}</td>
          <td>{{ $hardware->name }}</td>
          <td>{{$hardware->manufacturer->name}}</td>
          <td>{{ $hardware->cpu }}</td>
          <td>{{ $hardware->gpu }}</td>
          <td>{{ $hardware->ram }}</td>
          <td>{{ $hardware->type }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('hardwares.index') }} " class="btn btn-primary" >Back to Hardwares</a>
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