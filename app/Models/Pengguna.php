<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'tabel_user';
    protected $fillable = ['nama_user', 'username', 'alamat_user','telp_user','username','password'];
}