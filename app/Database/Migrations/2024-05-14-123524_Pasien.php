<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pasien extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_patient' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                // 'unsigned'       => true,
                // 'auto_increment' => true,
            ],
            'mrecord_num' => [ //nomer rekam medis
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'slug' => [ //nomer rekam medis
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'name_patient' => [
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
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'address' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'badge' => [  //tanda pengenal
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_badge' => [  // nomor tanda pengenal
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'insurance' => [  // asuransi
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => TRUE,
            ],
            'insurance_num' => [  //nomor asuransi
                'type'       => 'VARCHAR',
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
        $this->forge->addKey('id_patient', true);
        $this->forge->createTable('patient');
    }

    public function down()
    {
        $this->forge->dropTable('patient');
    }
}
