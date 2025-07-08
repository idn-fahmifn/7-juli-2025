<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    // method untuk index barang
    public function index()
    {
        $data = Barang::all();
        return view('page.barang', compact('data'));
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
