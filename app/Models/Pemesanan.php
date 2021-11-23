<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'tabel_pemesanan';
    protected $fillable =['id_sup','id_user','tgl_pesan','status_pesan'];
}