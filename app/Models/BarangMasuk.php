<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;
    use HasFactory;
    public $guarded = [];
    protected $table = 'barang_masuks';
    protected $primaryKey = 'id';

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
