<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PoliSeeder extends Seeder
{
    public function run()
    {
        //
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'name_poly' => $faker->unique()->uuid(),
                'name_poly' => $faker->company(),
                'poly_code' => $faker->unique()->randomNumber(),
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ];
            $this->db->table('policlinics')->insert($data);
        }
    }
}
