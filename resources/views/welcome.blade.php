@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Task</th><th>Progress</th><th style="width: 40px">Label</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Name</td>
          <td>Phone Number</td>
          <td>Email</td>
          <td>Form Factor</td>
          <td>Manufacturer</td>
          <td>CPU</td>
          <td>GPU</td>
          <td>RAM</td>
          <td>Price</td>
          <td>Purchase Date</td>
          <td>Notes</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop