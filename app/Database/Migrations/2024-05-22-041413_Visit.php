<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Visit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_visit'   => [  // id kunjungan
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                // 'unsigned'       => true,
                'auto_increment' => true,
            ],
            'appointment_id'       => [  // id janji temu
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'patient_id'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'doctor_id'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'emp_id'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'poly_id'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'num_queue'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'payment_status'   => [  // status pembayaran
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
        $this->forge->addKey('id_visit', true);
        // $this->forge->addForeignKey('appointment_id', 'appointment', 'id_appointment', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('patient_id', 'patient', 'id_patient', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('doctor_id', 'doctor', 'id_doctor', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('emp_id', 'employee', 'id_emp', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('poly_id', 'policlinic', 'id_poly', 'CASCADE', 'CASCADE');
        $this->forge->createTable('visit');
    }

    public function down()
    {
        $this->forge->dropTable('visit');
    }
}
