<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ObatModel;

class Obat extends BaseController
{
    protected $obatModel;
    public function __construct()
    {
        $this->obatModel = new ObatModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Obat | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
            'drug' => $this->obatModel->getObat(),
        ];
        return view('admin/daftar/obat/daftar_obat', $data);
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
        return view('admin/daftar/obat/add_obat', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'name_drug' => 'required',
            'reg_num' => 'required|is_unique[drug.reg_num]',
        ])) {
            $validation = \Config\Services::validation();
            dd($validation);
            // return redirect()->to('/drug/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('name_drug'), '-', true);
        $this->obatModel->save([
            'slug' => $slug,
            'name_drug' => $this->request->getVar('name_drug'),
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

        return redirect()->to('/drug');
    }

    public function detail($slug)
    {

        $data = [
            // 'title' => 'Daftar Pasien | Klinik Erins', //sesuaikan saja wkwkk
            'drug' => $this->obatModel->getObat($slug),
        ];
        // dd($data); //jika sudah ada view-nya, line ini dihapus dan tambahkan view dibawah
        return view('admin/daftar/obat/detail_obat', $data);
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Daftar Obat | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
            'validation' => \Config\Services::validation(),
            'drug' => $this->obatModel->getObat($slug),
        ];
        // dd($data);
        return view('admin/daftar/obat/edit_obat', $data);
    }

    public function update($id_drug)
    {
        $currentDrug = $this->obatModel->find($id_drug);
        // dd($this->request->getVar());
        if (!$this->validate([
            'name_drug' => 'required',
            'reg_num' => 'required|is_unique[drug.reg_num]',
        ])) {
            // $validation = \Config\Services::validation();
            // // dd($validation);
            // return redirect()->to('/patient/edit/' . $currentDrug['slug'])->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('name_drug'), '-', true);
        $this->obatModel->save([
            'id_drug' => $id_drug,
            'slug' => $slug,
            'name_drug' => $this->request->getVar('name_drug'),
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

        return redirect()->to('/drug');
    }

    public function delete($id_drug)
    {
        $this->obatModel->delete($id_drug);
        session()->setFlashdata('message', 'Data berhasil dihapus.');
        return redirect()->to('/drug');
    }
}
