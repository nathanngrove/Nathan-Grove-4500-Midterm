@extends('adminlte::page')

@section('title', 'Add Note')

@section('content_header')
    <h1>Add Note</h1>
@stop

@section('content')
<form method="post" action="{{ route('hardwares.store') }}" >
    @csrf
    <x-adminlte-input name="cpu" label="CPU"/>
    <x-adminlte-input name="gpu" label="GPU"/>
    <x-adminlte-input name="ram" label="RAM"/>
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop