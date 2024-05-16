<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MedicalRecords extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_record'        => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'patient_id'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'doctor_id'        => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'appointment_id'   => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'diagnosis'        => [
                'type'           => 'TEXT',
            ],
            'treatment'        => [
                'type'           => 'TEXT',
            ],
            'prescription'     => [
                'type'           => 'TEXT',
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
        $this->forge->addKey('record_id', true);
        $this->forge->addForeignKey('patient_id', 'pasien', 'id_ps', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('doctor_id', 'dokter', 'id_dokter', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('appointment_id', 'appointments', 'id_appointment', 'CASCADE', 'CASCADE');
        $this->forge->createTable('mrecords');
    }

    public function down()
    {
        $this->forge->dropTable('mrecords');
    }
}
