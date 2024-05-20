<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Poli extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_poli' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name_poly' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'poly_code' => [
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
        $this->forge->addKey('id_poli', true);
        $this->forge->createTable('policlinics');
    }

    public function down()
    {
        $this->forge->dropTable('policlinics');
    }
}
