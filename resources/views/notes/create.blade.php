@extends('adminlte::page')

@section('title', 'Add a Note')

@section('content_header')
    <h1>Add a Note</h1>
@stop

@section('content')
<form method="post" action="{{ route('notes.store') }}" >
    @csrf
    <x-adminlte-input name="employee_id" label="Employee ID"/>
    <x-adminlte-select name="type" label="Type">
    <x-adminlte-options :options="['Hardware', 'Software']"
        placeholder="Select an option..."/>
    </x-adminlte-select>
    <x-adminlte-textarea name="service_notes" label="Service Notes"/>
    <x-adminlte-button type="Submit" class="btn btn-primary" label="Submit" />
</form>
@stop