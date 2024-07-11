<?php

namespace App\Models;

use CodeIgniter\Model;
use Ramsey\Uuid\Uuid;

class MrecordModel extends Model
{
    protected $table      = 'mrecord';
    protected $primaryKey      = 'id_mrecord';
    protected $useTimestamps = true;


    protected $allowedFields = [
        'id_mrecord',
        'visit_id',
        'patient_id',
        'poly_id',
        'doctor_id',
        'emp_id',
        'complaint',
        'diagnosis',
        'treadment',
        'prescription',
    ];

    protected $beforeInsert = ['generateUUID'];

    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';

    protected function generateUUID(array $data)
    {
        $data['data']['id_mrecord'] = Uuid::uuid4()->toString();
        return $data;
    }

    public function getPoly($id_mrecord = false)
    {
        if ($id_mrecord == false) {
            return $this->findAll();
        }

        return $this->where(['id_mrecord' => $id_mrecord])->first();
    }
}
