<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PasienSeeder extends Seeder
{
    public function run()
    {
        //
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'mrecord_num' => $faker->unique()->uuid(),
                'name_patient' => $faker->name(),
                'birthday' => $faker->date(),
                // 'gender' => $faker->gender(), //pakai radio button
                'phone' => $faker->phoneNumber(),
                'email'    => $faker->email(),
                'address' => $faker->address(),
                // 'badge' => $faker->name(), //dihapus ganti NIK
                'no_badge' => $faker->nik(),
                'insurance' => $faker->company(),
                'insurance_num' => $faker->unique()->randomNumber(),
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ];
            $this->db->table('patient')->insert($data);
        }
        // Simple Queries
        // $this->db->query('INSERT INTO patient (name_patient, mrecord_num, email) VALUES(:name_patient:, :mrecord_num:, :email:)', $data);

        // Using Query Builder
        // $this->db->table('patient')->insert($data);
        // $this->db->table('patient')->insertBatch($data);
    }
}
