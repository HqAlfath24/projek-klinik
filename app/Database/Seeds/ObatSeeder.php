<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class ObatSeeder extends Seeder
{
    public function run()
    {
        //
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 1000; $i++) {
            $data = [
                'name_drug' => $faker->name(),
                'no_reg' => $faker->unique()->randomNumber(),
                'producer'    => $faker->company(),
                'distributor' => $faker->company(),
                'stok' => $faker->randomNumber(),
                'expired' => $faker->date(),
                'unit_price' => $faker->randomNumber(5, false),
                'composition' => $faker->text(),
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ];
            $this->db->table('doctor')->insert($data);
        }
    }
}
