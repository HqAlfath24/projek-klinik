<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetPrescription extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_detail_prescription' => [  //id detail treatment
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'prescrption_id' => [
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
        $this->forge->addKey('id_detail_prescription', true);
        $this->forge->addForeignKey('prescription_id', 'prescription', 'id_prescription', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('drug_id', 'drug', 'id_drug', 'CASCADE', 'CASCADE');
        $this->forge->createTable('detail_prescription');
    }

    public function down()
    {
        $this->forge->dropTable('detail_prescription');
    }
}
