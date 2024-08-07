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
            $key = url_title($doctor, '', true);
            $email = $key . '@gmail.com';
            $data = [
                'id_doctor' => $faker->unique()->uuid(),
                'slug' => $key,
                'name_doctor' => $doctor,
                // 'doctor_code' => $faker->unique()->randomNumber(),
                // 'birthday' => $faker->date(),
                // 'gender' => $faker->gender(), //pakai radio button
                // 'email'    => $faker->email(),
                'email'    => $email,
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
            $key = url_title($emp, '', true);
            $email = $key . '@gmail.com';
            $data = [
                'id_emp' => $faker->unique()->uuid(),
                'slug' => $key,
                'name_emp' => $emp,
                // 'doctor_code' => $faker->unique()->randomNumber(),
                'birthday' => $faker->date(),
                // 'gender' => $faker->gender(), //pakai radio button
                'email'    => $email,
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

        // medicine 
        for ($i = 0; $i < 10; $i++) {
            $medicine = $faker->name();
            $key = url_title($medicine, '', true);
            $data = [
                'id_medicine' => $faker->unique()->uuid(),
                'slug' => $key,
                'name_medicine' => $medicine,
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
            $this->db->table('medicine')->insert($data);
        }

        // patien
        for ($i = 0; $i < 10; $i++) {
            $patient = $faker->name();
            $key = url_title($patient, '', true);
            $email = $key . '@gmail.com';
            $data = [
                'id_patient' => $faker->unique()->uuid(),
                'mrecord_num' => $faker->unique()->randomNumber(),
                'slug' => $key,
                'name_patient' => $patient,
                'birthday' => $faker->date(),
                // 'gender' => $faker->gender(), //pakai radio button
                'phone' => $faker->phoneNumber(),
                'email'    => $email,
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
            $key = url_title($poly, '', true);
            $data = [
                'id_poly' => $faker->unique()->uuid(),
                'slug' => $key,
                'name_poly' => $poly,
                'poly_code' => $faker->unique()->randomAscii(),
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ];
            $this->db->table('polyclinic')->insert($data);
        }
    }
}
