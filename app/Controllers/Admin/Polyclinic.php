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
            'title' => 'Daftar Poli | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub5',
            'polyclinic' => $this->polyclinicModel->getPoly(),
        ];
        return view('admin/daftar/polyclinic/list_polyclinic', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Daftar Poli | Klinik Erins',
            'menu' => 'Tambah Obat',
            'submenu' => 'sub5',
            'validation' => \Config\Services::validation(),
        ];
        // no page
        // dd($data);
        return view('admin/daftar/polyclinic/add_polyclinic', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'name_poly' => 'required',
            'poly_code' => 'required|is_unique[polyclinic.poly_code]',
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('/polyclinic/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('name_poly'), '-', true);
        $this->polyclinicModel->save([
            'slug' => $slug,
            'name_poly' => $this->request->getVar('name_poly'),
            'poly_code' => $this->request->getVar('poly_code'),
        ]);

        // dd($this->request->getVar());

        session()->setFlashdata('message', 'Data berhasil ditambahkan.');

        return redirect()->to('/polyclinic');
    }

    public function detail($slug)
    {

        $data = [
            // 'title' => 'Daftar Pasien | Klinik Erins', //sesuaikan saja wkwkk
            'polyclinic' => $this->polyclinicModel->getPoly($slug),
        ];
        // dd($data); //jika sudah ada view-nya, line ini dihapus dan tambahkan view dibawah
        return view('admin/daftar/polyclinic/detail_polyclinic', $data);
    }

    // public function edit_poly()
    // {
    //     $data = [
    //         'title' => 'Form Edit Daftar Dokter | Klinik Erins',
    //         'menu' => 'daftar',
    //         'submenu' => 'sub3',
    //     ];
    //     return view('admin/daftar/polyclinic/edit_polyclinic', $data);
    // }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Daftar Dokter | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
            'validation' => \Config\Services::validation(),
            'polyclinic' => $this->polyclinicModel->getPoly($slug),
        ];
        // dd($data);
        return view('admin/daftar/polyclinic/edit_polyclinic', $data);
    }

    public function update($id_poly)
    {
        $currentPoly = $this->polyclinicModel->find($id_poly);
        // dd($this->request->getVar());
        if (!$this->validate([
            'name_poly' => 'required',
            'poly_code' => 'required|is_unique[polyclinic.poly_code]',
        ])) {
            // $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to('/patient/edit/' . $currentPoly['slug'])->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('name_poly'), '-', true);
        $this->polyclinicModel->save([
            'id_poly' => $id_poly,
            'slug' => $slug,
            'name_poly' => $this->request->getVar('name_poly'),
            'poly_code' => $this->request->getVar('poly_code'),
        ]);

        // dd($this->request->getVar());

        session()->setFlashdata('message', 'Data berhasil diubah.');

        return redirect()->to('/polyclinic');
    }

    public function delete($id_poly)
    {
        $this->polyclinicModel->delete($id_poly);
        session()->setFlashdata('message', 'Data berhasil dihapus.');
        return redirect()->to('/polyclinic');
    }
}
