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
    <x-adminlte-select name="type" label="Type">
        <x-adminlte-options :options="['desktop'=>'desktop', 'laptop'=>'laptop', 'tablet'=>'tablet', 'phone'=>'phone'" empty-option="Select an option..."> 
    <x-adminlte-select/>
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop