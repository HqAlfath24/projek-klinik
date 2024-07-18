<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MrecordModel;
use App\Models\PasienModel;
use App\Models\PolyclinicModel;
use App\Models\PrescriptionModel;

class Mrecord extends BaseController
{
    protected $patientModel;
    protected $polyclinicModel;
    protected $mrecordModel;
    protected $prescriptionModel;
    public function __construct()
    {
        $this->patientModel = new PasienModel();
        $this->polyclinicModel = new PolyclinicModel();
        $this->mrecordModel = new MrecordModel();
        $this->prescriptionModel = new PrescriptionModel();
    }

    // public function index()
    // {
    //     // $pasien = $this->dokterModel->findAll();

    //     $data = [
    //         'title' => 'Daftar Poli | Klinik Erins',
    //         'menu' => 'daftar',
    //         'submenu' => 'sub5',
    //         'validation' => \Config\Services::validation(),
    //         'patient' => $this->patientModel->getPasien(),
    //         'polyclinic' => $this->polyclinicModel->getPoly(),
    //         'mrecord' => $this->mrecordModel->getMrecord(),
    //     ];
    //     return view('admin/queue', $data);
    // }

    public function diagnosis($id_mrecord)
    {
        if (!$this->validate([
            'patient_slug' => 'required',
            'poly_code' => 'required',
            'complaint' => 'required',
            'diagnosis' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            dd($validation);
            // return redirect()->to('/queue')->withInput()->with('validation', $validation);
        }

        // kirim data ke mrecord
        $status = 'periksa';
        $this->mrecordModel->save([
            'id_mrecord' => $id_mrecord,
            'patient_slug' => $this->request->getVar('patient_slug'),
            'poly_code' => $this->request->getVar('poly_code'),
            'complaint' => $this->request->getVar('complaint'),
            'diagnosis' => $this->request->getVar('diagnosis'),
            'notes' => $this->request->getVar('notes'),
            'status' => $status,
        ]);

        // kirim data ke prescription
        $medicines = $this->request->getVar('medicines');
        foreach ($medicines as $mdc) {
            $this->prescriptionModel->save([
                'mrecord_id' => $id_mrecord,
                'patient_slug' => $this->request->getVar('patient_slug'),
                'medicine_id' => $mdc['medicine_id'],
                'name_medicine' => $mdc['name_medicine'],
                'quantity' => $mdc['quantity'],
                'dosage' => $mdc['dosage'],
                'instructions' => $mdc['instructions'],
            ]);
        }

        // dd($this->request->getVar());

        session()->setFlashdata('message', 'Data berhasil ditambahkan.');

        return redirect()->to('/queue');
    }

    public function printQueue($id_mrecord)
    {
        $mrecord = $this->mrecordModel->find($id_mrecord);
        $patient = $this->patientModel->find($mrecord['patient_id']);
        $polyclinic = $this->polyclinicModel->find($mrecord['poly_id']);

        $data = [
            'mrecord' => $mrecord,
            'patient' => $patient,
            'polyclinic' => $polyclinic,
        ];

        return view('admin/print_queue', $data);
    }
}
