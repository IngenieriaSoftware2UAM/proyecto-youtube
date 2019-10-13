@extends('layouts.app')

@section('content')
<div class="row">
    @foreach ($videos as $video)
    <div class="col-sm">
        <div class="card text-center" style="width: 18rem; margin-top: 70px;">
            <img src="images/trainers/{{$trainer->avatar}}"
            class="trainer card-img-top rounded-circle mx-auto d-block" alt="AVATAR">

            <div class="card-body">
                <h5 class="card-title">{{$trainer->name}}</h5>
                <p class="card-text">{{$trainer->description}}</p>
                <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver Más...</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection