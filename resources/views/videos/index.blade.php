@extends('layouts.app')

@section('content')
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link href='https://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'><link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<div class="row" style="background-color: green;float: left;">
    @foreach ($videos as $video)
    <div class="col-sm"style="float:left;margin-left: 1%;background-color: yellow;width: 5%">

        <div class="card text-center" style="float:left;width:445px; margin-top: 6%;background-color: white;margin-left: 0.3%;">
            {{-- <img src="videos/{{$video->nombre}}"
            class="trainer card-img-top rounded-circle mx-auto d-block" alt="AVATAR"> --}}
            <video width="400" height="300" controls style="height: 350px; width: 400px; background-color: red; margin: 20px;">
                <source src="videos/{{$video->url}}" type="video/mp4" class="card-img-top mx-auto d-block"
                    style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;">
                {{-- <source src="mov_bbb.ogg" type="video/ogg"> --}}
                Your browser does not support HTML5 video.</video>

            <div class="card-body">

                <button class = "btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModall" > <i class="fa fa-eye" onclick="$video"></i> </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$video->nombre}}{{-- @foreach ($videos as $video)
                            {{$video->nombre}}{{$video->visitas}}@endforeach --}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>

                <button class = "btn btn-primary btn-sm"> <i class="fa fa-cog fa-spin"></i></button>
                <button class = "btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </button>

            <h5 class="card-title">{{$video->nombre}}</h5>
            <p class="card-text">{{$video->descripcion}}</p>
            <p class="card-text">{{$video->duracion}}</p>
            <p class="card-text">{{$video->calificacion}}</p>
            <p class="card-text">{{$video->visitas}}</p>
            <p class="card-text">{{$video->categoria_id}}</p>
            {{-- Bootstrap 4 --}}
                {{-- <i class="fas fa-cloud"></i> --}}
        </div>
    </div>

    </div>

    @endforeach
    
        
</div>




      
@endsection