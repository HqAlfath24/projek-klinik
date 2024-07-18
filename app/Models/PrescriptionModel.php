<?php

namespace App\Models;

use CodeIgniter\Model;
use Ramsey\Uuid\Uuid;

class PrescriptionModel extends Model
{
    protected $table      = 'prescription';
    protected $primaryKey      = 'id_prescription';
    protected $useTimestamps = true;


    protected $allowedFields = [
        'id_prescription',
        'mrecord_id',
        'patient_slug',
        'medicine_id',
        'name_medicine',
        'quantity',
        'dosage',
        'instructions',
    ];

    protected $beforeInsert = ['generateUUID'];

    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';

    protected function generateUUID(array $data)
    {
        $data['data']['id_prescription'] = Uuid::uuid4()->toString();
        return $data;
    }

    public function getPrescription($id_prescription = false)
    {
        if ($id_prescription == false) {
            return $this->findAll();
        }

        return $this->where(['id_prescription' => $id_prescription])->first();
    }
}
