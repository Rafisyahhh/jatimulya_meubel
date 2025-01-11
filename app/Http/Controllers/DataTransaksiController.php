<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\BarangKeluar;
use Illuminate\Support\Str;
use App\Http\Requests\StoreDataTransaksiRequest;
use App\Http\Requests\UpdateDataTransaksiRequest;

class DataTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::where('user_id', auth()->user()->id)->get();
        $transaksi = Transaksi::where('user_id', auth()->user()->id)->get();
        return view('barang.transaksi', compact('transaksi', 'barang'));
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
    public function store(StoreDataTransaksiRequest $request)
    {
        // Ambil harga dari relasi barang_id
        $barang = Barang::find($request->barang_id);

        if (!$barang) {
            return redirect()->back()->withErrors('Barang tidak ditemukan.');
        }

        // Generate no_transaksi acak
        $no_transaksi = Str::random(10); // Contoh: menggunakan 10 karakter acak (ubah sesuai kebutuhan)

        // Hitung harga_total dengan mengalikan jumlah_beli dan harga barang
        $harga_total = $request->jumlah_beli * $barang->harga_barang;

        // Simpan data transaksi
        $transaksi = Transaksi::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'barang_id' => $request->barang_id,
            'jumlah_beli' => $request->jumlah_beli,
            'tanggal_beli' => $request->tanggal_beli,
            'harga_total' => $harga_total,
            'no_transaksi' => $no_transaksi,
            'user_id' => auth()->user()->id
        ]);

        // Simpan data barang keluar dengan no_transaksi yang sama
        $barangKeluar = BarangKeluar::create([
            'barang_id' => $request->barang_id,
            'stok_keluar' => $request->jumlah_beli,
            'tanggal_keluar' => $request->tanggal_beli,
            'no_transaksi' => $no_transaksi,
            'user_id' => auth()->user()->id,
            'harga_total' => $harga_total
        ]);

        // Update stok barang
        if ($barang) {
            $barang->update([
                'stok_barang' => $barang->stok_barang - $request->jumlah_beli
            ]);
        }

        return redirect()->route("transaksi.index")->with("success","Transaksi Berhasil Ditambahkan");
    }



    /**
     * Display the specified resource.
     */
    public function show(Transaksi $dataTransaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $dataTransaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDataTransaksiRequest $request, Transaksi $Transaksi)
    {
        $barangBaru = Barang::find($request->barang_id);
        $barangLama = Barang::find($Transaksi->barang_id); // Barang lama sebelum diubah
        $oldJumlahBeli = $Transaksi->jumlah_beli; // Jumlah beli lama
        $newJumlahBeli = $request->jumlah_beli; // Jumlah beli baru

        if (!$barangBaru) {
            return redirect()->back()->withErrors("success",'Barang tidak ditemukan.');
        }

        $harga_total = $newJumlahBeli * $barangBaru->harga_barang;

        // Update data transaksi
        $Transaksi->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'barang_id' => $request->barang_id,
            'jumlah_beli' => $newJumlahBeli,
            'tanggal_beli' => $request->tanggal_beli,
            'harga_total' => $harga_total,
            'user_id' => auth()->user()->id
        ]);

        // Update stok barang
        if ($barangLama && $barangBaru->id !== $barangLama->id) {
            // Jika barang_id berubah
            // Kembalikan stok barang lama
            $barangLama->update([
                'stok_barang' => $barangLama->stok_barang + $oldJumlahBeli,
            ]);

            // Kurangi stok barang baru
            $barangBaru->update([
                'stok_barang' => $barangBaru->stok_barang - $newJumlahBeli,
            ]);
        } else {
            // Jika barang_id tidak berubah, sesuaikan selisih stok
            $stokSelisih = $newJumlahBeli - $oldJumlahBeli;
            $barangBaru->update([
                'stok_barang' => $barangBaru->stok_barang - $stokSelisih,
            ]);
        }

        // Update data barang keluar terkait
        $barangKeluar = BarangKeluar::where('no_transaksi', $Transaksi->no_transaksi)->first();
        if ($barangKeluar) {
            $barangKeluar->update([
                'barang_id' => $request->barang_id,
                'stok_keluar' => $newJumlahBeli,
                'tanggal_keluar' => $request->tanggal_beli,
                'user_id' => auth()->user()->id,
                'harga_total' => $harga_total
            ]);
        }

        return redirect()->route("transaksi.index")->with("success", "Transaksi Berhasil Diperbarui");
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $Transaksi)
    {
        // Ambil nilai stok_beli dari transaksi yang akan dihapus
        $stok = $Transaksi->jumlah_beli;

        // Ambil model Barang berdasarkan barang_id yang terkait dengan transaksi
        $barang = Barang::find($Transaksi->barang_id);

        if ($barang) {
            // Kurangi stok_barang dengan stok yang dihapus (stok yang dibeli)
            $barang->update([
                'stok_barang' => $barang->stok_barang - $stok // Tambahkan kembali stok_barang karena transaksi dihapus
            ]);
        }

        // Hapus BarangKeluar dengan no_transaksi yang sama
        BarangKeluar::where('no_transaksi', $Transaksi->no_transaksi)->delete();

        // Hapus transaksi
        $delete = $Transaksi->delete();

        // Redirect kembali ke halaman index dengan pesan
        return redirect()->route("transaksi.index")->with("success","Transaksi Berhasil DiHapus");
    }
}
