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
            'patient' => $this->pasienModel->getPasien(),
        ];
        return view('admin/daftar/pasien/list', $data);
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
        return view('admin/daftar/pasien/add', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'name_patient' => 'required',
            'mrecord_num' => 'required|is_unique[patient.mrecord_num]',
            'no_badge' => 'is_unique[patient.no_badge]',
            'insurance_num' => 'is_unique[patient.insurance_num]',
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('/patient/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('name_patient'), '-', true);
        $this->pasienModel->save([
            'slug' => $slug,
            'name_patient' => $this->request->getVar('name_patient'),
            'mrecord_num' => $this->request->getVar('mrecord_num'),
            'birthday' => $this->request->getVar('birthday'),
            'gender' => $this->request->getVar('gender'),
            'phone' => $this->request->getVar('phone'),
            'email' => $this->request->getVar('email'),
            'address' => $this->request->getVar('address'),
            'badge' => $this->request->getVar('badge'),
            'no_badge' => $this->request->getVar('no_badge'),
            'insurance' => $this->request->getVar('insurance'),
            'insurance_num' => $this->request->getVar('insurance_num'),
        ]);

        // dd($this->request->getVar());

        session()->setFlashdata('message', 'Data berhasil ditambahkan.');

        return redirect()->to('/patient');

        // $data = [
        //     'title' => 'Daftar Pasien | Klinik Erins',
        //     'menu' => 'daftar',
        //     'submenu' => 'sub5',
        //     'patient' => $this->pasienModel->getPasien(),
        // ];
        // return view('admin/daftar/pasien/daftar_pasien', $data);

        // if ($this->pasienModel->insert($data)) {
        //     return redirect()->to('/pasien')->with('status', 'Data Pasien Berhasil Disimpan');
        // } else {
        //     return redirect()->to('/pasien')->with('status', 'Gagal Menyimpan Data Pasien');
        // }
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Pasien | Klinik Erins', //sesuaikan saja wkwkk
            'menu' => 'daftar',
            'submenu' => 'sub1',
            'patient' => $this->pasienModel->getPasien($slug),
        ];

        if (empty($data['patient'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException(
                'Data Pasien ' . $slug . ' tidak ditemukan'
            );
        }
        // dd($data); //jika sudah ada view-nya, line ini dihapus dan tambahkan view dibawah
        return view('admin/daftar/pasien/detail', $data);
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Daftar Pasien | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
            'validation' => \Config\Services::validation(),
            'patient' => $this->pasienModel->getPasien($slug),
        ];

        return view('admin/daftar/pasien/edit', $data);
    }

    public function update($id_patient)
    {
        $currentPatient = $this->pasienModel->find($id_patient);
        // dd($this->request->getVar());
        if (!$this->validate([
            'name_patient' => 'required',
            'mrecord_num' => 'required|is_unique[patient.mrecord_num]',
            'no_badge' => 'is_unique[patient.no_badge]',
            'insurance_num' => 'is_unique[patient.insurance_num]',
        ])) {
            // $validation = \Config\Services::validation();
            // // dd($validation);
            // return redirect()->to('/patient/edit/' . $currentPatient['slug'])->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('name_patient'), '-', true);
        $this->pasienModel->save([
            'id_patient' => $id_patient,
            'slug' => $slug,
            'name_patient' => $this->request->getVar('name_patient'),
            'mrecord_num' => $this->request->getVar('mrecord_num'),
            'birthday' => $this->request->getVar('birthday'),
            'gender' => $this->request->getVar('gender'),
            'phone' => $this->request->getVar('phone'),
            'email' => $this->request->getVar('email'),
            'address' => $this->request->getVar('address'),
            'badge' => $this->request->getVar('badge'),
            'no_badge' => $this->request->getVar('no_badge'),
            'insurance' => $this->request->getVar('insurance'),
            'insurance_num' => $this->request->getVar('insurance_num'),
        ]);

        // dd($this->request->getVar());

        session()->setFlashdata('message', 'Data berhasil diubah.');

        return redirect()->to('/patient');
    }

    public function delete($id_patient)
    {
        $this->pasienModel->delete($id_patient);
        session()->setFlashdata('message', 'Data berhasil dihapus.');
        return redirect()->to('/patient');
    }
}
