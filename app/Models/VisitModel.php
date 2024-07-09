<?php

namespace App\Models;

use CodeIgniter\Model;
use Ramsey\Uuid\Uuid;

class VisitModel extends Model
{
    protected $table      = 'visit';
    protected $primaryKey      = 'id_visit';
    protected $useTimestamps = true;


    protected $allowedFields = [
        'id_visit',
        'patient_id',
        'poly_id',
    ];

    protected $beforeInsert = ['generateUUID'];

    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';

    protected function generateUUID(array $data)
    {
        $data['data']['id_visit'] = Uuid::uuid4()->toString();
        return $data;
    }

    public function getVisit($id_visit = false,  $orderBy = 'created_at', $direction = 'DESC')
    {
        if ($id_visit == false) {
            return $this->orderBy($orderBy, $direction)->findAll();
        }

        return $this->where(['id_visit' => $id_visit])->first();
    }
}
