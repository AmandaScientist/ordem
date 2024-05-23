<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Usuarios extends BaseController
{

    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new \App\Models\UsuarioModel();
    }

    
    public function index()
    {
        //view  com a lista de usuarios
        $data = [
            'titulo' => 'Listagem de Usuários do sistema',
        ];

        return view('Usuarios/index', $data);
    }
}
