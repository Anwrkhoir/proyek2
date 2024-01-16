<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Models\Pesanan;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function pesanan(){
    

        return view('customer.pesanan');
    }

    public function confirmation(){
        // $konfirmasi = Pesanan::with('keranjang')->where ('keranjang_id', Auth::keranjang()->id)->get();
        // // dd($keranjang);
        // $data = [
        //     'konfirmasi' => $konfirmasi,
        //     ];
        return view('customer.confirmation');
    }
}
