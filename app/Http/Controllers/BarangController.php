<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Barangmasuk;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::latest()->get();
        return view('barang.barang', ['barang' => $barang]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.tambah_barang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'barang' => 'required',
            'harga' => 'required ',
            'stok' => 'required ',
        ]);

        Barang::create($data);

        return redirect()->route('barang.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = Barang::find($id);
        return view('barang.edit_barang', [
            'barang' => $barang,
        ]);

        return back()->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $validatedData = $request->validate([
            'barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);
        $barang_colom = [
            'barang' => $validatedData['barang'],
            'harga' => $validatedData['harga'],
            'stok' => $validatedData['stok'],
        ];

        $barang =  $barang->update($barang_colom);
        return redirect()->route('barang.index')->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::find($id);
        $barang->delete();

       return back()->with('success', 'Data berhasil dihapus.');
    }
}
