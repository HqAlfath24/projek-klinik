<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MedicineModel;
use App\Models\MrecordModel;
use App\Models\PasienModel;
use App\Models\PolyclinicModel;

class Queue extends BaseController
{
    protected $patientModel;
    protected $polyclinicModel;
    protected $mrecordModel;
    protected $medicineModel;

    public function __construct()
    {
        $this->patientModel = new PasienModel();
        $this->polyclinicModel = new PolyclinicModel();
        $this->mrecordModel = new MrecordModel();
        $this->medicineModel = new MedicineModel();
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

        // Mendapatkan nomor antrian terakhir untuk poli yang dipilih
        $last_queue = $this->mrecordModel->where('poly_code', $this->request->getVar('poly_code'))
            ->orderBy('num_queue', 'DESC')
            ->first();
        $new_queue = $last_queue ? $last_queue['num_queue'] + 1 : 1;

        // Menyimpan data antrian baru ke dalam database
        $formatted_queue_num = str_pad($new_queue, 3, '0', STR_PAD_LEFT);
        $status = 'pending';

        $this->mrecordModel->save([
            'patient_slug' => $this->request->getVar('patient_slug'),
            'poly_code' => $this->request->getVar('poly_code'),
            'num_queue' => $formatted_queue_num,
            'status' => $status,
        ]);

        // dd($this->request->getVar());

        session()->setFlashdata('message', 'Data berhasil ditambahkan.');

        return redirect()->to('/queue');
    }

    public function check($id_mrecord)
    {

        $data = [
            'title' => 'Data Pasien Pasien | Klinik Erins',
            'subtitle' => 'Permeriksaan Pasien',
            'menu' => 'daftar periksa',
            'submenu' => 'sub5',
            'validation' => \Config\Services::validation(),

            'mrecord' => $this->mrecordModel->getMrecord($id_mrecord),
            'medicines' => $this->medicineModel->getMedicine(),
        ];
        // dd($data); //jika sudah ada view-nya, line ini dihapus dan tambahkan view dibawah
        return view('admin/check', $data);
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
