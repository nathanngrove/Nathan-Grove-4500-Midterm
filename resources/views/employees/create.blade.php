@extends('adminlte::page')

@section('title', 'Register an Employee')

@section('content_header')
    <h1>Register an Employee</h1>
@stop

@section('content')
<form method="post" action="{{ route('employees.store') }}" >
    @csrf
    <x-adminlte-input name="name" label="Name"/>
    <x-adminlte-input name="email" label="Email"/>
    <x-adminlte-input name="phone" label="Phone"/>
    <x-adminlte-button class="btn btn-primary" type="Submit" label="Register" />
</form>
@stop