<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    /**
     * Metodo que saca todos los videos de la BD.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $videos= Video::All();
        return view('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $user=$request->user();
        $video = new Video();
        $video->nombre=$request->input('titulo');
        $video->duracion = '00:10:32';////
        $video->descripcion=$request->input('descripcion');
        $video->calificacion = 4;////
        $video->visitas = 1000000;//
            $now = new \DateTime();
        $video->fecha_publicacion =  $now->format('Y-m-d H:i:s');//
        if($request->hasFile('video'))
        {   
            $file=$request->file('video');
            $name=time().$file->getClientOriginalName();//Da un nombre único con fecha
            $video->url=$name;
            $file->move(public_path().'/videos/',$name);//Guarda el file en esa ruta
        }
        if($request->hasFile('imagen'))
        {   
            $file=$request->file('imagen');
            $img=time().$file->getClientOriginalName();//Da un nombre único con fecha
            $video->imagen=$img;
            $file->move(public_path().'/images/',$img);//Guarda el file en esa ruta
        }
        $video->categoria_id = 1;
        $video->user_id = $request->user()->id;
        
    
        $video ->save();
        return "si";
        // return redirect()->route('videos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video=Video::find($id);
        // return $video;
        return view("modals/modal",compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $video=Video::find($id);
        // return view("modals/modal",compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
