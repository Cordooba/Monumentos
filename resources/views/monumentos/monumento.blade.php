@extends('layout')

@section('titulo')
  {{$monumento -> nombre}} - Información
@endsection

@section('contenido')
      <h1>{{$monumento -> nombre}}</h1>
      <p>Cuidad: {{$monumento -> ciudad}}</p>
      <p>Estilo: {{$monumento -> estilo}}</p>
      <p>Siglo: {{$monumento -> siglo}}</p>

      @unless($monumento->opinione->isEmpty())
        <h2>Opiniones</h2>
        <ul class="list-group">
          @foreach($monumento->opinione as $opinione)
            <li class="list-group-item">{{ $opinione->mensaje }} por {{ $opinione->usser->nombre }}.
              <form style="display: inline" class="pull-right" action="{{url('opiniones/'.$opinione->id)}}" method="post">
                {{method_field('delete')}}
                <button style="margin-left: 5px" type="submit" class="btn btn-xs btn-danger">
                <span class="glyphicon glyphicon-trash"></span></button>
              </form>

              <a style="margin-left: 5px" class="pull-right" href="{{ url('opiniones/'.$opinione->id.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
            </li>
          @endforeach
        </ul>
      @endunless
      <h3>Comparte tu opinión</h3>
      <form action="{{$monumento->id}}" method="post">
        <div class="form-group">
          <textarea name="mensaje" class="form-control" placeholder="Introduzca su mensaje..."></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Añadir Opinión</button>
        </div>
      </form>
      <a href="{{ URL::to('/') }}">Página Principal</a>
@endsection
