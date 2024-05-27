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

    public function recuperausuarios()
    {
         //atributos que serão retornados

       $atributos = ['id', 'nome', 'email', 'ativo', 'imagem'];

       $usuarios = $this->usuarioModel->select($atributos)->findAll();

       //receberá o array de objetos de usuários
       $data = [];

       foreach ($usuarios as $usuario) {
       
              $data[] = [
                'imagem' => $usuario->imagem,
                'nome' => esc($usuario->nome),
                'email' => esc($usuario->email),
                'ativo' => ($usuario->ativo == true ? 'Ativo' : '<span class="text-warning">Inativo</span>'),
              ];
          
       }

       //retorna os dados 
       $retorno = [
           'data' => $data,
       ];
     

         return $this->response->setJSON($retorno);
       
    }

}
