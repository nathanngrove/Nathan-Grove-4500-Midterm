@extends('adminlte::page')

@section('title', 'Registered Employee')

@section('content_header')
    <h1>Employee Information</h1>
@stop

@section('content')
  <p>{{ $person->name; }}</p>
  <p>{{ $person->email; }}</p>
  <p>{{ $person->phone; }}</p>
@stop