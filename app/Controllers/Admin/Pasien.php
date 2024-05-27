<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PasienModel;

class Pasien extends BaseController
{
    protected $pasienModel;
    public function __construct()
    {
        $this->pasienModel = new PasienModel();
    }

    public function index()
    {
        $pasien = $this->pasienModel->findAll();

        $data = [
            'title' => 'Daftar Pasien | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub5',
            'pasien' => $pasien,
        ];
        return view('admin/daftar/daftar_pasien', $data);
    }

    public function detail($mrecord_num)
    {
        echo $mrecord_num;
    }
}
