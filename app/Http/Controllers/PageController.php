<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function barang()
    {
        return view('barang');
    }
    public function transaksi()
    {
        return view('transaksi');
    }
}
