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

    public function detail($slug)
    {
        $data = [
            'title' => 'Form Edit Daftar Pekerja | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
            'employee' => $this->employModel->getEmployee($slug),
        ];
        return view('admin/daftar/employee/detail_employee', $data);
    }

    public function edit_employee()
    {
        $data = [
            'title' => 'Form Edit Daftar Pekerja | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
        ];
        return view('admin/daftar/employee/edit_employee', $data);
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Daftar Pekerja | Klinik Erins',
            'menu' => 'daftar',
            'submenu' => 'sub1',
            'employee' => $this->employModel->getEmployee($slug),
        ];
        return view('admin/daftar/employee/edit_employee', $data);
    }
}
