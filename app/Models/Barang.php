<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public $guarded = [];
    protected $table = 'barangs';
    protected $primaryKey = 'id';
}
