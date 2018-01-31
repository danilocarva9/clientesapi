<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //seta = 0
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        //Cidades 
        DB::table('cidades')->truncate();
    	DB::table('cidades')->insert([
    		// 'id' => "1",
            'cid_nome' => "Cuiabá",
        ]);
     	DB::table('cidades')->insert([
     		// 'id' => "2",
            'cid_nome' => "Várzea Grande",
        ]);


        //Planos 
        DB::table('planos')->truncate();
    	DB::table('planos')->insert([
    		// 'id' => "1",
            'plan_nome' => "Silver",
            'plan_vantagens' => "Para controle financeiro de quem trabalha sozinho",
        ]);
     	DB::table('planos')->insert([
     		// 'id' => "2",
            'plan_nome' => "Gold",
            'plan_vantagens' => "Melhor opção para quem quer crescer e receber mais rápido.",      
        ]);
     	DB::table('planos')->insert([
     		// 'id' => "2",
            'plan_nome' => "Platium",
            'plan_vantagens' => "Mais notas e boletos para sua empresa.",
        ]);


    }
}
