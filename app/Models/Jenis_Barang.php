<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_Barang extends Model
{
    protected $table = 'tabel_jenis_barang';
    protected $fillable = ['jenis_barang'];
}