<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modelmahasiswa;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $mahasiswa = new Modelmahasiswa();
        $tampildatamhs = $mahasiswa->findAll();
        // dd($tampildatamhs);

        $data = [
            'datamahasiswa' => $tampildatamhs
        ];
        return view('mahasiswa/datamhsview', $data);
    }
    public function tambahdatamhs()
    {
        return view('mahasiswa/tambahmhsview');
    }
}
