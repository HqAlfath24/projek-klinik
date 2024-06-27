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
            $name = $faker->company();
            $data = [
                'id_poly' => $faker->unique()->uuid(),
                'slug' => $name,
                'name_poly' => $name,
                'poly_code' => $faker->unique()->randomNumber(),
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ];
            $this->db->table('policlinics')->insert($data);
        }
    }
}
