<?php

use Illuminate\Database\Seeder;
use App\Video;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $video1 = new Video();
        $video1->nombre = "EL COLCHÓN QUE SE HUNDE (Broma telefónica)";
        $video1->duracion = '00:10:32';
        $video1->descripcion = "Puteando a Zellen:
                                para celebrar el estreno de la comedia de zombis del año,
                                Zombieland: Mata y Remata.  18 de octubre en cines

                                TWITCH: https://www.twitch.tv/auronplay
                                CANAL SECUNDARIO: https://tinyurl.com/y758oate
                                TIENDA: https://auronshop.com/
                                MI LIBRO: https://goo.gl/BeRm3N
                                Sígueme en twitter: https://twitter.com/AuronPlay
                                Sígueme en facebook: http://www.facebook.com/AuronPlayOficial
                                Contacto: AuronPlay@gmail.com";

        $video1->calificacion = 4;
        $video1->visitas = 1000000;
        $video1->fecha_publicacion = "2019-10-12 07:27:55";
        $video1->categoria_id = 1;
        $video1->user_id = 1;
        $video1->url = "movimiento_naranja_yuawi_movimiento_ciudadano_Ti2pA5JgrMI_360p.mp4";

        $video1->save();


    }
}
