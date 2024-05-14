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

        return view ('minha');
    }
}
