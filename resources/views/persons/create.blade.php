@extends('adminlte::page')

@section('title', 'Register Employee')

@section('content_header')
    <h1>Register Employee</h1>
@stop

@section('content')
<form method="post" action="{{ route('persons.store') }}" >
    @csrf
    <x-adminlte-input name="name" label="Name"/>
    <x-adminlte-input name="email" label="Email"/>
    <x-adminlte-input name="phone" label="Phone"/>
    <x-adminlte-button class="btn btn-primary" type="Submit" label="Register" />
</form>
@stop