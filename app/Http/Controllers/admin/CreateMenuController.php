<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CreateMenuController extends Controller
{
    public function create(){
        return view('superadmin.management_produk.create');
    }
    
}
