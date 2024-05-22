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
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'visit_id'       => [  //id kunjungan
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'emp_id'       => [  //id pegawai (perawat)
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'patient_id'       => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'doctor_id'        => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'complaint'        => [  //keluhan
                'type'           => 'TEXT',
            ],
            'diagnosis'        => [  //diagnosa
                'type'           => 'TEXT',
            ],
            'treatment'        => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'prescription'     => [  //resep
                'type'           => 'INT',
                'constraint'     => 11,
            ],
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
