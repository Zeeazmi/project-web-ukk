<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $costumer = Costumer::latest()->get();
        return view('costumer.costumer', ['costumer' => $costumer]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('costumer.tambah_costumer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'costumer' => 'required',
            'alamat' => 'required ',
            'no_telephon' => 'required ',
        ]);

        Costumer::create($data);

        return redirect()->route('costumer.index')->with('success', 'Data berhasil ditambahkan.');
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
        $costumer = Costumer::find($id);
        return view('costumer.edit_costumer', [
            'costumer' => $costumer,
        ]);

        return back()->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Costumer $costumer)
    {
        $validatedData = $request->validate([
            'costumer' => 'required',
            'alamat' => 'required',
            'no_telephon' => 'required',
        ]);
        $costumer_colom = [
            'costumer' => $validatedData['costumer'],
            'alamat' => $validatedData['alamat'],
            'no_telephon' => $validatedData['no_telephon'],
        ];

        $costumer =  $costumer->update($costumer_colom);
        return redirect()->route('costumer.index')->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $costumer = Costumer::find($id);
        $costumer->delete();

       return back()->with('success', 'Data berhasil dihapus.');
    }
}
