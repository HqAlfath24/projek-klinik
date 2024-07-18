<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Obat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_medicine' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                // 'unsigned'       => true,
                'auto_increment' => true,
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'name_medicine' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'reg_num' => [
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
            'expired' => [  // kadaluarsa
                'type'       => 'DATE',
            ],
            'unit_price' => [  // harga satuan
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'composition' => [  // komposisi
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
        $this->forge->addKey('id_medicine', true);
        $this->forge->createTable('medicine');
    }

    public function down()
    {
        $this->forge->dropTable('medicine');
    }
}
