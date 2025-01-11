<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Http\Requests\StoreKeuanganRequest;
use App\Http\Requests\UpdateKeuanganRequest;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::where('user_id', auth()->user()->id)->get();;
        $barang_masuk = BarangMasuk::where('user_id', auth()->user()->id)->get();
        $barang_keluar = BarangKeluar::where('user_id', auth()->user()->id)->get();
        return view('laporan.keuangan', compact('barang_masuk', 'barang_keluar', 'barang'));
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
    public function store(StoreKeuanganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Keuangan $keuangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Keuangan $keuangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKeuanganRequest $request, Keuangan $keuangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keuangan $keuangan)
    {
        //
    }
}
