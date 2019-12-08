
@extends('layouts.app')


@section('content')
@include('common.success')
<link href="{{ asset('css/index.css') }}" rel="stylesheet">


    <div class="container" style="float:left;background-color:white;margin-top:70px;margin-left:120px">
        
        @foreach ($videos as $video)
        <div class="card" style="background-color:#DDE0E5; width:850px;height:250px">
            <div class="card-header">
                    <div class="card text-center" style="width: 18rem;margin-top:-8px;height:230px">
                    <img style="margin:20px;height:170px; width:200px; background-color:#EFEFEF" src="images/{{$video->imagen}}" 
                            class="card-img-top mx-auto d-block" alt="...">
                    </div>
          
                <a id="Boton" href="{{ url('/video/'.$video->id) }}" class="btn btn-info" >Ver</a>
                <a id="Boton2"  href="{{ url('/video/'.$video->id.'/edit') }}" class="btn btn-primary" >Editar</a>
                <div style="margin-left:450px;margin-top:-200px" >
                    <h2 >{{$video->nombre}}</h2>
                </div>    
                
                <form class="form-group"  method="POST" action="{{ url('video/'.$video->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <button type="submit"  class="btn btn-danger" id="Boton3" onclick="return confirmDelete('{{$video->nombre}}')">Eliminar</button>
                </form>
          </div>
        @endforeach 
       
    </div>
        <script >
            function confirmDelete ( video ) {
                var respuesta= confirm ("Desea eliminar el video: "+video);
                if(respuesta==true){
                    return true;
                }
                else{
                    return false;
                }
            }
        </script>
     
    <div style="margin-left:420px;margin-top:50px">
            {{$videos->links()}} 
    </div>
</div>
    
      
@endsection
