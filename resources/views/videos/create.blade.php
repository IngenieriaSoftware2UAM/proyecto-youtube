@extends('layouts.app')
@section('title','Trainers Create')

@section('content')
@include('common.errors')   

<div class="container" style="width:680px;background-color:#cbe9dc;margin-top:80px;border-style: solid;border-color: darkgray">    
    <form class="form-group"  method="POST" action="{{ url('/video')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <b for="">Titulo</b>
                <input type="text" name="titulo" class="form-control">
            </div>
            <div class="form-group">
                <b for="">Descripción</b>
                <input type="text" name="descripcion" class="form-control">
            </div>
            <div class="form-group">
                <b for="">Imagen</b>
                <input type="file" name="imagen" >
            </div>
            <div class="form-group">
                <b for="">Video</b>
                <input type="file" name="video" >
            </div>
            <div class="container">
            <a style="margin-top:50px;margin-left:180px" class="btn btn-info" href="{{ url('/video')}}"><i class="fa fa-reply" ></i> Regresar</a> 
            <button  style="margin-top:50px;margin-left:50px" type="submit"  class="btn btn-success">Guardar</button>    
            </div>
        </form>
 
    </div>  
@endsection
