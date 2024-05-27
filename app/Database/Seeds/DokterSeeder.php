<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class DokterSeeder extends Seeder
{
    public function run()
    {
        //
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'slug' => $faker->unique()->uuid(),
                'name_doctor' => $faker->name(),
                // 'doctor_code' => $faker->unique()->randomNumber(),
                // 'birthday' => $faker->date(),
                // 'gender' => $faker->gender(), //pakai radio button
                'email'    => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'address' => $faker->address(),
                'speciality' => $faker->company(),
                'license' => $faker->unique()->randomNumber(),
                // 'badge' => $faker->name(), //dihapus ganti NIK
                'account_num' => $faker->creditCardNumber(),
                'taxpayer_num' => $faker->unique()->randomNumber(),
                'salary' => $faker->randomNumber(5, false),
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ];
            $this->db->table('doctor')->insert($data);
        }
        // Simple Queries
        // $this->db->query('INSERT INTO patient (name_patient, mrecord_num, email) VALUES(:name_patient:, :mrecord_num:, :email:)', $data);

        // Using Query Builder
        // $this->db->table('patient')->insert($data);
        // $this->db->table('patient')->insertBatch($data);

    }
}
