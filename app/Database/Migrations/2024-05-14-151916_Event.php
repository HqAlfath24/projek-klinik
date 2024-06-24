<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Event extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_event'   => [  // id kunjungan
                'type'           => 'VARCHAR',
                'constraint'     => 11,
                // 'unsigned'       => true,
                'auto_increment' => true,
            ],
            // 'patient_id'       => [
            //     'type'           => 'INT',
            //     'constraint'     => 11,
            // ],
            // 'doctor_id'        => [
            //     'type'           => 'INT',
            //     'constraint'     => 11,
            // ],
            // 'poly_id'        => [
            //     'type'           => 'INT',
            //     'constraint'     => 11,
            // ],
            // 'appointment_date' => [  // tanggal janji temu
            //     'type'           => 'DATE'
            // ],
            // 'appointment_time' => [  // jam janji temu
            //     'type'           => 'VARCHAR',
            //     'constraint'     => 11,
            // ],
            // 'appointment_code' => [  // jam janji temu
            //     'type'           => 'TIME'
            // ],
            'slug'           => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
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
        $this->forge->addKey('id_event', true);
        // // $this->forge->addForeignKey('appointment_id', 'appointment', 'id_appointment', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('patient_id', 'patient', 'id_patient', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('doctor_id', 'doctor', 'id_doctor', 'CASCADE', 'CASCADE');
        // // $this->forge->addForeignKey('emp_id', 'employee', 'id_emp', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('poly_id', 'policlinic', 'id_poly', 'CASCADE', 'CASCADE');
        $this->forge->createTable('event');
    }

    public function down()
    {
        // Drop the table if it exists
        $this->forge->dropTable('event');
    }
}
