<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlahmasuk = BarangMasuk::where('user_id', auth()->user()->id)->count();
        $jumlahkeluar = BarangKeluar::where('user_id', auth()->user()->id)->count();
        $jumlahbarang = Barang::where('user_id', auth()->user()->id)->count();
        $jumlahtransaksi = Transaksi::where('user_id', auth()->user()->id)->count();
        return view('home', compact('jumlahmasuk', 'jumlahkeluar','jumlahbarang','jumlahtransaksi'));
    }
}
