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
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'slug' => $faker->unique()->uuid(),
                'name_drug' => $faker->name(),
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
    }
}
