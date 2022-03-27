@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer Added</h1>
@stop

@section('content')
  <p>{{ $manufacturer->name; }}</p>
  <p>{{ $manufacturer->address; }}</p>
  <p>{{ $manufacturer->phone; }}</p>
  <p>{{ $manufacturer->email; }}</p>
  <p>{{ $manufacturer->support_email; }}</p>
  <p>{{ $manufacturer->support_phone; }}</p>
@stop