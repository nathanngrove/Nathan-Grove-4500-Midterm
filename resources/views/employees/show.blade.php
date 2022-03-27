@extends('adminlte::page')

@section('title', 'Registered Employee')

@section('content_header')
    <h1>Employee Information</h1>
@stop

@section('content')
  <p>{{ $employee->name; }}</p>
  <p>{{ $employee->email; }}</p>
  <p>{{ $employee->phone; }}</p>
@stop