@extends('plantilla')

@section('seccion')
  <h1>Este es mi equipo de trabajo</h1>
  @foreach($equipo as $item)
<a href="{{ route('nosotros',$item) }}" class="h4 text-danger">{{$item}}</a><br>
  @endforeach

  @if(!empty($nombre))
    
    @switch($nombre)
        @case('Irene')
            <h2 class="mt-5">Info de {{$nombre}}</h2>
            <p>Loren ipsuma asbsdgasdfbadfvbadfvsdvsd</p>
            @break
        @case('Troncho')
            <h2 class="mt-5">Info de {{$nombre}}</h2>
            <p>Malo malifimo</p>
            @break
            
    @endswitch
  @endif


@endsection