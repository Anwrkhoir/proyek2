<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->role == 'superadmin'){
        return redirect()->route('superadmin.dashboard_admin');

        }
        $makanan = Produk::where("kategori_id", 1)->get();
        $minuman = Produk::where("kategori_id", 2)->get();

        $data = [
        'makanan' => $makanan,
        'minuman' => $minuman,
        ];

return view('customer.dashboard-customer', $data);


    }
}
