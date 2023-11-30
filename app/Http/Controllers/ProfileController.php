<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $nama = "Fauzi Ramadhan";
        $alamat = "Kota Bandung";
        $tanggal_lahir = "20 Januari 1998";

        $data_array = array();

        return view('profil', compact('nama',
            'alamat',
            'tanggal_lahir',
            'data_array')
        );
    }
}
