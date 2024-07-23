<?php

namespace App\Models;

use CodeIgniter\Model;
use Ramsey\Uuid\Uuid;

class PasienModel extends Model
{
    protected $table      = 'patient';
    protected $primaryKey      = 'id_patient';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'id_patient',
        'slug',
        'name_patient',
        'mrecord_num',
        'birthday',
        'gender',
        'phone',
        'email',
        'password',
        'address',
        'badge',
        'no_badge',
        'insurance',
        'insurance_num',
    ];

    protected $beforeInsert = ['generateUUID'];

    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';

    protected function generateUUID(array $data)
    {
        $data['data']['id_patient'] = Uuid::uuid4()->toString();
        return $data;
    }

    public function getPasien($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
