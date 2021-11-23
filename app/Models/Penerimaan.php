<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    protected $table = 'tabel_penerimaan';
    protected $fillable = ['id_sup','id_user','tgl_trima','total_harga','status_trima'];
}