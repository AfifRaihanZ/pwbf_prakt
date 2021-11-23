<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History_Stock extends Model
{
    protected $table = 'tabel_history_stock';
    protected $fillable = ['tgl_hs','update_stock_hs','status_hs'];
}