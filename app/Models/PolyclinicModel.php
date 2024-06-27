<?php

namespace App\Models;

use CodeIgniter\Model;
use Ramsey\Uuid\Uuid;

class PolyclinicModel extends Model
{
    protected $table      = 'polyclinic';
    protected $primaryKey      = 'id_poly';
    protected $useTimestamps = true;


    protected $allowedFields = [
        'id_poly',
        'slug',
        'name_poly',
        'poly_code',
    ];

    protected $beforeInsert = ['generateUUID'];

    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';

    protected function generateUUID(array $data)
    {
        $data['data']['id_poly'] = Uuid::uuid4()->toString();
        return $data;
    }

    public function getPoly($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
