<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('halamanutama/index');
        // echo "Hello word";
    }
    // public function coba()
    // {
    //     // return view('welcome_message');
    //     echo $this->nama;
    // }
}