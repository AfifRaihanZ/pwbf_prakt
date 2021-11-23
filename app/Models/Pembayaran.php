<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'tabel_pembayaran';
    protected $fillable = ['id_trima','tgl_bayar','total_bayar'];
}