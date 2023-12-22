<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pos;

class Create extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        Pos::create($request->all());

        return redirect()->route('read')
            ->with('success', 'Data berhasil disimpan.');
    }
}

