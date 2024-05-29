<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Daftar extends BaseController
{
    // public function daftar_obat(): string
    // {
    //     $data = [
    //         'title' => 'Daftar Obat | Klinik Erins',
    //         'menu' => 'daftar',
    //         'submenu' => 'sub1',
    //     ];
    //     return view('admin/daftar/daftar_obat/view_daftar_obat', $data);
    // }
    // public function formedit_obat(): string
    // {
    //     $data = [
    //         'title' => 'Form Edit Daftar Obat | Klinik Erins',
    //         'menu' => 'daftar',
    //         'submenu' => 'sub1',
    //     ];
    //     return view('admin/daftar/daftar_obat/formedit_obat', $data);
    // }

    // public function daftar_pekerja()
    // {
    //     $data = [
    //         'title' => 'Daftar Pekerja | Klinik Erins',
    //         'menu' => 'daftar',
    //         'submenu' => 'sub2',
    //     ];
    //     echo view('admin/daftar/daftar_pekerja/view_daftar_pekerja', $data);
    // }
    // public function formedit_pekerja(): string
    // {
    //     $data = [
    //         'title' => 'Form Edit Daftar Pekerja | Klinik Erins',
    //         'menu' => 'daftar',
    //         'submenu' => 'sub1',
    //     ];
    //     return view('admin/daftar/daftar_pekerja/formedit_pekerja', $data);
    // }
    // public function daftar_dokter()
    // {
    //     $data = [
    //         'title' => 'Daftar Dokter | Klinik Erins',
    //         'menu' => 'daftar',
    //         'submenu' => 'sub3',
    //     ];
    //     echo view('admin/daftar/daftar_dokter/view_daftar_dokter', $data);
    // }
    // public function formedit_dokter()
    // {
    //     $data = [
    //         'title' => 'Form Edit Daftar Dokter | Klinik Erins',
    //         'menu' => 'daftar',
    //         'submenu' => 'sub3',
    //     ];
    //     echo view('admin/daftar/daftar_dokter/formedit_dokter', $data);
    // }
    public function daftar_poli()
    {
        $data = [
            'title' => 'Daftar Poli | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub4',
        ];
        echo view('admin/daftar/daftar_poli/view_daftar_poli', $data);
    }
    public function formedit_poli(): string
    {
        $data = [
            'title' => 'Form Edit Daftar Poli | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
        ];
        return view('admin/daftar/daftar_poli/formedit_poli', $data);
    }
    // public function daftar_pasien()
    // {
    //     $data = [
    //         'title' => 'Daftar Pasien | Klinik Erins',
    //         'menu' => 'daftar',
    //         'submenu' => 'sub5',
    //     ];
    //     echo view('admin/daftar/daftar_pasien/view_daftar_pasien', $data);
    // }
    // public function formedit_pasien(): string
    // {
    //     $data = [
    //         'title' => 'Form Edit Daftar Pasien | Klinik Erins',
    //         'menu' => 'daftar',
    //         'submenu' => 'sub1',
    //     ];
    //     return view('admin/daftar/daftar_pasien/formedit_pasien', $data);
    // }
}
