<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'tabel_supplier';
    protected $fillable = ['id_kota','nama_sup','alamat_sup','telp_sup'];
}