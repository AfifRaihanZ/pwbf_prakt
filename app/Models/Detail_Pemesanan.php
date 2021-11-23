<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Pemesanan extends Model
{
    protected $table = 'tabel_detail_pemesanan';
    protected $fillable = ['id_bar','id_pesan','jumlah_up','harga_up'];
}