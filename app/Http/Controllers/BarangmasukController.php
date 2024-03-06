<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Barangmasuk;
use Illuminate\Http\Request;

class BarangmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangmasuk = Barangmasuk::with('barang_name')->latest()->get();
        return view('barangmasuk.barang_masuk', ['barangmasuk' => $barangmasuk]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barangmasuk.tambah_barangmasuk',[
            'barang' => Barang::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tanggal' => 'required ',
            'jumlah' => 'required ',
            'barang' => 'required',
        ]);

        Barangmasuk::create($data);

        return redirect()->route('barang-masuk.index')->with('success', 'Data berhasil ditambahkan.');
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
        $barangmasuk = Barangmasuk::find($id);
        return view('barangmasuk.edit_barangmasuk', [
            'barang' => Barang::all(),
            'barangmasuk' => $barangmasuk,
        ]);

        return back()->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barangmasuk $barangmasuk)
    {
        $validatedData = $request->validate([
            'barang' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
        ]);
        $barangmasuk_colom = [
            'barang' => $validatedData['barang'],
            'jumlah' => $validatedData['jumlah'],
            'tanggal' => $validatedData['tanggal'],
        ];

        $barangmasuk =  $barangmasuk->update($barangmasuk_colom);
        // dd($barangmasuk_colom);
        return redirect()->route('barang-masuk.index')->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barangmasuk = Barangmasuk::find($id);
        $barangmasuk->delete();

       return back()->with('success', 'Data berhasil dihapus.');
    }

    public function cetakpdf1()
    {
        $cetak = Barangmasuk::with('barang_name')->get();
        return view('barangmasuk.cetakpdf', compact('cetak'));
    }
}
