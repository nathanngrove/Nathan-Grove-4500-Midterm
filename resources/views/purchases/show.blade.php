@extends('adminlte::page')

@section('title', 'Purchase')

@section('content_header')
    <h1>Purchase Added</h1>
@stop

@section('content')
  <p>{{ $hardware->cpu; }}</p>
  <p>{{ $hardware->gpu; }}</p>
  <p>{{ $hardware->ram; }}</p>
@stop