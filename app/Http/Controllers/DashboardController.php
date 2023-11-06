<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->role == 'superadmin'){
         return redirect()->route('superadmin.dashboard_admin');

        }
        return view('dashboard');
    }
}