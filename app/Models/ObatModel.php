<?php

namespace App\Models;

use CodeIgniter\Model;
use Ramsey\Uuid\Uuid;

class ObatModel extends Model
{
    protected $table      = 'drug';
    protected $primaryKey      = 'id_drug';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'id_drug',
        'slug',
        'name_drug',
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
        $data['data']['id_drug'] = Uuid::uuid4()->toString();
        return $data;
    }

    public function getObat($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
