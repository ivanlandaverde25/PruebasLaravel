{{-- Plantilla desde la cual hereda --}}
@extends('plantilla')

{{-- Title --}}
@section('title', 'Delete User')

{{-- Body --}}
@section('body')
    <h1>Has accedido a la ruta para eliminar el usuario {{ $id }} </h1>
@endsection