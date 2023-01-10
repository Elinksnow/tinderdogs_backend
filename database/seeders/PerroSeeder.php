<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Perro;

class PerroSeeder extends Seeder
{
    public function run()
    {

        $faker = \Faker\Factory::create();

        $this->CrearPerros($faker, 100);
        //$this->insertarInteraccions($faker, 100);

        // $perro = new Perro();
        // $perro->nombre = 'Palmerita';
        // $perro->url_foto = 'https://pbs.twimg.com/media/EMzvMlMXYAAJeqX?format=jpg&name=large';
        // $perro->descripcion = 'Perro pequeño naranjo y juguetón';
        // $perro->save();

    }

    private function CrearPerros($faker, $cantidad)
    {

        foreach (range(1,$cantidad) as $index) {
            $api = 'https://dog.ceo/api/breeds/image/random';
            $response = json_decode(file_get_contents($api));
            $fotos = $response->message;

            DB::table('perros')->insert([
                'nombre' => $faker->firstname(),
                'url_foto' => $fotos,
                'descripcion' => $faker->sentence(),
            ]);
        }

        return true;
    }

}
