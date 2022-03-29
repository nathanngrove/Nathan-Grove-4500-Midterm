@extends('adminlte::page')

@section('title', 'Make a Purchase')

@section('content_header')
    <h1>Make a Purchase</h1>
@stop

@section('content')
<form method="post" action="{{ route('purchases.store') }}" >
    @csrf
    <x-adminlte-input name="price" label="Price"/>
    <x-adminlte-input name="employee_id" label="Employee ID"/>
    <x-adminlte-input name="hardware_id" label="Hardware ID"/>
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop