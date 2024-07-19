<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MedicineModel;
use App\Services\DompdfService;

class Medicine extends BaseController
{
    protected $medicineModel;
    protected $dompdfService;
    public function __construct()
    {
        $this->medicineModel = new MedicineModel();
        $this->dompdfService = new DompdfService();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Obat | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
            'medicine' => $this->medicineModel->getMedicine(),
        ];
        return view('admin/daftar/obat/list', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Daftar Obat | Klinik Erins',
            'menu' => 'Tambah Obat',
            'submenu' => 'sub5',
            'validation' => \Config\Services::validation(),
        ];
        // no page
        // dd($data);
        return view('admin/daftar/obat/add', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'name_medicine' => 'required',
            'reg_num' => 'required|is_unique[medicine.reg_num]',
        ])) {
            $validation = \Config\Services::validation();
            dd($validation);
            // return redirect()->to('/medicine/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('name_medicine'), '-', true);
        $this->medicineModel->save([
            'slug' => $slug,
            'name_medicine' => $this->request->getVar('name_medicine'),
            'reg_num' => $this->request->getVar('reg_num'),
            'produsen' => $this->request->getVar('produsen'),
            'distributor' => $this->request->getVar('distributor'),
            'stok' => $this->request->getVar('stok'),
            'expired' => $this->request->getVar('expired'),
            'unit_price' => $this->request->getVar('unit_price'),
            'composition' => $this->request->getVar('composition'),
        ]);

        // dd($this->request->getVar());

        session()->setFlashdata('message', 'Data berhasil ditambahkan.');

        return redirect()->to('/medicine');
    }

    public function detail($slug)
    {

        $data = [
            // 'title' => 'Daftar Pasien | Klinik Erins', //sesuaikan saja wkwkk
            'medicine' => $this->medicineModel->getMedicine($slug),
        ];
        // dd($data); //jika sudah ada view-nya, line ini dihapus dan tambahkan view dibawah
        return view('admin/daftar/obat/detail', $data);
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Daftar Obat | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
            'validation' => \Config\Services::validation(),
            'medicine' => $this->medicineModel->getMedicine($slug),
        ];
        // dd($data);
        return view('admin/daftar/obat/edit', $data);
    }

    public function update($id_medicine)
    {
        $currentmedicine = $this->medicineModel->find($id_medicine);
        // dd($this->request->getVar());
        if (!$this->validate([
            'name_medicine' => 'required',
            'reg_num' => 'required|is_unique[medicine.reg_num]',
        ])) {
            // $validation = \Config\Services::validation();
            // // dd($validation);
            // return redirect()->to('/patient/edit/' . $currentmedicine['slug'])->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('name_medicine'), '-', true);
        $this->medicineModel->save([
            'id_medicine' => $id_medicine,
            'slug' => $slug,
            'name_medicine' => $this->request->getVar('name_medicine'),
            'reg_num' => $this->request->getVar('reg_num'),
            'produsen' => $this->request->getVar('produsen'),
            'distributor' => $this->request->getVar('distributor'),
            'stok' => $this->request->getVar('stok'),
            'expired' => $this->request->getVar('expired'),
            'unit_price' => $this->request->getVar('unit_price'),
            'composition' => $this->request->getVar('composition'),
        ]);

        // dd($this->request->getVar());

        session()->setFlashdata('message', 'Data berhasil diubah.');

        return redirect()->to('/medicine');
    }

    public function delete($id_medicine)
    {
        $this->medicineModel->delete($id_medicine);
        session()->setFlashdata('message', 'Data berhasil dihapus.');
        return redirect()->to('/medicine');
    }

    // public function printStock()
    // {
    //     $data = [
    //         'title' => 'Daftar Stok Obat',
    //         'medicine' => $this->medicineModel->findAll(),
    //     ];

    //     $html = view('admin/daftar/obat/stock', $data);

    //     $dompdf = $this->dompdfService->getDompdf();
    //     $dompdf->loadHtml($html);
    //     $dompdf->setPaper('A4', 'portrait');
    //     $dompdf->render();

    //     $dompdf->stream('daftar_stok_obat.pdf', ['Attachment' => false]);

    //     // return view('medicine/stock');
    // }

    public function printStock()
    {
        $data = [
            'title' => 'Daftar Stok Obat',
            'medicine' => $this->medicineModel->findAll(),
        ];

        $html = view('admin/daftar/obat/stock', $data);

        $filename = date('y-m-d-H-i-s') . '-daftar-stok-obat';

        // Buat objek Dompdf
        $dompdf = new \Dompdf\Dompdf();

        // Load konten HTML
        $dompdf->loadHtml($html);

        // Setel ukuran kertas dan orientasi
        $dompdf->setPaper('A4', 'landscape');

        // Render HTML sebagai PDF
        $dompdf->render();

        // Output PDF yang dihasilkan
        $dompdf->stream($filename, ['Attachment' => false]);
    }
}
