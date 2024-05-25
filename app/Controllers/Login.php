<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function admin()
    {

        return view('halamanLogin/admin');
    }
    public function pasien()
    {

        return view('halamanLogin/pasien');
    }
    public function karyawan()
    {

        return view('halamanLogin/karyawan');
    }
    public function dokter()
    {

        return view('halamanLogin/dokter');
    }
}
