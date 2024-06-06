<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioFakerSeeder extends Seeder
{
    public function run()
    {
        $usuarioModel = new \App\Models\UsuarioModel();

        //fake
        $faker = \Faker\Factory::create();

        //qtdade de registros q serao inseridos
        $criarQuantosUsuarios = 400;

        //inserindo registros
        $usuariosPush = [];


        for ($i = 0; $i < $criarQuantosUsuarios; $i++) {
            array_push($usuariosPush, [
                'nome' => $faker->unique()->name,
                'email' => $faker->unique()->email,
                'password_hash' => '123456', //alterar o fake seeder qdo conhecermos como criptografar a senha (hash)
                'ativo' => $faker->numberBetween(0, 1), //true ou false (ativou ou não ativo)
            ]);
        }

        //echo '<pre>';
        // print_r($usuariosPush);
        // exit;

        //inserindo no banco
        $usuarioModel->skipValidation(true) // bypass na validação
            ->protect(false) // bypass na proteção dos campos allowFields
            ->insertBatch($usuariosPush); //inserindo em lote  

        echo "$criarQuantosUsuarios usuaários inseridos com sucesso!";
    }
}
