<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MrecordModel;
use App\Models\PasienModel;
use App\Models\PolyclinicModel;

class Queue extends BaseController
{
    protected $patientModel;
    protected $polyclinicModel;
    protected $mrecordModel;
    public function __construct()
    {
        $this->patientModel = new PasienModel();
        $this->polyclinicModel = new PolyclinicModel();
        $this->mrecordModel = new MrecordModel();
    }

    public function index()
    {
        // $pasien = $this->dokterModel->findAll();

        $data = [
            'title' => 'Daftar Poli | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub5',
            'validation' => \Config\Services::validation(),
            'patient' => $this->patientModel->getPasien(),
            'polyclinic' => $this->polyclinicModel->getPoly(),
            'mrecord' => $this->mrecordModel->getMrecord(),
        ];
        return view('admin/queue', $data);
    }

    // public function create()
    // {
    //     // session();
    //     $data = [
    //         'title' => 'Form Tambah Daftar Poli | Klinik Erins',
    //         'menu' => 'Tambah Obat',
    //         'submenu' => 'sub5',
    //         'validation' => \Config\Services::validation(),
    //     ];
    //     // no page
    //     // dd($data);
    //     return view('admin/daftar/polyclinic/add', $data);
    // }

    public function save()
    {
        if (!$this->validate([
            'patient_slug' => 'required',
            // 'poly_code' => 'required|is_unique[polyclinic.poly_code]',
            'poly_code' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            dd($validation);
            // return redirect()->to('/queue')->withInput()->with('validation', $validation);
        }


        $this->mrecordModel->save([
            'patient_slug' => $this->request->getVar('patient_slug'),
            'poly_code' => $this->request->getVar('poly_code'),
        ]);

        // dd($this->request->getVar());

        session()->setFlashdata('message', 'Data berhasil ditambahkan.');

        return redirect()->to('/queue');
    }

    // public function detail($slug)
    // {

    //     $data = [
    //         // 'title' => 'Daftar Pasien | Klinik Erins', //sesuaikan saja wkwkk
    //         'polyclinic' => $this->polyclinicModel->getPoly($slug),
    //     ];
    //     // dd($data); //jika sudah ada view-nya, line ini dihapus dan tambahkan view dibawah
    //     return view('admin/daftar/polyclinic/detail', $data);
    // }

    // public function edit_poly()
    // {
    //     $data = [
    //         'title' => 'Form Edit Daftar Dokter | Klinik Erins',
    //         'menu' => 'daftar',
    //         'submenu' => 'sub3',
    //     ];
    //     return view('admin/daftar/polyclinic/edit_polyclinic', $data);
    // }

    // public function edit($slug)
    // {
    //     $data = [
    //         'title' => 'Form Edit Daftar Dokter | Klinik Erins',
    //         'menu' => 'daftar',
    //         'submenu' => 'sub1',
    //         'validation' => \Config\Services::validation(),
    //         'polyclinic' => $this->polyclinicModel->getPoly($slug),
    //     ];
    //     // dd($data);
    //     return view('admin/daftar/polyclinic/edit', $data);
    // }

    // public function update($id_poly)
    // {
    //     $currentPoly = $this->polyclinicModel->find($id_poly);
    //     // dd($this->request->getVar());
    //     if (!$this->validate([
    //         'name_poly' => 'required',
    //         'poly_code' => 'required|is_unique[polyclinic.poly_code]',
    //     ])) {
    //         // $validation = \Config\Services::validation();
    //         // dd($validation);
    //         // return redirect()->to('/patient/edit/' . $currentPoly['slug'])->withInput()->with('validation', $validation);
    //     }

    //     $slug = url_title($this->request->getVar('name_poly'), '-', true);
    //     $this->polyclinicModel->save([
    //         'id_poly' => $id_poly,
    //         'slug' => $slug,
    //         'name_poly' => $this->request->getVar('name_poly'),
    //         'poly_code' => $this->request->getVar('poly_code'),
    //     ]);

    //     // dd($this->request->getVar());

    //     session()->setFlashdata('message', 'Data berhasil diubah.');

    //     return redirect()->to('/polyclinic');
    // }

    // public function delete($id_poly)
    // {
    //     $this->polyclinicModel->delete($id_poly);
    //     session()->setFlashdata('message', 'Data berhasil dihapus.');
    //     return redirect()->to('/polyclinic');
    // }
}
