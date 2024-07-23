<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MedicineModel;
use App\Models\MrecordModel;
use App\Models\PasienModel;
use App\Models\PolyclinicModel;
use Dompdf\Dompdf;

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

    public function printQueue($id_mrecord)
    {
        $data = [
            'title' => "Klinik Erin's",
            'mrecord' => $this->mrecordModel->getMrecord($id_mrecord),
            // 'date' => $formattedDate,
        ];

        // dd($data);

        $html = view('admin/print_queue', $data);

        $filename = date('y-m-d-H-i-s') . '-daftar-stok-obat';

        // Buat objek Dompdf
        $dompdf = new Dompdf();

        // Load konten HTML
        $dompdf->loadHtml($html);

        // Setel ukuran kertas dan orientasi
        $dompdf->setPaper('A6', 'potrait');

        // Render HTML sebagai PDF
        $dompdf->render();

        // Output PDF yang dihasilkan
        $dompdf->stream($filename, ['Attachment' => false]);
    }
}
