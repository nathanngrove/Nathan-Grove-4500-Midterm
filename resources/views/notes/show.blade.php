@extends('adminlte::page')

@section('title', 'Note')

@section('content_header')
    <h1>Note Added</h1>
@stop

@section('content')
  <p>{{ $hardware->cpu; }}</p>
  <p>{{ $hardware->gpu; }}</p>
  <p>{{ $hardware->ram; }}</p>
@stop