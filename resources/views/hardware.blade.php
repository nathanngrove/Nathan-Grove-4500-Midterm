@extends('adminlte::page')

@section('title', 'Registered Hardware')

@section('content_header')
    <h1>Registered Hardware</h1>
    <span>
        <h2>Order by: </h2>
        <div>
            <input type="radio" id="id" name="order-by" value="id" checked>
            <label for="id">ID</label>
        </div>

        <div>
            <input type="radio" id="manufacturer" name="order-by" value="manufacturer">
            <label for="manufacturer">Manufacturer</label>
        </div>
    </span>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th>Hardware ID</th><th>Manufacturer</th><th>CPU</th><th>GPU</th><th>RAM</th><th>Type</th>
        </tr>
      </thead>
      <tbody>
        @foreach($hardwares AS $hardware)
        <tr>
          <td>{{ $hardware->id }}</td>
          <td>{{$hardware->manufacturer->name}}</td>
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
<a href="{{ route('hardwares.create') }} " class="btn btn-primary" >Add Hardware</a>
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