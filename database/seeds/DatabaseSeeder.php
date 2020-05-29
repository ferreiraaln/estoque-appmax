<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserSeeder::class);
        DB::table('users')->insert([
            'name' => "teste",
            'email' => "teste@gmail.com",
            'password' => Hash::make('123456'),
        ]);

        DB::table('states')->insert([
            'nome' => "ativo",
            'states_id' => 1,
        ]);

        DB::table('states')->insert([
            'nome' => "baixado",
            'states_id' => 2,
        ]);

        DB::table('produtos')->insert([

            'states_id'=>1,
            'nome'=> "teste",
            'sku'=> 43,
            'quantidade'=> 200,
            'descricao'=>"testando"
        ]);
        
        DB::table('produtos')->insert([
            'states_id'=>2,
            'nome'=> "teste2",
            'sku'=> 44,
            'quantidade'=> 400,
            'descricao'=>"testando2"
        ]);


    }
}
