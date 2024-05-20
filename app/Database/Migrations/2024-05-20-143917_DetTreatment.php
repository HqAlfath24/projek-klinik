<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetTreatment extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_detail_treatment' => [  //id detail treatment
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'treatment_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'treatment_used_id' => [
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
        $this->forge->addKey('id_detail_treatment', true);
        $this->forge->addForeignKey('treatment_id', 'treatment', 'id_treatment', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('treatment_used_id', 'treatment_used', 'id_treatment_used', 'CASCADE', 'CASCADE');
        $this->forge->createTable('detail_treatment');
    }

    public function down()
    {
        $this->forge->dropTable('detail_treatment');
    }
}
