<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perro;

class PerroSeeder extends Seeder
{
    public function run()
    {
        $perro = new Perro();
        $perro->nombre = 'Palmerita';
        $perro->url_foto = 'https://pbs.twimg.com/media/EMzvMlMXYAAJeqX?format=jpg&name=large';
        $perro->descripcion = 'Perro pequeño naranjo y juguetón';
        $perro->save();

        $perro = new Perro();
        $perro->nombre = 'Chaucha';
        $perro->url_foto = 'https://pbs.twimg.com/media/EMzvMlMXYAAJeqX?format=jpg&name=large';
        $perro->descripcion = 'Perro dalmata grande y leal';
        $perro->save();

        $perro = new Perro();
        $perro->nombre = 'Tepo Tepo';
        $perro->url_foto = 'https://pbs.twimg.com/media/EMzvMlLXkAAkezb?format=jpg&name=large';
        $perro->descripcion = 'Perro miedoso pequeno y gris';
        $perro->save();

        $perro = new Perro();
        $perro->nombre = 'Yo no fui';
        $perro->url_foto = 'https://pbs.twimg.com/media/EMzvMlLXkAAkezb?format=jpg&name=large';
        $perro->descripcion = 'Perro travieso con collar rojo';
        $perro->save();

        $perro = new Perro();
        $perro->nombre = 'Neumatex';
        $perro->url_foto = 'https://pbs.twimg.com/media/EMzvMlMXYAAJeqX?format=jpg&name=large';
        $perro->descripcion = 'Perro plomo y pensativo';
        $perro->save();

        $perro = new Perro();
        $perro->nombre = 'Coliforme';
        $perro->url_foto = 'https://pbs.twimg.com/media/EMzvMlMXYAAJeqX?format=jpg&name=large';
        $perro->descripcion = 'Perro tranquilo cafe con manchas blancas';
        $perro->save();
    }

}
