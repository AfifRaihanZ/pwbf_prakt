<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'tabel_barang';
    protected $fillable = ['id_jb','nama_bar','stock_bar','harga_beli_bar','harga_jual_bar'];
}