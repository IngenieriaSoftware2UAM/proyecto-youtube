@extends('layouts.app')

@section('content')
<div class="row">
    @foreach ($videos as $video)
    <div class="col-sm">
        <div class="card text-center" style="width: 30rem; margin-top: 70px;">
            {{-- <img src="videos/{{$video->nombre}}"
            class="trainer card-img-top rounded-circle mx-auto d-block" alt="AVATAR"> --}}

            <video width="400" height="300" controls style="height: 400px; width: 400px; background-color: #EFEFEF; margin: 20px;">
                <source src="videos/{{$video->url}}" type="video/mp4" class="card-img-top mx-auto d-block"
                    style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;">
                {{-- <source src="mov_bbb.ogg" type="video/ogg"> --}}
                Your browser does not support HTML5 video.
            </video>


            <div class="card-body">
                <h5 class="card-title">{{$video->nombre}}</h5>
                <p class="card-text">{{$video->descripcion}}</p>
                <p class="card-text">{{$video->duracion}}</p>
                <p class="card-text">{{$video->calificacion}}</p>
                <p class="card-text">{{$video->visitas}}</p>
                <p class="card-text">{{$video->categoria_id}}</p>
                {{-- <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver Más...</a> --}}
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection