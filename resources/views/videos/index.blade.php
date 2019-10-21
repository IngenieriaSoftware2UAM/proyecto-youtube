
@extends('layouts.app')


@section('content')
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link href='https://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'><link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


   
{{-- <p>Videos</p> --}}
<div class="row" style="background-color: white;float: left;">
    @foreach ($videos as $video)
    <div class="col-sm"style="float:left;margin-left: 1%;background-color: white;width: 5%;height:800px">

        <div class="card text-center" style="float:left;width:445px; margin-top: 6%;background-color: #E7EAEC;margin-left: 0.3%;">
            <video width="400" height="300" controls style="height: 310px; width: 400px; background-color: #FBFCFC ; margin: 20px;">
                <source src="videos/{{$video->url}}" type="video/mp4" class="card-img-top mx-auto d-block"
                    style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;">
                {{-- <source src="mov_bbb.ogg" type="video/ogg"> --}}
                Your browser does not support HTML5 video.</video>
            <div class="card-body">

            <b style="color:#384867;font-size:20px" class="card-title">{{$video->nombre}}</b>   <br> 
            <p >{{$video->fecha_publicacion}}</p>      
            <button class = "btn btn-info btn-sm" {--data-toggle="modal" data-target="#exampleModal"  --}}
            onclick="$var=funcion('Consultar: {{$video->nombre}}')"><a href="video/{{$video->id}}"></a><i class="fa fa-eye" ></i> </button>
            {{-- @include('modals.modal',$video) --}}
            {{-- <button class = "btn btn-primary btn-sm"><a  href="video/{{$video->id}}"><i class="fa fa-cog fa-spin"></i> </a> </button> --}}
            <button class = "btn btn-primary btn-sm" onclick="$var=funcion('Editar: {{$video->nombre}}')"><i class="fa fa-cog fa-spin"></i>  </button>
            <button class = "btn btn-danger btn-sm" onclick="$var=funcion('Eliminar: {{$video->nombre}}')"> <i class="fa fa-trash"></i> </button> <br>
            
            <strong style="float:right;margin:left:1px">Vistas: {{$video->visitas}}</strong> 
            {{-- <a  href="video/{{$video->id}}"> dame</a> --}}
            
            <br>
            <hr>
            <h6 style="float:left;margin:left:1px">Descripción: </h6> 

            <p style="float:left;margin:left:1px"class="card-text">{{$video->descripcion}}</p>
            {{-- <p class="card-text">{{$video->duracion}}</p> --}}

            <b style="float:left;margin:left:6px;" class="card-text">Calificación: {{$video->calificacion}}</b> <br> <br>
            <br>
            <b style="margin:left:10px;" class="card-text">Categoria: {{$video->categoria_id}}</b>
            
        </div>
    </div>
    </div>
    @endforeach

        
    <script>
        funcion=function(accion) {
          // bot = document.getElementById("jaja");
          // bot.onClick(alert("jajajajaj"));
           alert(accion);       
            //  $var =video;
            // alert(video);
            // $('#mNombre',exampleModal).val($var);
            // $('#exampleModal').modal('show');
            return $var;
        };
    </script>
    
 
</div>

     {{-- Modal --}}
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" name="mNombre" id="mNombre">nanan</h5>
                <input type="text" id="mNombre">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body" id="mContenido">kkkkkk</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
        </div>
    </div>
    {{-- Fin Ventana Modal --}}
 

      
@endsection
