<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    // menampilkan halaman index
    public function index()
    {
        return view('area.index');
    }

    // menampilkan halaman detail : 
    // public function detail($param)
    // {
    //     $text = 'Detail Halaman';
    //     return view('area.detail', compact('param', 'text'));
    // }

    public function detail($param)
    {
        $text = 'Detail Halaman';
        $data = $param;
        return view('area.detail', [
            'text' => $text,
            'data' => $data
        ]);
    }



}
