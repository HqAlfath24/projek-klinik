<?php

namespace App\Models;

use CodeIgniter\Model;

class DokterModel extends Model
{
    protected $table      = 'doctor';
    protected $useTimestamps = true;

    public function getDokter($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
