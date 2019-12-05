@extends('layouts.app')
@section('title','Trainers Create')

@section('content')

    {{-- @include('common.errors') valida sobre el tipo de dato--}} 
    <ul>
        @if($errors->any())
                <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                @endforeach
                </div>
        @endif
    </ul> 
<form class="form-group"  method="POST" action="{{ url('/video')}}" enctype="multipart/form-data">
        @csrf
        {{-- @include('trainers.form') --}}
        <div class="form-group">
            <label for="">Titulo</label>
            <input type="text" name="titulo" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descripción</label>
            <input type="text" name="descripcion" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Imagen</label>
            <input type="file" name="imagen" >
        </div>
        <div class="form-group">
            <label for="">Video</label>
            <input type="file" name="video" >
        </div>
        {{-- <div class="form-group">
            <label for="">Slug</label>
            <input type="text" name="slug" class="form-control">
        </div> --}}
        
        <button type="submit"  class="btn btn-success">Guardar</button>
</form>
<a href="{{ url('/video')}}">regresar</a>    


        
@endsection
