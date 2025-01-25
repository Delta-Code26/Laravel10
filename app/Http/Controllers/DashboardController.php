<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('dashboard.admin');  // Halaman dashboard admin
    }

    public function petani()
    {
        return view('dashboard.petani');  // Halaman dashboard petani
    }
}
