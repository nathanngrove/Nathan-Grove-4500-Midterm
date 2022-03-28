@extends('adminlte::page')

@section('title', 'Add Manfucturer')

@section('content_header')
    <h1>Add Manfucturer</h1>
@stop

@section('content')
<form method="post" action="{{ route('manufacturers.store') }}" >
    @csrf
    <x-adminlte-input name="name" label="Name"/>
    <x-adminlte-input name="address" label="Address"/>
    <x-adminlte-input name="email" label="Email"/>
    <x-adminlte-input name="phone" label="Phone"/>
    <x-adminlte-input name="support_email" label="Support Email"/>
    <x-adminlte-input name="support_phone" label="Support Phone"/>
    <x-adminlte-button type="Submit" class="btn btn-primary" label="Submit" />
</form>
@stop