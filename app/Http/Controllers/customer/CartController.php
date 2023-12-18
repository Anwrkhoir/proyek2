<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart(){
        $keranjang = Keranjang::with('user', 'produk')->where ('user_id', Auth::user()->id)->get();
        // dd($keranjang);
        $data = [
            'keranjang' => $keranjang,
            ];

        return view('customer.cart', $data);
    }

    public function addToCart(Request $request, $id)
    {
        $produk = Produk::find($id);
        // dd
        // ('cek');

        // Cek apakah item sudah ada dalam keranjang
        $existingCart = Keranjang::where('user_id', Auth::user()->id)
            ->where('produk_id', $id)
            ->first();

        if ($existingCart) {
            // Jika item sudah ada dalam keranjang, tambahkan jumlahnya
            $existingCart->increment('quantity');
        } else {
            // Jika item belum ada dalam keranjang, tambahkan item baru
            Keranjang::create([
                'user_id' => Auth::user()->id,
                'produk_id' => $id,
                'quantity' => 1,
            ]);
        }

        return redirect()->route('customer.cart');
    }
}
