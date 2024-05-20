<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Treatment extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_treatment' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'poly_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'name_treatment' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'price' => [  //harga
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
        $this->forge->addKey('id_treatment', true);
        $this->forge->addForeignKey('poly_id', 'policlinic', 'id_poly', 'CASCADE', 'CASCADE');
        $this->forge->createTable('treatment');
    }

    public function down()
    {
        $this->forge->dropTable('treatment');
    }
}
