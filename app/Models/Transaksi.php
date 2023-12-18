<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        ('user_id'),
        ('produk_id'),
        ('Kategori_id'),
        ('pembayaran_id'),
        ('tanggal'),
        ('status'),
        ('total'),

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function produk(){
        return $this->belongsTo(Produk::class);
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function pembayaran(){
        return $this->belongsTo(Pembayaran::class);
    }
}
