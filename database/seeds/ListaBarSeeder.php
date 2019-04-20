<?php

use Illuminate\Database\Seeder;

class ListaBarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente = \App\Cliente::create(['nombres' => 'El Bar', 'email' => 'bar@gmail.com']);
        $estado = \App\Estado::create(['nombre' => 'aprobada']);
        $genero = \App\Genero::create(['nombre' => 'Balada']);
        $lista = \App\Lista::create(['clientes_id' => $cliente->id,
                                    'estados_id' => $estado->id,
                                    'nombre' => 'Lista general']);
        \App\Cancion::create(['listas_id' => $lista->id,
                              'generos_id' => $genero->id,
                              'nombre' => 'Amor que mata',
                              'interprete' => 'Alvaro Torres',
                              'duracion' => '3:23']);
        \App\Cancion::create(['listas_id' => $lista->id,
                              'generos_id' => $genero->id,
                              'nombre' => 'Dudas',
                              'interprete' => 'Amanda Miguel',
                              'duracion' => '3:28']);
        \App\Cancion::create(['listas_id' => $lista->id,
                              'generos_id' =>$genero->id,
                              'nombre' => 'A pesar de todo',
                              'interprete' => 'Ana Gabriela',
                              'duracion' => '3:23']);
        \App\Cancion::create(['listas_id' => $lista->id,
                              'generos_id' => $genero->id,
                              'nombre' => 'El primer amor',
                              'interprete' => 'Beto Fernán',
                              'duracion' => '3:37']);
        $genero = \App\Genero::create(['nombre' => 'Tango']);                      
        \App\Cancion::create(['listas_id' => $lista->id,
                              'generos_id' => $genero->id,
                              'nombre' => 'La cumparsita',
                              'interprete' => 'Alfredo de Angelis',
                              'duracion' => '3:23']);
        \App\Cancion::create(['listas_id' => $lista->id,
                              'generos_id' => $genero->id,
                              'nombre' => 'Por una cabeza',
                              'interprete' => 'Carlos Gardel',
                              'duracion' => '3:19']);
        \App\Cancion::create(['listas_id' => $lista->id,
                              'generos_id' => $genero->id,
                              'nombre' => 'Caminito',
                              'interprete' => 'Florindo Sassone',
                              'duracion' => '3:23']);
        \App\Cancion::create(['listas_id' => $lista->id,
                              'generos_id' => $genero->id,
                              'nombre' => 'Volver',
                              'interprete' => 'Carlos Gardel',
                              'duracion' => '3:48']);
        $genero = \App\Genero::create(['nombre' => 'Rock']);
        \App\Cancion::create(['listas_id' => $lista->id,
                              'generos_id' => $genero->id,
                              'nombre' => 'Dont Cry',
                              'interprete' => 'Guns Roses',
                              'duracion' => '3:32']);
        \App\Cancion::create(['listas_id' => $lista->id,
                              'generos_id' => $genero->id,
                              'nombre' => 'The wall',
                              'interprete' => 'Pink Floyd',
                              'duracion' => '3:23']);
        \App\Cancion::create(['listas_id' => $lista->id,
                              'generos_id' => $genero->id,
                              'nombre' => 'Let is be',
                              'interprete' => 'The Beatles',
                              'duracion' => '3:23']);
        \App\Cancion::create(['listas_id' => $lista->id,
                              'generos_id' => $genero->id,
                              'nombre' => 'Come as your are',
                              'interprete' => 'Nirvana',
                              'duracion' => '3:46']);
        $genero = \App\Genero::create(['nombre' => 'Rancheras']);
        \App\Cancion::create(['listas_id' => $lista->id,
                              'generos_id' => $genero->id,
                              'nombre' => 'Luz de luna',
                              'interprete' => 'Javier Solis',
                              'duracion' => '3:23']);
        \App\Cancion::create(['listas_id' => $lista->id,
                              'generos_id' => $genero->id,
                              'nombre' => 'Mujeres Divinas',
                              'interprete' => 'Vicente Fernández',
                              'duracion' => '3:35']);
        \App\Cancion::create(['listas_id' => $lista->id,
                              'generos_id' => $genero->id,
                              'nombre' => 'Se me olvidó otra vez',
                              'interprete' => 'Juan Gabriel',
                              'duracion' => '3:41']);              

    }
}
