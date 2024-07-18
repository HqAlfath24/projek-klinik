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
                'constraint'     => '255',
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
            'patient_slug' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'medicine_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'name_medicine' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'quantity' => [  //jumlah
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'dosage' => [  //dosis
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'instructions' => [  //frekuensi
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
