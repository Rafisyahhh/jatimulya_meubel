<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    public $guarded = [];
    protected $table = 'transaksis';
    protected $primaryKey = 'id';
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
