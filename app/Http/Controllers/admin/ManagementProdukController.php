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

    public function edit($id){
        $produk=Produk::find($id); //variabel
        if(!$produk){
            return redirect()->route('management-produk.makanan');
        }
        return view('superadmin/management_produk/edit',compact('produk'));
    }

    public function update(Request $request, $id){
        // dd($request->all());
        $attrs = $request->validate([
            "name" => "required",
            "harga" => "required",
            "kategori_id" => "required",
            "detail" => "required"
        ]);
        $produk=Produk::find($id); //variabel
        if(!$produk){
            return redirect()->route('management-produk.makanan');
        }
        $photoName = "";
        if ($request->hasFile('foto')) {
            if ($produk->foto) {
                $photoPath = public_path('uploads') . '/' . $produk->foto;
        
                // Check if the file exists before attempting to delete it
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }
            $photo = $request->file('foto');
        $timestamp = now()->timestamp; // Dapatkan timestamp saat ini
        $photoName = $timestamp . '.' . $photo->getClientOriginalExtension(); // Nama file dengan timestamp

        $photo->move(public_path('uploads'), $photoName);
        $produk->foto=$photoName;

        }
        $produk->nama_produk=$attrs['name'];
        $produk->harga=$attrs['harga'];
        $produk->kategori_id=$attrs['kategori_id'];
        $produk->detail=$attrs['detail'];
        $produk->save();


        if ($attrs['kategori_id']==1) {
        return redirect()->route('management-produk.makanan');
        }else {
        return redirect()->route('management-produk.minuman');
        
        }
    }

    public function delete($id){
        // dd('anwar');
        $produk=Produk::find($id); //variabel

        if(!$produk){
            return redirect()->route('management-produk.makanan');
        }
        if ($produk->foto) {
            $photoPath = public_path('uploads') . '/' . $produk->foto;
    
            // Check if the file exists before attempting to delete it
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
        $produk->delete();
        if ($produk->kategori_id==1) {
            return redirect()->route('management-produk.makanan');
            }else {
            return redirect()->route('management-produk.minuman');
            
            }
    }

    public function search(Request $request, $id)
    {
        $query = $request->input('query');
        $produk = Produk::where('nama_produk')->get();
        $produk = Produk::with('kategori')->where('kategori_id')->get();
        
        return view('superadmin/management_produk/index', compact('produk'));
        // return view('management_produk.index', ['produk' => $produk]);
    }

}
