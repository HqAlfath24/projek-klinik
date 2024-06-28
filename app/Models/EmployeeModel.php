<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table      = 'employee';
    protected $primaryKey      = 'id_emp';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'id_emp',
        'slug',
        'name_emp',
        'birthday',
        'gender',
        'emp_num',
        'email',
        'phone',
        'address',
        'account_num',
        'taxpayer_num',
        'salary',
        'role',
    ];

    protected $beforeInsert = ['generateUUID'];

    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';

    protected function generateUUID(array $data)
    {
        $data['data']['id_emp'] = Uuid::uuid4()->toString();
        return $data;
    }

    public function getEmployee($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
