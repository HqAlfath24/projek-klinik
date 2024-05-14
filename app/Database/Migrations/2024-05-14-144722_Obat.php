<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Obat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_obt' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_obt' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'stok' => [
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'expired' => [
                'type'       => 'DATETIME',
            ],
            'no_reg' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'produsen' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'harga' => [
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'komposisi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
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
        $this->forge->addKey('id_obt', true);
        $this->forge->createTable('obat');
    }

    public function down()
    {
        $this->forge->dropTable('obat');
    }
}
