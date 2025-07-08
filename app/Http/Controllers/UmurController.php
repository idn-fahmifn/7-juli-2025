<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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


        // shorthand untuk validator

        // $req->validate([
        //     'name' => ['string', 'required', 'min:3', 'max:30'],
        //     'age' => ['numeric', 'required', 'min:1', 'max:99']
        // ]);

        $input = $req->all();
        //$input = wadah untuk menyimpan request, $req berisi data yang diinputkan di form.

        $validator = Validator::make($input, [
            'name' => ['string', 'required', 'min:3', 'max:30'],
            'age' => ['numeric', 'required', 'min:1', 'max:99']
        ], [
            // pesan setiap key jika dilanggar / ada error
            // pesan error untu name
            'name.string' => 'Field ini harus string.',
            'name.required' => 'Field ini harus diisi.',
            'name.min' => 'Field ini harus diisi minimal 3 karakter.',
            'name.max' => 'Field ini harus diisi maximal 30 karakter.',

            // pesan error age
            'age.numeric' => 'Field ini hanya boleh diisi oleh angka.',
            'age.required' => 'Field ini harus diisi.',
            'age.min' => 'Field ini harus diisi jangan kurang dari 3.',
            'age.max' => 'Field ini harus diisi jangan lebih dari 99.',
        ]);

        // respon ketika ada error
        if($validator->fails()){
            return back()->withErrors($validator);
        }

        return redirect()->route('sukses'); 
    }
}
