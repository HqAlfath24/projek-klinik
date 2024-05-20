<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Employ extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_emp' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_emp' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'birthday' => [
                'type'       => 'DATE',
            ],
            'gender' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'emp_num' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'phone' => [
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'address' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'account_num' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => TRUE,
            ],
            'taxpayer_num' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => TRUE,
            ],
            'salary' => [
                'type'       => 'INT',
                'constraint' => '255',
                'null'       => TRUE,
            ],
            'role' => [
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
        $this->forge->addKey('id_emp', true);
        $this->forge->createTable('employee');
    }

    public function down()
    {
        $this->forge->dropTable('employee');
    }
}
