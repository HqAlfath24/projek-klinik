<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Action extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_action' => [  //id detail treatment
                'type'           => 'VARCHAR',
                'constraint'     => 11,
                // 'unsigned'       => true,
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
            'mrecord_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'treatment_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'amount' => [  //jumlah
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'notes' => [  //catatan
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'bhp' => [  //barang habis pakai
                'type'       => 'INT',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id_action', true);
        $this->forge->createTable('action_treatment');
    }

    public function down()
    {
        $this->forge->dropTable('action_treatment');
    }
}
