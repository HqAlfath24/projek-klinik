<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\EmployeeModel;

class Employee extends BaseController
{
    protected $employModel;
    public function __construct()
    {
        $this->employModel = new EmployeeModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Pekerja | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub2',
            'employee' => $this->employModel->getEmployee(),
        ];
        return view('admin/daftar/employee/list_employee', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Daftar Poli | Klinik Erins',
            'menu' => 'Tambah Obat',
            'submenu' => 'sub5',
            'validation' => \Config\Services::validation(),
        ];
        // no page
        // dd($data);
        return view('admin/daftar/employee/add_employee', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'name_emp' => 'required',
            'emp_num' => 'required|is_unique[employee.emp_num]',
            'email' => 'required|is_unique[employee.email]',
            'phone' => 'required|is_unique[employee.phone]',
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('/employee/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('name_emp'), '-', true);
        $this->employModel->save([
            'slug' => $slug,
            'name_emp' => $this->request->getVar('name_emp'),
            'birthday' => $this->request->getVar('birthday'),
            'gender' => $this->request->getVar('gender'),
            'emp_num' => $this->request->getVar('emp_num'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'address' => $this->request->getVar('address'),
            'account_num' => $this->request->getVar('account_num'),
            'taxpayer_num' => $this->request->getVar('taxpayer_num'),
            'salary' => $this->request->getVar('salary'),
            'role' => $this->request->getVar('role'),
        ]);

        // dd($this->request->getVar());

        session()->setFlashdata('message', 'Data berhasil ditambahkan.');

        return redirect()->to('/employee');
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Pekerja | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
            'employee' => $this->employModel->getEmployee($slug),
        ];
        return view('admin/daftar/employee/detail_employee', $data);
    }

    // public function edit_employee()
    // {
    //     $data = [
    //         'title' => 'Form Edit Daftar Pekerja | Klinik Erins',
    //         'menu' => 'daftar',
    //         'submenu' => 'sub1',
    //     ];
    //     return view('admin/daftar/employee/edit_employee', $data);
    // }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Daftar Pekerja | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
            'validation' => \Config\Services::validation(),
            'employee' => $this->employModel->getEmployee($slug),
        ];
        return view('admin/daftar/employee/edit_employee', $data);
    }

    public function update($id_emp)
    {
        $currentPoly = $this->employModel->find($id_emp);
        // dd($this->request->getVar());
        if (!$this->validate([
            'name_emp' => 'required',
            'emp_num' => 'required|is_unique[employee.emp_num]',
            'email' => 'required|is_unique[employee.email]',
            'phone' => 'required|is_unique[employee.phone]',
        ])) {
            // $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to('/patient/edit/' . $currentPoly['slug'])->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('name_poly'), '-', true);
        $this->employModel->save([
            'id_emp' => $id_emp,
            'slug' => $slug,
            'name_emp' => $this->request->getVar('name_emp'),
            'birthday' => $this->request->getVar('birthday'),
            'gender' => $this->request->getVar('gender'),
            'emp_num' => $this->request->getVar('emp_num'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'address' => $this->request->getVar('address'),
            'account_num' => $this->request->getVar('account_num'),
            'taxpayer_num' => $this->request->getVar('taxpayer_num'),
            'salary' => $this->request->getVar('salary'),
            'role' => $this->request->getVar('role'),
        ]);

        // dd($this->request->getVar());

        session()->setFlashdata('message', 'Data berhasil diubah.');

        return redirect()->to('/employee');
    }

    public function delete($id_emp)
    {
        $this->employModel->delete($id_emp);
        session()->setFlashdata('message', 'Data berhasil dihapus.');
        return redirect()->to('/employee');
    }
}
