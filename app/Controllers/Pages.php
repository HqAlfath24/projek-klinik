<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data=[
            'title' => 'Home | Rifqi Iqbal',
            'tes' => ['satu','dua','tiga']
        ];
        // echo view('layout/header',$data);
        return view('pages/home',$data);
        // echo view('layout/footer');
    }
    public function about()
    {
        $data=[
            'title' => 'About me'
        ];
        // echo view('layout/header',$data);
        echo view('pages/about',$data);
        // echo view('layout/footer');
    }
    public function contact()
    {
        $data=[
            'title' => 'contact me',
            'alamat' => [
                [
                    'tipe'=> 'Rumah',
                    'alamat' => 'Jl. abc No.123',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe'=> 'Kantor',
                    'alamat' => 'Jl. Setiabudi No. 193',
                    'kota' => 'Bandung'
                ]
            ]
        ];
        return view('pages/contact',$data);
    }
}
