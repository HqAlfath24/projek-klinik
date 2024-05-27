<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table      = 'patient';
    protected $useTimestamps = true;

    public function getPasien($mrecord_num = false)
    {
        if ($mrecord_num == false) {
            return $this->findAll();
        }
        return $this->where(['mrecord_num' => $mrecord_num])->first();
    }
}
