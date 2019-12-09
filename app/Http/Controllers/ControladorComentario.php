<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;
use App\Video;



class ControladorComentario extends Controller
{
    public function store(Request $request,$id)
    {
        $comentario= new Comentario();
        $comentario->descripcion=$request->input('comment');
        $now = new \DateTime();
        $comentario->fecha =  $now->format('Y-m-d H:i:s');
        $user=$request->user();
        $comentario->id_user=$user->id;
        $video=Video::find($id);
        $comentario->id_video=$video->id;
        $comentario->save();
        return redirect()->route('video.show',compact('video'));
       
    }

    public function delete(Comentario $comentario,Request $request)
    {
        // $request->user()->authorizeRoles(['user']);
        $video=Video::find($comentario->id_video);

        $user = auth()->user();//Si el user logueado fué el q creó el video o si es Admin.
        $role=$user->roles();
        if($user->id==$comentario->id_user || $user->id==1)
        {
            $comentario->delete();
        }
        else{
            abort(401,'Acción No Autorizada Sin Permiso');
        }
        return redirect()->route('video.show',compact('video'))->
        with('status','Comentario Eliminado Correctamente');
        // return redirect()->route('video.index');
    }
}
