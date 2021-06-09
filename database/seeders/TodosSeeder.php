<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Categorias;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'name' => 'supervisor Agustin',
            'email' => 'super@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '1',
            'codigo' => 'adm1',
        ]);
        $useradmin=User::create([
            'name' => 'Madai',
            'email' => 'madai@gmail.com',
            'password' => Hash::make('madai1234'),
            'tipo' => '2',
            'codigo' => 'adm2',
        ]);
        $useradmin=User::create([
            'name' => 'encargado Madai',
            'email' => 'madaiencargado@gmail.com',
            'password' => Hash::make('madai12345'),
            'tipo' => '3',
            'codigo' => 'adm3',
        ]);
        $useradmin=User::create([
            'name' => 'cliente fernando',
            'email' => 'fernando@gmail.com',
            'password' => Hash::make('fernando'),
            'tipo' => '4',
            'codigo' => 'casa1',
        ]);
        $useradmin=User::create([
            'name' => 'Contador',
            'email' => 'contador@gmail.com',
            'password' => Hash::make('contador'),
            'tipo' => '5',
            'codigo' => 'casa1',
        ]);
        $categoria=Categorias::create([
            'categorias' => 'Audifonos',
            'descripcion' => 'Lo mejor en audifonos',
            'tipo' => 'audifonos',
        ]);
        $categoria=Categorias::create([
            'categorias' => 'telefonos',
            'descripcion' => 'Lo mejor en telefonia',
            'tipo' => 'telefonos',
            
        ]);
        $categoria=Categorias::create([
            'categorias' => 'electronica',
            'descripcion' => 'Lo mejor en electronica',
            'tipo' => 'electronica',
            
        ]);
       


    }
}
