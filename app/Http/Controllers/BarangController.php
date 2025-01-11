<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::where('user_id', auth()->user()->id)->get();
        return view('barang.barang', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBarangRequest $request)
    {
        $data=Barang::create([
            'nama_barang'=>$request->nama_barang,
            'jenis_barang'=>$request->jenis_barang,
            'harga_barang'=>$request->harga_barang,
            'stok_barang'=>$request->stok_barang,
            'produsen_barang'=>$request->produsen_barang,
            'user_id'=>auth()->user()->id
        ]);
        return redirect()->route("barang.index")->with("success","Barang Berhasil Ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBarangRequest $request, Barang $barang)
    {
        $update = $barang->update([
            'nama_barang'=>$request->nama_barang,
            'jenis_barang'=>$request->jenis_barang,
            'harga_barang'=>$request->harga_barang,
            'stok_barang'=>$request->stok_barang,
            'produsen_barang'=>$request->produsen_barang,
            'user_id'=>auth()->user()->id
        ]);
        return redirect()->route('barang.index')->with("success","Barang Berhasil diUpdate");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        $delete = $barang->delete();
        return redirect()->route("barang.index")->with("success","Barang Berhasil DiHapus");
    }
}
