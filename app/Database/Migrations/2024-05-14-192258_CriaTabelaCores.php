<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriaTabelaCores extends Migration
{
    //up é o método que será executado quando rodarmos a migration, enviado para o banco de dados
    public function up()
    {
            $this->forge->addField([
                'id' => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'nome' => [
                    'type'       => 'VARCHAR',
                    'constraint' => '100',
                ],
                'descricao' => [
                    'type'       => 'TEXT',
                ],
              
            ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('cores');
    }

    //down é o método que será executado quando desfazemos a migration, rollback
    public function down()
    {
        $this->forge->dropTable('cores');
    }
}
