<?php

namespace App\Http\Controllers;

use App\Models\Pos;
use Illuminate\Http\Request;

class PosController extends Controller
{
     public function read()
    {
        $barangs = Pos::paginate(10);
        return view('read', compact('barangs'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        Pos::create([
    		'nama_barang' => $request->nama_barang,
            'price' => $request->price,
    		'stock' => $request->stock,
    	]);

        return redirect()->route('read')
            ->with('success', 'data created successfully.');
    }

    public function edit($id)
    {
        $barangs = Pos::find($id);
        return view('edit', compact('barangs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        $barangs = Pos::find($id);

        $barangs->nama_barang = $request->input('nama_barang');
        $barangs->price = $request->input('price');
        $barangs->stock = $request->input('stock');
        $barangs->save();

        return redirect()->route('read')
            ->with('success', 'data update successfully');
    }

    public function destroy($id)
    {
        Pos::find($id)->delete();

        return redirect()->route('read')
            ->with('success', 'data deleted successfully');
    }
}
