@extends('layouts.app')


@section('content')

<div class="container" style="width:680px;background-color:cornsilk;margin-top:80px;border-style: solid;border-color: darkgray">
    <h2>Actualizar</h2>
        <form class="form-group"  method="POST" action="{{ url('/video/'.$video->id)}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                    <label for="">Titulo</label>
                    <input type="text" name="titulo"  value="{{$video->nombre}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Descripción</label>
                    <input type="text" name="descripcion" value="{{$video->descripcion}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Imagen</label>
                    <input type="file" name="imagen" value="{{$video->imagen}}">
                </div>
                <div class="form-group">
                    <label for="">Video</label>
                    <input type="file" value="{{$video->url}}" name="video"  >
                </div>
            
            <a style="margin-top:1px;margin-left:230px" class="btn btn-info" href="{{ url('/video')}}"><i class="fa fa-reply" ></i> Regresar</a> 
            <button type="submit"  class="btn btn-primary">Actualizar</button>        
        </form>
        
</div>
@endsection

