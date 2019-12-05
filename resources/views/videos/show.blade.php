
@extends('layouts.app')


@section('content')
  
{{-- Boostrap --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
crossorigin="anonymous">

{{-- <div class="col-sm" style="float:left;margin-left: 1%;background-color: red;width: 5%;height:800px"> --}}
  
    <div class="container" style="background-color:#FCFEFF;height:900px">
        <div class="card text-center" style="float:left;width:650px; margin-top: 50px;background-color: #DDE0E5;margin-left: 250px;">
                <h2>{{$video->nombre}}</h2>
                    <video width="600" height="300" controls style="height: 310px; width: 600px; background-color: #FBFCFC ; margin: 20px;">
                        <source src="{{URL::asset('videos/')}}./{{$video->url}}" type="video/mp4" class="card-img-top mx-auto d-block"
                            style="height: 100px; width: 600px; background-color: red; margin: 20px;">
                        <source src="mov_bbb.ogg" type="video/ogg">
                        Your browser does not support HTML5 video.</video>
            
                    <div class="card-body">
                        <b>Publicado Por: </b>
                        <p>{{$video->user_id}} </p>
                        <b>Fecha Publicación:</b>            
                        <p>{{$video->fecha_publicacion}}</p> <br>
                        <br>
                        <b>Descripcion</b> 
                        <p>{{$video->descripcion}}</p>
                        
                    </div>
            </div>
            <a style="margin-top:50px;margin-left:50px" class="btn btn-info" href="{{ url('/video')}}"><i class="fa fa-reply" ></i> Regresar</a>  
    </div>
    

{{-- </div> --}}


@endsection
