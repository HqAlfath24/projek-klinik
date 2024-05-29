<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PolyclinicModel;

class Polyclinic extends BaseController
{
    protected $polyclinicModel;
    public function __construct()
    {
        $this->polyclinicModel = new PolyclinicModel();
    }

    public function index()
    {
        // $pasien = $this->dokterModel->findAll();

        $data = [
            'title' => 'Daftar Dokter | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub5',
            'polyclinic' => $this->polyclinicModel->getPoly(),
        ];
        return view('admin/daftar/polyclinic/list_polyclinic', $data);
    }

    public function detail($poly_code)
    {

        $data = [
            // 'title' => 'Daftar Pasien | Klinik Erins', //sesuaikan saja wkwkk
            'polyclinic' => $this->polyclinicModel->getPoly($poly_code),
        ];
        // dd($data); //jika sudah ada view-nya, line ini dihapus dan tambahkan view dibawah
        return view('admin/daftar/polyclinic/detail_polyclinic', $data);
    }

    public function edit_poly()
    {
        $data = [
            'title' => 'Form Edit Daftar Dokter | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub3',
        ];
        return view('admin/daftar/polyclinic/edit_polyclinic', $data);
    }

    public function edit($poly_code)
    {
        $data = [
            'title' => 'Form Edit Daftar Dokter | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
            'polyclinic' => $this->polyclinicModel->getPoly($poly_code),
        ];
        dd($data);
        // return view('admin/daftar/polyclinic/edit_polyclinic', $data);
    }
}
