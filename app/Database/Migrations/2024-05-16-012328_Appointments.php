<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Appointments extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_appointment'   => [
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
            'poly_id'        => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'appointment_date' => [
                'type'           => 'DATE'
            ],
            'appointment_date' => [
                'type'           => 'TIME'
            ],
            'status'           => [
                'type'           => 'VARCHAR',
                'constraint'     => '20'
            ],
            'created_at'       => [
                'type'           => 'TIMESTAMP',
                'null'           => true
            ],
            'updated_at'       => [
                'type'           => 'TIMESTAMP',
                'null'           => true
            ],
            'deleted_at'       => [
                'type'           => 'TIMESTAMP',
                'null'           => true
            ],
        ]);
        $this->forge->addKey('appointment_id', true);
        $this->forge->addForeignKey('patient_id', 'patient', 'id_patient', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('doctor_id', 'doctor', 'id_doctor', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('poly_id', 'policlinic', 'id_poly', 'CASCADE', 'CASCADE');
        $this->forge->createTable('appointments');
    }

    public function down()
    {
        $this->forge->dropTable('appointments');
    }
}
