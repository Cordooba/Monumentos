@extends('layout')

@section('titulo')
  Editar opinion {{$opinione->id}}
@endsection

@section('contenido')
  <h1>Editar Opinión</h1>

  <form action="/opiniones/{{ $opinione->id}}" method="post">
      {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group">
      <textarea name="mensaje" class="form-control">{{$opinione->mensaje}}</textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Actualizar Opinión</button>
    </div>
  </form>
@endsection
