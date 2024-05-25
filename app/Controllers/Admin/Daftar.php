<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Daftar extends BaseController
{
    public function daftar_obat(): string
    {
        $data = [
            'title' => 'Daftar Obat | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
        ];
        return view('admin/daftar/daftar_obat', $data);
    }
    public function daftar_pekerja()
    {
        $data = [
            'title' => 'Daftar Pekerja | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub2',
        ];
        echo view('admin/daftar/daftar_pekerja', $data);
    }
    public function daftar_dokter()
    {
        $data = [
            'title' => 'Daftar Dokter | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub3',
        ];
        echo view('admin/daftar/daftar_dokter', $data);
    }
    public function daftar_poli()
    {
        $data = [
            'title' => 'Daftar Poli | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub4',
        ];
        echo view('admin/daftar/daftar_poli', $data);
    }
    public function daftar_pasien()
    {
        $data = [
            'title' => 'Daftar Pasien | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub5',
        ];
        echo view('admin/daftar/daftar_pasien', $data);
    }
}
