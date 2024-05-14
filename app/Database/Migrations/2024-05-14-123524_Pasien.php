<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pasien extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ps' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_ps' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_rm' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'birthday' => [
                'type'       => 'DATE',
            ],
            'gender' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'telp' => [
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'badge' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_badge' => [
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'emergency_cont' => [
                'type'       => 'INT',
                'constraint' => '255',
                'null'       => TRUE,
            ],
            'asuransi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => TRUE,
            ],
            'no_polis' => [
                'type'       => 'INT',
                'constraint' => '255',
                'null'       => TRUE,
            ],
            'created_add' => [
                'type'       => 'DATETIME',
                'null'       => TRUE,
            ],
            'updated_add' => [
                'type'       => 'DATETIME',
                'null'       => TRUE,
            ],
        ]);
        $this->forge->addKey('id_ps', true);
        $this->forge->createTable('pasien');
    }

    public function down()
    {
        $this->forge->dropTable('pasien');
    }
}
