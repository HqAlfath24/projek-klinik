<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Action extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_action' => [  //id detail treatment
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => TRUE,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => TRUE,
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null'       => TRUE,
            ],
        ]);
        $this->forge->addKey('id_action', true);
        $this->forge->createTable('action');
    }

    public function down()
    {
        $this->forge->dropTable('action');
    }
}
