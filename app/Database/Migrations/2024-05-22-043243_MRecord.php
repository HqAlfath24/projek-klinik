<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MRecord extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_mrecord'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                // 'unsigned'       => true,
                'auto_increment' => true,
            ],
            // 'visit_id'       => [
            //     'type'           => 'VARCHAR',
            //     'constraint'     => '255',
            //     'null'           => true,
            // ],
            'patient_slug'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'poly_code'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'num_queue'       => [  //no antrian
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'doctor_id'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'emp_id'       => [  //id pegawai (perawat)
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'complaint'        => [  //keluhan
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'diagnosis'        => [  //diagnosa
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'notes'        => [  //diagnosa
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'status'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            // 'treatment'        => [
            //     'type'           => 'VARCHAR',
            //     'constraint'     => '255',
            //     'null'           => true,
            // ],
            // 'prescription'     => [  //resep
            //     'type'           => 'VARCHAR',
            //     'constraint'     => '255',
            //     'null'           => true,
            // ],
            'created_at'       => [
                'type'           => 'TIMESTAMP',
                'null'           => true,
            ],
            'updated_at'       => [
                'type'           => 'TIMESTAMP',
                'null'           => true,
            ],
            'deleted_at'       => [
                'type'           => 'TIMESTAMP',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id_mrecord', true);
        // $this->forge->addForeignKey('visit_id', 'visit', 'id_visit', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('emp_id', 'employee', 'id_employee', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('patient_id', 'patient', 'id_patien', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('doctor_id', 'doctor', 'id_doctor', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('treatment_used_id', 'treatment_used', 'id_treatment_used', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('prescription_id', 'prescription', 'id_prescription', 'CASCADE', 'CASCADE');
        $this->forge->createTable('mrecords');
    }

    public function down()
    {
        $this->forge->dropTable('mrecords');
    }
}
