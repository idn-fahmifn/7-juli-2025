<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// basic Routing
// menampilkan data
Route::get('homepage', function(){
    return 'Ini adalah route homepage';
});

// menampilkan halaman.
Route::get('home', function(){
    return view('page.home');
})->name('halaman.home');

Route::get('profile', function(){
    return view('page.profile');
})->name('halaman.profile');

Route::get('about', function(){
    return view('page.about');
})->name('halaman.about');

Route::view('tentang', 'page.about');


//route dengan parameter
Route::get('mobil/{parameter}', function($mobil){
    // uri/{param} != parameter yang difunction
    // output : 
    return 'Ini adalah halaman route mobil dengan parameter merk : ' . $mobil . ' saya baru beli kemarin.';
});

// route dengan parameter optional
Route::get('motor/{parameter?}', function($param = 'mobil'){
    return "Ini adalah motor saya, mereknya : {$param}, saya belinya cash";
});


// Memberikan group pada routing.
Route::prefix('training')->group(function(){
    Route::get('laravel', function(){
        return 'ini adalah kelas laravel';
    }); //item laravel
    Route::get('mtcna', function(){
        return 'ini adalah kelas mtcna';
    }); //item mtcna
    Route::get('ccna', function(){
        return 'ini adalah kelas ccna';
    }); //item ccna
});

// route dengan controller
Route::get('barang', [BarangController::class, 'index']);
Route::get('report-barang', [BarangController::class, 'report']);

// route parameter
Route::get('detail_barang/{param}', [BarangController::class, 'detail']);

// Route menampilkan halaman area.
Route::get('area', [AreaController::class, 'index']);
Route::get('area/{param}', [AreaController::class, 'detail']);

// Route dengan resource controller
Route::resource('kategori', KategoriController::class);
Route::get('report', [KategoriController::class, 'report'])->name('report');





