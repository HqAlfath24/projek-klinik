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
        // $pasien = $this->pasienModel->findAll();

        $data = [
            'title' => 'Daftar Pasien | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub5',
            'pasien' => $this->pasienModel->getPasien(),
        ];
        return view('admin/daftar/daftar_pasien', $data);
    }

    public function detail($mrecord_num)
    {

        $data = [
            // 'title' => 'Daftar Pasien | Klinik Erins', //sesuaikan saja wkwkk
            'pasien' => $this->pasienModel->getPasien($mrecord_num),
        ];
        dd($data); //jika sudah ada view-nya, line ini dihapus dan tambahkan view dibawah
        // return view('',$data);
    }
}
