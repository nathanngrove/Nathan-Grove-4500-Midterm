@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h1>Add Hardware</h1>
@stop

@section('content')
<form method="post" action="{{ route('hardwares.store') }}" >
    @csrf
    <x-adminlte-input name="manufacturer_id" label="Manufacturer ID"/>
    <x-adminlte-input name="cpu" label="CPU"/>
    <x-adminlte-input name="gpu" label="GPU"/>
    <x-adminlte-input name="ram" label="RAM"/>
    <x-adminlte-select name="type" label="Type">
    <x-adminlte-options :options="['Desktop', 'Laptop', 'Tablet', 'Phone']"
        placeholder="Select an option..."/>
    </x-adminlte-select>
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop