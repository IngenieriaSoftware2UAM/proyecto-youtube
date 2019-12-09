
@extends('layouts.app')


@section('content')
@include('common.success')
<link href="{{ asset('css/index.css') }}" rel="stylesheet">


    <div class="container" style="float:left;background-color:white;margin-top:70px;margin-left:140px">
        {{-- <div class="container">  
            <div class="col-8">
                    <div class="input-group">
                        <input type="text" class="form-control" id="texto" placeholder="Ingrese nombre">
                        <div class="input-group-append"><span class="input-group-text">Buscar</span></div>
                    </div>
                    <div id="resultados" class="bg-light border"></div>
            </div>
            <!-- fin del html agregado-->
                <div class="col-8" id="contenedor">
                    {{-- @include('videos.index') --}}
                {{-- </div>
                <div id="cargando" hidden><h1>CARGANDO...</h1></div>
        </div>       --}} 


        @foreach ($videos as $video)
        <div class="card" style="background-color:#DDE0E5; width:850px;height:250px">
            <div class="card-header">
                    <div class="card text-center" style="width: 18rem;margin-top:-8px;height:230px">
                    <img style="margin:20px;height:170px; width:200px; background-color:#EFEFEF" src="images/{{$video->imagen}}" 
                            class="card-img-top mx-auto d-block" alt="...">
                    </div>
          
                <a id="Boton" href="{{ url('/video/'.$video->id) }}" class="btn btn-info" ><i class="fa fa-eye"></i> Ver</a>
                <a id="Boton2"  href="{{ url('/video/'.$video->id.'/edit') }}" class="btn btn-primary" ><i class="fa fa-cog fa-spin"></i> Editar</a>
                <div style="margin-left:450px;margin-top:-200px" >
                    <h2 >{{$video->nombre}}</h2>
                </div>    
                
                <form class="form-group"  method="POST" action="{{ url('video/'.$video->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <button type="submit"  class="btn btn-danger" id="Boton3" onclick="return confirmDelete('{{$video->nombre}}')"><i class="fa fa-trash"></i> Eliminar</button>
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

    <script>
        window.addEventListener('load',function(){
            document.getElementById("texto").addEventListener("keyup", () => {
            if((document.getElementById("texto").value.length)>=1)
                fetch(`/video/buscador?texto=${document.getElementById("texto").value}`,{ method:'get' })
                .then(response  =>  response.text() )
                .then(html      =>  {   document.getElementById("resultados").innerHTML = html  })
            else
                document.getElementById("resultados").innerHTML = ""
            })
        }); 
    </script> 


     
    <div style="margin-left:420px;margin-top:50px">
            {{$videos->links()}} 
    </div>
</div>
    
      
@endsection
