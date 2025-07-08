<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmurController extends Controller
{
    public function form()
    {
        return view('umur.form_umur');
    }

    public function sukses()
    {
        return view('umur.sukses');
    }

    public function proses(Request $req)
    {

        // membuat wadah untuk bisa dibaca oleh middleware
        $req->session()->put('umur',$req->age);

        $req->validate([
            'name' => ['string', 'required', 'min:3', 'max:30'],
            'age' => ['numeric', 'required', 'min:1', 'max:99']
        ]);

        return redirect()->route('sukses'); 
    }
}
