<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Teste extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Enviando dados do controller para a view. Beleza, deu certo!',
        ];

       return view ('teste', $data);
    }

    public function minha(){

        $corModel = new \App\Models\CorModel();

        $data = [
            'titulo' => 'Array de cores',
            'cores' => $corModel->findAll(), // findAll() é um método do Query Builder, que retorna todos os registros da tabela
        ];

        return view ('minha', $data);
    }
}
