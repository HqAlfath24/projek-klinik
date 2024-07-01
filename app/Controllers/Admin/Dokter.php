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
        return view('admin/daftar/dokter/list', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Daftar Dokter | Klinik Erins',
            'menu' => 'Tambah Dokter',
            'submenu' => 'sub5',
            'validation' => \Config\Services::validation(),
        ];
        // no page
        // dd($data);
        return view('admin/daftar/dokter/add', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'name_doctor' => 'required',
            'license' => 'required|is_unique[doctor.license]',
            'email' => 'required|is_unique[doctor.email]',
            'phone' => 'required|is_unique[doctor.phone]',
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('/doctor/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('name_doctor'), '-', true);
        $this->dokterModel->save([
            'slug' => $slug,
            'name_doctor' => $this->request->getVar('name_doctor'),
            'gender' => $this->request->getVar('gender'),
            'emp_num' => $this->request->getVar('emp_num'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'address' => $this->request->getVar('address'),
            'speciality' => $this->request->getVar('speciality'),
            'license' => $this->request->getVar('license'),
            'account_num' => $this->request->getVar('account_num'),
            'taxpayer_num' => $this->request->getVar('taxpayer_num'),
            'salary' => $this->request->getVar('salary'),
            'role' => $this->request->getVar('role'),
        ]);

        // dd($this->request->getVar());

        session()->setFlashdata('message', 'Data berhasil ditambahkan.');

        return redirect()->to('/doctor');
    }

    public function detail($slug)
    {

        $data = [
            // 'title' => 'Daftar Pasien | Klinik Erins', //sesuaikan saja wkwkk
            'dokter' => $this->dokterModel->getDokter($slug),
        ];
        // dd($data); //jika sudah ada view-nya, line ini dihapus dan tambahkan view dibawah
        return view('admin/daftar/dokter/detail', $data);
    }

    // public function edit_dokter()
    // {
    //     $data = [
    //         'title' => 'Form Edit Daftar Dokter | Klinik Erins',
    //         'menu' => 'daftar',
    //         'submenu' => 'sub3',
    //     ];
    //     return view('admin/daftar/dokter/edit_dokter', $data);
    // }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Daftar Dokter | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
            'validation' => \Config\Services::validation(),
            'doctor' => $this->dokterModel->getDokter($slug),
        ];
        // dd($data);
        return view('admin/daftar/dokter/edit', $data);
    }

    public function update($id_doctor)
    {
        $currentPoly = $this->dokterModel->find($id_doctor);
        // dd($this->request->getVar());
        if (!$this->validate([
            'name_doctor' => 'required',
            'email' => 'required|is_unique[employee.email]',
            'phone' => 'required|is_unique[employee.phone]',
        ])) {
            // $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to('/patient/edit/' . $currentPoly['slug'])->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('name_doctor'), '-', true);
        $this->dokterModel->save([
            'id_doctor' => $id_doctor,
            'slug' => $slug,
            'name_doctor' => $this->request->getVar('name_doctor'),
            'gender' => $this->request->getVar('gender'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'address' => $this->request->getVar('address'),
            'speciality' => $this->request->getVar('speciality'),
            'license' => $this->request->getVar('license'),
            'account_num' => $this->request->getVar('account_num'),
            'taxpayer_num' => $this->request->getVar('taxpayer_num'),
            'salary' => $this->request->getVar('salary'),
        ]);

        // dd($this->request->getVar());

        session()->setFlashdata('message', 'Data berhasil diubah.');

        return redirect()->to('/doctor');
    }

    public function delete($id_doctor)
    {
        $this->dokterModel->delete($id_doctor);
        session()->setFlashdata('message', 'Data berhasil dihapus.');
        return redirect()->to('/doctor');
    }
}
