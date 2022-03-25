@extends('adminlte::page')

@section('title', 'Inventory')

@section('content_header')
    <h1>Inventory</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th>Name</th><th>Phone Number</th><th>Email</th><th>Form Factor</th><th>Manufacturer</th><th>CPU</th><th>GPU</th><th>RAM</th><th>Price</th><th>Purchase Date</th><th>Notes</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a>Name</a></td>
          <td>Phone Number</td>
          <td>Email</td>
          <td>Form Factor</td>
          <td><a>Manufacturer</a></td>
          <td>CPU</td>
          <td>GPU</td>
          <td>RAM</td>
          <td>Price</td>
          <td>Purchase Date</td>
          <td><a>Notes</a></td>
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