{{-- Plantilla desde la cual hereda --}}
@extends('plantilla')

{{-- Title --}}
@section('title', 'Modify User')

{{-- Body --}}
@section('body')
    <h1>Has accedido a la ruta para modificar el usuario {{ $id }} </h1>
@endsection