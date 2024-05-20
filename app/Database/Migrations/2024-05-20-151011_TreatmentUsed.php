<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TreatmentUsed extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_treatment_used' => [  //id detail treatment
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
        $this->forge->addKey('id_treatment_used', true);
        $this->forge->createTable('treatment_used');
    }

    public function down()
    {
        $this->forge->dropTable('treatment_used');
    }
}
