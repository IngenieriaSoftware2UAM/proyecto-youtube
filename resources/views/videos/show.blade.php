
@extends('layouts.app')


@section('content')
 
@include('common.success')
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
                        {{$user->name}} <br>
                        <b>Fecha Publicación:</b>            
                        {{$video->fecha_publicacion}} <br>
                        <b>Descripcion</b> 
                        {{$video->descripcion}}
                    </div>

                    {{-- Estos comentarios llegan del show del VideoController --}}
                    @isset($comentarios)
                        <h3 style="color:midnightblue">Comentarios:</h3>
                        @foreach ($comentarios as $comentario )
                        <hr>    
                            {{$comentario->descripcion}} 
                        
                            {{-- @php  Se debe hacer una validación para saber q usuario hizo q comentario
                            $usu=Illuminate\Support\Facades\DB::table('users')->
                                where('id',$comentario->id_user)->
                                select('users.name')->get();
                                echo "$usu";
                            @endphp --}}
                            
                           
                            <form class="form-group"  method="POST" action="{{ url('/comentario',[$comentario])}}" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <div style="color:slategray">
                                    @if ($comentario->id_user==1)
                                        <small>Comentado por:Admin</small>
                                    @else
                                        <small>Comentado por: User</small>       
                                    @endif
                                </div>
                                
                                <button style="margin-left:600px;width: 30px;" onclick="return confirmDelete('{{$comentario->id}}')" class = "btn btn-danger btn-sm" > <i class="fa fa-trash"></i> </button>
                            </form>
                            
                            {{-- <br> --}}
                        @endforeach 
                    @endisset
                          
                    <form class="form-group"  method="POST" action="{{ url('/comentario',[$video->id])}}" enctype="multipart/form-data">
                        @csrf
                        <textarea placeholder="Escribe tu comentario" name="comment"
                        cols="80" rows="2"></textarea>
                    <div class="container">
                            
                        <button  style="margin-top:5px;margin-left:35px" type="submit"  class="btn btn-primary">Comentar <i class="fa fa-comment" ></i></button>    
                    </div>
                    </form>
    
                   
        </div>
            <a style="margin-top:50px;margin-left:50px" class="btn btn-info" href="{{ url('/video')}}"><i class="fa fa-reply" ></i> Regresar</a>  
    </div>
    <script >
        function confirmDelete ( id ) {
            var respuesta= confirm ("Desea eliminar el comentario: "+id);
            if(respuesta==true){
                return true;
            }
            else{
                return false;
            }
        }
    </script>

@endsection
