
@extends('layouts.app')


@section('content')
  
    {{-- <link href='https://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}


   
{{-- <p>Videos</p> --}}
{{-- <div class="row" style="background-color: white;float: left;">
    @foreach ($videos as $video)
    <div class="col-sm" style="float:left;margin-left: 1%;background-color: white;width: 5%;height:800px">

        <div class="card text-center" style="float:left;width:445px; margin-top: 6%;background-color: #E7EAEC;margin-left: 0.3%;">
            <video width="400" height="300" controls style="height: 310px; width: 400px; background-color: #FBFCFC ; margin: 20px;">
                <source src="videos/{{$video->url}}" type="video/mp4" class="card-img-top mx-auto d-block"
                    style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;">
            
                Your browser does not support HTML5 video.</video>
            <div class="card-body">

            <b style="color:#384867;font-size:20px" class="card-title">{{$video->nombre}}</b>   <br> 
            <p >{{$video->fecha_publicacion}}</p>      
            <button class = "btn btn-info btn-sm" {--data-toggle="modal" data-target="#exampleModal"  
            onclick="$var=funcion('Consultar: {{$video->nombre}}')"><a href="video/{{$video->id}}"></a><i class="fa fa-eye" ></i> </button>
           
            <button class = "btn btn-primary btn-sm" onclick="$var=funcion('Editar: {{$video->nombre}}')"><i class="fa fa-cog fa-spin"></i>  </button>
            <button class = "btn btn-danger btn-sm" onclick="$var=funcion('Eliminar: {{$video->nombre}}')"> <i class="fa fa-trash"></i> </button> <br>
            
            <strong style="float:right;margin:left:1px">Vistas: {{$video->visitas}}</strong> 
            
            <br><hr>
            <h6 style="float:left;margin:left:1px">Descripción: </h6> 

            <p style="float:left;margin:left:1px"class="card-text">{{$video->descripcion}}</p>
            
            <b style="float:left;margin:left:6px;" class="card-text">Calificación: {{$video->calificacion}}</b> <br> <br>
            <br>
            <b style="margin:left:10px;" class="card-text">Categoria: {{$video->categoria_id}}</b>
            
        </div>
    </div>
    </div>
    @endforeach --}}

    <div class="container">
        <br>
        @foreach ($videos as $video)
    
        <div class="card">
            <div class="card-header">
                <div class="col-sm">
                    <div class="card text-center" style="width: 18rem;margin-top:20px">
                    <img style="margin:20px;height:100px; width:100px; background-color:#EFEFEF" src="images/{{$video->imagen}}" 
                            class="card-img-top mx-auto d-block" alt="...">
                        <p>hh</p>
                    </div>
                    
                </div>
                <a href="#" class="btn btn-info" style="margin-left:330px;margin-top:-100px;float:left">Ver</a>
                <a href="#" class="btn btn-primary" style="margin-left:399px;margin-top:-100px;float:left">Editar</a>
                <a href="#" class="btn btn-danger" style="margin-left:485px;margin-top:-100px;float:left">Eliminar</a>
                <button class = "btn btn-danger btn-sm" > <i class="fa fa-trash"></i> </button>
            </div>
            <div class="card-body">
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
          </div>
    @endforeach  

    </div>
   
        
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

    
      
@endsection
