<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    // method untuk index barang
    public function index()
    {
        return 'Ini adalah halaman index barang';
    }

    // method untuk report barang.
    public function report()
    {
        return 'halaman report barang';
    }

    public function detail($barang)
    {
        return "Ini adalah detail barang {$barang}";
    }

}
