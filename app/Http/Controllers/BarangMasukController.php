<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\Barang;
use App\Http\Requests\StoreBarangMasukRequest;
use App\Http\Requests\UpdateBarangMasukRequest;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::where('user_id', auth()->user()->id)->get();;
        $barang_masuk = BarangMasuk::where('user_id', auth()->user()->id)->get();
        return view('barang.barang_masuk', compact('barang_masuk', 'barang'));
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
    public function store(StoreBarangMasukRequest $request)
    {
        $barang = Barang::find($request->barang_id);

        $data = BarangMasuk::create([
            'barang_id' => $request->barang_id,
            'stok_masuk' => $request->stok_masuk,
            'tanggal_masuk' => $request->tanggal_masuk,
            'user_id' => auth()->user()->id,
            'harga_total' => $request->stok_masuk * $barang->harga_barang
        ]);

        if ($barang) {
            // Update the 'stok_barang' field
            $barang->update([
                'stok_barang' => $barang->stok_barang + $request->stok_masuk
            ]);
        }
        return redirect()->route("barang_masuk.index")->with("success","Barang Masuk Berhasil Ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(BarangMasuk $barangMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BarangMasuk $barangMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBarangMasukRequest $request, BarangMasuk $barangMasuk)
    {
        // Get the old value of stok_masuk from the existing barangMasuk record
        $oldStokMasuk = $barangMasuk->stok_masuk;
        $newStokMasuk = $request->stok_masuk; // New stock value coming from the request
        $newBarangId = $request->barang_id;

        // Get the old barang_id from the existing record
        $oldBarangId = $barangMasuk->barang_id;

        // Update the BarangMasuk record with the new values from the request
        $update = $barangMasuk->update([
            'barang_id' => $newBarangId,
            'stok_masuk' => $newStokMasuk,
            'tanggal_masuk' => $request->tanggal_masuk,
            'user_id' => auth()->user()->id,
            'harga_total' => $newStokMasuk * $barangMasuk->barang->harga_barang
        ]);

        if ($barangMasuk->barang_id == $oldBarangId) {
            $oldBarang = Barang::find($newBarangId);
            // Decrease the stok_barang by the old stok_masuk value
            $oldBarang->update([
                'stok_barang' => $oldBarang->stok_barang - $oldStokMasuk
            ]);
        }

        // Retrieve the new Barang model instance based on the new barang_id
        if ($barangMasuk->barang_id == $newBarangId) {
            $newBarang = Barang::find($newBarangId);
            // Increase the stok_barang by the new stok_masuk value
            $newBarang->update([
                'stok_barang' => $newBarang->stok_barang + $newStokMasuk
            ]);
        }

        return redirect()->route('barang_masuk.index')->with("success","Barang Berhasil diUpdate");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BarangMasuk $barangMasuk)
    {
        // Ambil nilai stok_masuk dari barangMasuk yang akan dihapus
        $stokMasuk = $barangMasuk->stok_masuk;

        // Ambil model Barang berdasarkan barang_id yang terkait dengan barangMasuk
        $barang = Barang::find($barangMasuk->barang_id);

        if ($barang) {
            // Kurangi stok_barang dengan stok_masuk yang dihapus
            $barang->update([
                'stok_barang' => $barang->stok_barang - $stokMasuk
            ]);
        }

        // Hapus barangMasuk
        $delete = $barangMasuk->delete();

        // Redirect kembali ke halaman index dengan pesan
        return redirect()->route("barang_masuk.index")->with("success","Barang Berhasil DiHapus");
    }
}
