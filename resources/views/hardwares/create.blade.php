@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>To Do's</h1>
@stop

@section('content')
<form method="post" action="{{ route('hardwares.store') }}" >
    @csrf
    <x-adminlte-input name="cpu" label="CPU"/>
    <x-adminlte-input name="gpu" label="GPU"/>
    <x-adminlte-input name="ram" label="RAM"/>
    <x-adminlte-select name="optionsTest1">
    <x-adminlte-options :options="['Option 1', 'Option 2', 'Option 3']"
        disabled="1" placeholder="Select an option..."/>
    </x-adminlte-select>
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop