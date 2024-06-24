<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prescription extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_prescription' => [  //id detail treatment
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
            'drug_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'amount' => [  //jumlah
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'dose' => [  //dosis
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'frequency' => [  //frekuensi
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'information' => [  //informasi
                'type'       => 'VARCHAR',
                'constraint' => '255',
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
