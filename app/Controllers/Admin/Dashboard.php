<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Klinik Erins',
            'menu' => 'home',
            'submenu' => 'home',
        ];
        return view('admin/home', $data);
    }
}
