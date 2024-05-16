<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dokter extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_dokter' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_dokter' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'gender' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'telp' => [
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'speciality' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => TRUE,
            ],
            'sip' => [
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'no_rek' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => TRUE,
            ],
            'npwp' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => TRUE,
            ],
            'salary' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null'       => TRUE,
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
        $this->forge->addKey('id_d', true);
        $this->forge->createTable('dokter');
    }

    public function down()
    {
        $this->forge->dropTable('dokter');
    }
}
