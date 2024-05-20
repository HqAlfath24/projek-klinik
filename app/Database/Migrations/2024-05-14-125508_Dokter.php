<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dokter extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_doctor' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name_doctor' => [
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
            'phone' => [
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'address' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'speciality' => [  //spesialisasi
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => TRUE,
            ],
            'license' => [ // nomor surat ijin
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'account_num' => [ //nomor rekening
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => TRUE,
            ],
            'taxpayer_num' => [  // npwp
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => TRUE,
            ],
            'salary' => [  // gaji
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
        $this->forge->addKey('id_doctor', true);
        $this->forge->createTable('doctor');
    }

    public function down()
    {
        $this->forge->dropTable('doctor');
    }
}
