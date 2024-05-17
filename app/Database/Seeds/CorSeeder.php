<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CorSeeder extends Seeder
{
    public function run()
    {
        $corModel = new \App\Models\CorModel();

        $cores = [
            ['nome' => 'Vermelho'],
            'descricao' => 'descricao da cor',

            ['nome' => 'Verde'],
            'descricao' => 'descricao da cor',

            ['nome' => 'Azul'],
            'descricao' => 'descricao da cor',

            ['nome' => 'Amarelo'],
            'descricao' => 'descricao da cor',

            ['nome' => 'Preto'],
            'descricao' => 'descricao da cor',

            ['nome' => 'Branco'],
            'descricao' => 'descricao da cor',

            ['nome' => 'Rosa'],
            'descricao' => 'descricao da cor',
        ];

        //dd($cores);
        foreach ($cores as $cor) {

            $corModel->insert($cor);
        }
        echo "Cores inseridas com sucesso!";
    }
}
