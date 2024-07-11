<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class AllSeeder extends Seeder
{
    public function run()
    {
        // call faker
        $faker = \Faker\Factory::create('id_ID');

        // doctor
        for ($i = 0; $i < 10; $i++) {
            $doctor = $faker->name();
            $data = [
                'id_doctor' => $faker->unique()->uuid(),
                'slug' => $doctor,
                'name_doctor' => $doctor,
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

        // emp
        for ($i = 0; $i < 10; $i++) {
            $emp = $faker->name();
            $data = [
                'id_emp' => $faker->unique()->uuid(),
                'slug' => $emp,
                'name_emp' => $emp,
                // 'doctor_code' => $faker->unique()->randomNumber(),
                'birthday' => $faker->date(),
                // 'gender' => $faker->gender(), //pakai radio button
                'email'    => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'address' => $faker->address(),
                // 'speciality' => $faker->company(),
                // 'license' => $faker->unique()->randomNumber(),
                // 'badge' => $faker->name(), //dihapus ganti NIK
                'account_num' => $faker->creditCardNumber(),
                'taxpayer_num' => $faker->unique()->randomNumber(),
                'salary' => $faker->randomNumber(5, false),
                // 'role' => ,
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ];
            $this->db->table('employee')->insert($data);
        }

        // drug
        for ($i = 0; $i < 10; $i++) {
            $drug = $faker->name();
            $data = [
                'id_drug' => $faker->unique()->uuid(),
                'slug' => $drug,
                'name_drug' => $drug,
                'reg_num' => $faker->unique()->randomNumber(),
                'produsen'    => $faker->company(),
                'distributor' => $faker->company(),
                'stok' => $faker->randomNumber(),
                'expired' => $faker->date(),
                'unit_price' => $faker->randomNumber(5, false),
                'composition' => $faker->text(),
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ];
            $this->db->table('drug')->insert($data);
        }

        // patien
        for ($i = 0; $i < 10; $i++) {
            $patient = $faker->name();
            $data = [
                'id_patient' => $faker->unique()->uuid(),
                'mrecord_num' => $faker->unique()->randomNumber(),
                'slug' => $patient,
                'name_patient' => $patient,
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

        // poly
        for ($i = 0; $i < 10; $i++) {
            $poly = $faker->company();
            $data = [
                'id_poly' => $faker->unique()->uuid(),
                'slug' => $poly,
                'name_poly' => $poly,
                'poly_code' => $faker->unique()->randomNumber(),
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ];
            $this->db->table('polyclinic')->insert($data);
        }
    }
}
