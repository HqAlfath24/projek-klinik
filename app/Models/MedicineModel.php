<?php

namespace App\Models;

use CodeIgniter\Model;
use Ramsey\Uuid\Uuid;

class MedicineModel extends Model
{
    protected $table      = 'medicine';
    protected $primaryKey      = 'id_medicine';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'id_medicine',
        'slug',
        'name_medicine',
        'reg_num',
        'produsen',
        'distributor',
        'stok',
        'expired',
        'unit_price',
        'composition',
    ];

    protected $beforeInsert = ['generateUUID'];

    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';

    protected function generateUUID(array $data)
    {
        $data['data']['id_medicine'] = Uuid::uuid4()->toString();
        return $data;
    }

    public function getMedicine($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
