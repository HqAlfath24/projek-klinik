<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ObatModel;

class Obat extends BaseController
{
    protected $obatModel;
    public function __construct()
    {
        $this->obatModel = new ObatModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Obat | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
            'obat' => $this->obatModel->getObat(),
        ];
        return view('admin/daftar/obat/daftar_obat', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Daftar Pasien | Klinik Erins',
            'menu' => 'Tambah Pasien',
            'submenu' => 'sub5',
            'validation' => \Config\Services::validation(),
        ];
        // no page
        // dd($data);
        return view('admin/daftar/pasien/add_pasien', $data);
    }

    public function detail($slug)
    {

        $data = [
            // 'title' => 'Daftar Pasien | Klinik Erins', //sesuaikan saja wkwkk
            'obat' => $this->obatModel->getObat($slug),
        ];
        // dd($data); //jika sudah ada view-nya, line ini dihapus dan tambahkan view dibawah
        return view('admin/daftar/obat/detail_obat', $data);
    }

    public function edit_obat()
    {
        $data = [
            'title' => 'Form Edit Daftar Obat | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
        ];
        return view('admin/daftar/obat/edit_obat', $data);
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Daftar Obat | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',

            'dokter' => $this->obatModel->getObat($slug),
        ];
        dd($data);
        // return view('admin/daftar/obat/detail_obat', $data);
    }
}
