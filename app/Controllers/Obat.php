<?php

namespace App\Controllers;

class Obat extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Obat'
        ];
        return view('obat/index');
    }
}
