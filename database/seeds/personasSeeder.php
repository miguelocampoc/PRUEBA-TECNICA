<?php

use Illuminate\Database\Seeder;

class personasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('personas')->insert([
            'n_cedula' =>'123456789',
            'primer_nombre'=>'Juan',
            'segundo_nombre' =>'Hernesto',
            'apellidos' => 'Diaz',
            'telefono'=>'1234567',
            'tipo'=>'propietario',
            'ciudad'=>'bogota',

        ]);
        DB::table('personas')->insert([
            'n_cedula' =>'42134342',
            'primer_nombre'=>'Diego',
            'segundo_nombre' =>'Alejandro',
            'apellidos' => 'Rojas',
            'telefono'=>'323213232',
            'tipo'=>'conductor',
            'ciudad'=>'bogota',

        ]);
    }
}
