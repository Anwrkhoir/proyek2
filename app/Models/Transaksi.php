<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        ('user_id'),
        ('produk_id'),
        ('kategori_id'),
        ('pembayaran_id'),
        ('tanggal'),
        ('total'),
      
    ];

    public function produk(){
        return $this->belongsTo(Produk::class);
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}