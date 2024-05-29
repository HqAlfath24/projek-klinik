<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DokterModel;

class Dokter extends BaseController
{
    protected $dokterModel;
    public function __construct()
    {
        $this->dokterModel = new DokterModel();
    }

    public function index()
    {
        // $pasien = $this->dokterModel->findAll();

        $data = [
            'title' => 'Daftar Dokter | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub5',
            'dokter' => $this->dokterModel->getDokter(),
        ];
        return view('admin/daftar/dokter/daftar_dokter', $data);
    }

    public function detail($slug)
    {

        $data = [
            // 'title' => 'Daftar Pasien | Klinik Erins', //sesuaikan saja wkwkk
            'dokter' => $this->dokterModel->getDokter($slug),
        ];
        // dd($data); //jika sudah ada view-nya, line ini dihapus dan tambahkan view dibawah
        return view('admin/daftar/dokter/detail_dokter', $data);
    }

    public function edit_dokter()
    {
        $data = [
            'title' => 'Form Edit Daftar Dokter | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub3',
        ];
        return view('admin/daftar/dokter/edit_dokter', $data);
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Daftar Dokter | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
            'dokter' => $this->dokterModel->getDokter($slug),
        ];
        dd($data);
        // return view('admin/daftar/dokter/edit_dokter', $data);
    }
}
