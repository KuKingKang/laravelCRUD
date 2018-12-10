<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Transaksi;

class TransaksiController extends Controller
{
    //
    public function tampil(){
        return view('transaksi.display');
    }
}
