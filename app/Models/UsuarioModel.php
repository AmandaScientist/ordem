<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table            = 'usuarios';

    protected $returnType       = 'App\Entities\Usuario'; //retorna um objeto do tipo Usuario
    protected $useSoftDeletes   = true; // Ativa a exclusão lógica
    protected $allowedFields    = [
        'nome',
        'email',
        'password',
        'reset_hash',
        'reset_expira_em',
        'imagem',
        //não colocarei o campo 'ativo' aqui, pois existe a manipulação de formulário
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'atualizado_em';
    protected $deletedField  = 'deletado_em';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];

    // Callbacks
    //eventos de model
    protected $beforeInsert   = [];
    protected $beforeUpdate   = [];
}
