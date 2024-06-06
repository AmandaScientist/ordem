<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\I18n\Time;

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

        //usuando o helper esc() para escapar os dados
        foreach ($usuarios as $usuario) {

            //cria um array com os dados do usuário

            $data[] = [
                'imagem' => $usuario->imagem,
                'nome' => anchor("usuarios/exibir/$usuario->id", esc($usuario->nome), 'title="Exibir usuário' . esc($usuario->nome) . '"'), //para criar um link
                'email' => esc($usuario->email),
                'ativo' => ($usuario->ativo == true ? '<i class="fa fa-unlock text-success"></i>&nbsp;Ativo' : '<i class="fa fa-lock text-warning"></i>&nbsp;Inativo'),

            ];
        }

        //retorna os dados 
        $retorno = [
            'data' => $data,
        ];

        return $this->response->setJSON($retorno);
    }

    public function exibir(int $id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);

        //para testar se o usuário foi encontrado
        //dd($usuario);

        $data = [
            'titulo' => "Detalhando o usuário " . esc($usuario->nome),
            'usuario' => $usuario,
        ];

        return view('Usuarios/exibir', $data);
    }

    public function editar(int $id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);

        //para testar se o usuário foi encontrado
        //dd($usuario);

        $data = [
            'titulo' => "Editando o usuário " . esc($usuario->nome),
            'usuario' => $usuario,
        ];

        return view('Usuarios/editar', $data);
    }

    //método para reccuperar o usuário
    private function buscaUsuarioOu404(int $id = null)
    {
        //recebe o id do usuário, retupera o usuário
        if (!$id || !$usuario = $this->usuarioModel->withDeleted(true)->find($id)) {

            //mensagem de erro
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Usuário não encontrado $id");
        }

        return $usuario;
    }
}
