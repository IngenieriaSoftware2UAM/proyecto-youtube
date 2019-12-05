
@extends('layouts.app')


@section('content')

<link href="{{ asset('css/index.css') }}" rel="stylesheet">
  

    <div class="container" style="float:left;background-color:white;margin-top:70px;margin-left:120px">
        
        @foreach ($videos as $video)
        <div class="card" style="background-color:#DDE0E5; width:850px;height:250px">
            <div class="card-header">
                {{-- <div class="col-sm"> --}}
                    <div class="card text-center" style="width: 18rem;margin-top:-8px;height:230px">
                    <img style="margin:20px;height:170px; width:200px; background-color:#EFEFEF" src="images/{{$video->imagen}}" 
                            class="card-img-top mx-auto d-block" alt="...">
                    
                    </div>
                {{-- </div> --}}
                {{-- <div  style="margin-left:300px;margin-top:-100px"> --}}
                    
                {{-- </div> --}}
                
                <a id="Boton" href="{{ url('/video/'.$video->id) }}" class="btn btn-info" >Ver</a>
                <a id="Boton2"  href="{{ url('/video/'.$video->id.'/edit') }}" class="btn btn-primary" >Editar</a>
                <div style="margin-left:450px;margin-top:-200px" >
                    <h2 >{{$video->nombre}}</h2>
                </div>    
                
                <form class="form-group"  method="POST" action="{{ url('video/'.$video->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <button type="submit"  class="btn btn-danger" id="Boton3" >Eliminar</button>
                </form>

                {{-- <div class="card-body">
                    <p class="card-text"> {{$video->user_id}}</p>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> 
                </div> --}}
          </div>
        @endforeach 
     
    
      
        
    </div>
    
    {{-- <script>
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
    </script> --}}
    <div style="margin-left:420px;margin-top:50px">
            {{$videos->links()}} 
        </div>
</div>
    

    
      
@endsection
