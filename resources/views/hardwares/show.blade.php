@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h1>Hardware</h1>
@stop

@section('content')
  <p>{{ $hardware->cpu; }}</p>
  <p>{{ $hardware->gpu; }}</p>
  <p>{{ $hardware->ram; }}</p>
@stop