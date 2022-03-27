@extends('adminlte::page')

@section('title', 'Registered Hardware')

@section('content_header')
    <h1>Registered Hardware</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th><th>Phone Number</th><th>Email</th><th>Form Factor</th><th>Manufacturer</th><th>CPU</th><th>GPU</th><th>RAM</th><th>Price</th><th>Purchase Date</th><th>Notes</th>
        </tr>
      </thead>
      <tbody>
        @foreach($hardwares AS $hardware)
        <tr>
          <td>{{ $hardware->id }}</td>
          <td>{{ $hardware->cpu }}</td>
          <td>{{ $hardware->gpu }}</td>
          <td>{{ $hardware->ram }}</td>
          <td>{{ $hardware->type }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<a href="{{ route('hardwares.create') }} " class="btn btn-primary" >Add hardware</a>
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