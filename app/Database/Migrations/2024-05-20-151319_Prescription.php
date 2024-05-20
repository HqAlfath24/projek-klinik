<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prescription extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_prescription' => [  //id detail treatment
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
        $this->forge->addKey('id_prescription', true);
        $this->forge->createTable('prescription');
    }

    public function down()
    {
        $this->forge->dropTable('prescription');
    }
}
