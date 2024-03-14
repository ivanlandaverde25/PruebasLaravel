{{-- Plantilla desde la cual hereda --}}
@extends('plantilla')

{{-- Title --}}
@section('title', 'User {{ $id }}')

{{-- Body --}}
@section('body')
    <h1>Has accedido a la ruta para ver los detalles del usuario {{ $id }} </h1>
@endsection