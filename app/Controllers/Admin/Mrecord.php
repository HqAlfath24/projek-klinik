<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PasienModel;
use App\Models\PolyclinicModel;
use App\Models\VisitModel;

class Mrecord extends BaseController
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

    // public function index()
    // {
    //     $data = [
    //         'title' => 'Home | Klinik Erins',
    //         'menu' => 'home',
    //         'submenu' => 'home',
    //         'validation' => \Config\Services::validation(),
    //         'visit' => $this->visitModel->getVisit(),
    //         'patient' => $this->pasienModel->getPasien(),
    //         'polyclinic' => $this->polyclinicModel->getPoly(),
    //     ];
    //     return view('admin/queue', $data);
    // }

    public function save()
    {
        $this->polyclinicModel->save([
            'visit_id' => $this->request->getVar('visit_id'),
            'patient_id' => $this->request->getVar('patient_id'),
            'poly_id' => $this->request->getVar('poly_id'),
        ]);

        // dd($this->request->getVar());

        // session()->setFlashdata('message', 'Data berhasil ditambahkan ke mrecord.');

        return view('/check');
    }

    public function check($id_visit)
    {
        $data = [
            'title' => 'Home | Klinik Erins',
            'menu' => 'home',
            'submenu' => 'home',
            'validation' => \Config\Services::validation(),
            'visit' => $this->visitModel->getVisit($id_visit),
            // 'patient' => $this->pasienModel->getPasien(),
            // 'polyclinic' => $this->polyclinicModel->getPoly(),
        ];
        // dd($data);
        return view('admin/check', $data);
    }
}
