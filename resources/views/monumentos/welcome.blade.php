<!-- Herencia de la plantilla layout -->
@extends('layout')

@section('titulo')
  Monumentos
@endsection

@section('contenido')

                <h1>Monumentos</h1>

                <ul>
                @foreach($monumentos as $monumento)
                  <li><a href="/monumentos/{{ $monumento->id }}">{{ $monumento->nombre }}</a></li>
                @endforeach
                </ul>
@stop
<!-- /ARROBA/endsection -->
