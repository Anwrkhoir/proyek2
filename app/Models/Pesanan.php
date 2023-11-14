<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{

    use HasFactory;

    protected $fillable = [
        ('produk_id'),
        ('pcs'),
        ('kategori_id'),
        ('user_id'),
        ('layanan'),
        ('status'),  
    ];

    public function produk(){
        return $this->belongsTo(Produk::class);
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}