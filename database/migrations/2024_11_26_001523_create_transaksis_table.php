<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelanggan');
            $table->text('alamat');
            $table->string('no_hp');
            $table->foreignId('barang_id');
            $table->integer('jumlah_beli');
            $table->date('tanggal_beli');
            $table->integer('harga_total');
            $table->string('no_transaksi');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
