<?php

namespace App\Models;

use CodeIgniter\Model;
use Ramsey\Uuid\Uuid;

class DokterModel extends Model
{
    protected $table      = 'doctor';
    protected $primaryKey      = 'id_doctor';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'id_doctor',
        'slug',
        'name_doctor',
        'gender',
        'email',
        'password',
        'phone',
        'address',
        'speciality',
        'license',
        'account_num',
        'taxpayer_num',
        'salary',
    ];

    protected $beforeInsert = ['generateUUID'];

    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';

    protected function generateUUID(array $data)
    {
        $data['data']['id_doctor'] = Uuid::uuid4()->toString();
        return $data;
    }

    public function getDokter($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
