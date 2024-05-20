<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pasien extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_patient' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name_patient' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'mrecord_num' => [
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
            'phone' => [
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'address' => [
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
            'insurance' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => TRUE,
            ],
            'insurance_num' => [
                'type'       => 'INT',
                'constraint' => '255',
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
        $this->forge->addKey('id_p', true);
        $this->forge->createTable('patient');
    }

    public function down()
    {
        $this->forge->dropTable('patient');
    }
}
