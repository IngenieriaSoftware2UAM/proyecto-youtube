<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat1 = new Categoria();
        $cat1->nombre = "Deportes";
        $cat1->save();

        $cat2 = new Categoria();
        $cat2->nombre = "Música";
        $cat2->save();

        $cat3 = new Categoria();
        $cat3->nombre = "Educación";
        $cat3->save();

    }
}
