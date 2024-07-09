<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PasienModel;
use App\Models\PolyclinicModel;
use App\Models\VisitModel;

class Queue extends BaseController
{
    protected $visitModel;
    protected $pasienModel;
    protected $polyclinicModel;
    public function __construct()
    {
        $this->visitModel = new VisitModel();
        $this->pasienModel = new PasienModel();
        $this->polyclinicModel = new PolyclinicModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home | Klinik Erins',
            'menu' => 'home',
            'submenu' => 'home',
            'validation' => \Config\Services::validation(),
            'visit' => $this->visitModel->getVisit(),
            'patient' => $this->pasienModel->getPasien(),
            'polyclinic' => $this->polyclinicModel->getPoly(),
        ];
        return view('admin/queue', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'patient_id' => 'required',
            'poly_id' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('/queue')->withInput()->with('validation', $validation);
        }

        // $slug = url_title($this->request->getVar('name_poly'), '-', true);
        $this->visitModel->save([
            // 'slug' => $slug,
            'patient_id' => $this->request->getVar('patient_id'),
            'poly_id' => $this->request->getVar('poly_id'),
        ]);

        // dd($this->request->getVar());

        session()->setFlashdata('message', 'Data berhasil ditambahkan.');

        return redirect()->to('/queue');
    }

    // PatientController.php

    // public function filterPatients()
    // {
    //     $name = $this->request->getGet('name');
    //     $poli = $this->request->getGet('poli');

    //     $builder = $this->db->table('patients');
    //     if ($name) {
    //         $builder->like('name', $name);
    //     }
    //     if ($poli) {
    //         $builder->like('poli', $poli);
    //     }

    //     $query = $builder->get();
    //     $patients = $query->getResult();

    //     return $this->response->setJSON($patients);
    // }

    public function search()
    {
    }

    public function search_patient()
    {
    }

    public function search_polyclinic()
    {
    }
}
