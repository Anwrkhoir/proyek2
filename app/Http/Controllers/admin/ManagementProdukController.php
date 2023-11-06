<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ManagementProdukController extends Controller
{
    public function makanan(){
        // membuat varibel untuk menyimpan data dari database 
        $produk = Produk::with('kategori')->where('kategori_id',1)->get();
        // dikirim ke blade lewat compact
        return view('superadmin/management_produk/index', compact('produk'));
    }

    public function minuman(){
        // membuat varibel untuk menyimpan data dari database 
        $produk = Produk::with('kategori')->where('kategori_id',2)->get();
        // dikirim ke blade lewat compact
        return view('superadmin/management_produk/index', compact('produk'));
    }

    public function store(Request $request){
        // dd($request->all());
        $attrs = $request->validate([
            "name" => "required",
            "harga" => "required",
            "kategori_id" => "required",
            "detail" => "required"
        ]);
        $photoName = "";
        if ($request->hasFile('foto')) {
            $photo = $request->file('foto');
        $timestamp = now()->timestamp; // Dapatkan timestamp saat ini
        $photoName = $timestamp . '.' . $photo->getClientOriginalExtension(); // Nama file dengan timestamp

        $photo->move(public_path('uploads'), $photoName);
        }

        Produk::create([
            "nama_produk" => $attrs['name'],
            "harga" => $attrs['harga'],
            "kategori_id" => $attrs['kategori_id'],
            "detail" => $attrs['detail'],
            "foto" => $photoName
        ]);

        if ($attrs['kategori_id']==1) {
        return redirect()->route('management-produk.makanan');
        }else {
        return redirect()->route('management-produk.minuman');
        
        }
    }


}
