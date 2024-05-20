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
            'name_drug' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_reg' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'produsen' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => TRUE,
            ],
            'distributor' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => TRUE,
            ],
            'stok' => [
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'expired' => [
                'type'       => 'DATETIME',
            ],
            'unit_price' => [
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'composition' => [
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
        $this->forge->addKey('id_obt', true);
        $this->forge->createTable('drug');
    }

    public function down()
    {
        $this->forge->dropTable('drug');
    }
}
