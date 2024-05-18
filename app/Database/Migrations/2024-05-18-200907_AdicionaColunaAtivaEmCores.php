<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdicionaColunaAtivaEmCores extends Migration
{
    public function up()
    {
        //adiconar um campo. adiciona uma coluna na tabela cores

        $this->forge->addColumn('cores', [
            'ativa' => [
                'type' => 'BOOLEAN',
                'null' => false,
                'default' => true
            ]
        ]);
    }

    public function down()
    {
        //remover um campo. remove a coluna na tabela cores
        $this->forge->dropColumn('cores', 'ativa');
    }
}
