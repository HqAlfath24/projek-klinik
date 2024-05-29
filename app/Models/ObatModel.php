<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModel extends Model
{
    protected $table      = 'drug';
    protected $useTimestamps = true;

    public function getObat($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
