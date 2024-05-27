<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Appointment extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_appointment'   => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'patient_id'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'doctor_id'        => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'poly_id'        => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'appointment_date' => [  // tanggal janji temu
                'type'           => 'DATE'
            ],
            'appointment_time' => [  // jam janji temu
                'type'           => 'TIME'
            ],
            'appointment_code'           => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
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
        $this->forge->addKey('id_appointment', true);
        // $this->forge->addForeignKey('patient_id', 'patient', 'id_patient', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('doctor_id', 'doctor', 'id_doctor', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('poly_id', 'policlinic', 'id_poly', 'CASCADE', 'CASCADE');
        $this->forge->createTable('appointment');
    }

    public function down()
    {
        //
        $this->forge->dropTable('appointment');
    }
}
