<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Costumer;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::with('costumer_name')->latest()->get();
        return view('transaksi.transaksi', ['transaksi' => $transaksi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi.tambah_transaksi',[
            'barang' => Barang::all(),
            'costumer' => Costumer::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'barang' => 'required',
            'costumer' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required|numeric',
            'total_harga' => 'required',
        ]);
    
        // Simpan data ke dalam database
        $transaksi = new Transaksi();
        $transaksi->barang = $validatedData['barang'];
        $transaksi->costumer = $validatedData['costumer'];
        $transaksi->tanggal = $validatedData['tanggal'];
        $transaksi->jumlah = $validatedData['jumlah'];
        $transaksi->total_harga = $validatedData['total_harga'];
        $transaksi->save();
    
        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show( $transaksi)
    {
        $transaksi= Transaksi::where('id', $transaksi)->first();
        $costumer = Costumer::all();
        $barang = Barang::all();
        return view('transaksi.detail_transaksi', compact('transaksi', 'barang', 'costumer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();

       return back()->with('success', 'Data berhasil dihapus.');
    }

    public function cetakpdf()
    {
        $cetak = Transaksi::with('costumer_name', 'barang_name')->get();
        return view('transaksi.cetakpdf', compact('cetak'));
    }
}
