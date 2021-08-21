<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>'administrador',
            'tipo'=>'administrador',
            'email' =>'administrador@acme.com',
            'password' => Hash::make('administrador12345'),  
        ]);
    }
}
