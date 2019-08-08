@extends('plantilla')

@section('seccion')
    <h1>Detalle de nota</h1>
    <h4>Id: {{$nota->id}}</h4>
    <h4>Nombre: {{$nota->nombre}}</h4>
    <h4>Detalle: {{$nota->descripcion}}</h4>
@endsection