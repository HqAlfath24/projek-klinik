<?php

namespace App\Models;

use CodeIgniter\Model;

class PolyclinicModel extends Model
{
    protected $table      = 'policlinics';
    protected $useTimestamps = true;

    public function getPoly($poly_code = false)
    {
        if ($poly_code == false) {
            return $this->findAll();
        }

        return $this->where(['poly_code' => $poly_code])->first();
    }
}
