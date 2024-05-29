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
        return view('admin/daftar/pasien/daftar_pasien', $data);
    }

    public function detail($mrecord_num)
    {

        $data = [
            'title' => 'Detail Pasien | Klinik Erins', //sesuaikan saja wkwkk
            'menu' => 'daftar',
            'submenu' => 'sub1',
            'pasien' => $this->pasienModel->getPasien($mrecord_num),
        ];
        // dd($data); //jika sudah ada view-nya, line ini dihapus dan tambahkan view dibawah
        // return view('',$data);
        return view('admin/daftar/pasien/detail_pasien', $data);
    }

    public function edit_pasien()
    {
        $data = [
            'title' => 'Form Edit Daftar Pasien | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
        ];
        return view('admin/daftar/pasien/edit_pasien', $data);
    }

    public function edit($mrecord_num)
    {
        $data = [
            'title' => 'Form Edit Daftar Pasien | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
            'pasien' => $this->pasienModel->getPasien($mrecord_num),
        ];
        dd($data);
        // return view('admin/daftar/daftar_pasien/formedit_pasien', $data);
        // return view('admin/daftar/pasien/edit_pasien', $data);
    }
}
