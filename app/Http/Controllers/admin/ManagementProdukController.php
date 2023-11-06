<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ManagementProdukController extends Controller
{
    public function index(){
        // membuat varibel untuk menyimpan data dari database 
        $makanan = Produk::where('kategori_id',1)->get();
        // dikirim ke blade lewat compact
        return view('superadmin/management_produk/index', compact('makanan'));
    }


}
