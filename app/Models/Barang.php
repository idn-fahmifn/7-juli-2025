<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{

    use HasFactory;

    //definisikan tabel yang akan dihubungkan ke model barang.
    protected $table = 'barang';

    // definisikan column yang ada pada tabel barang.
    protected $fillable = [
        'nama_barang',
        'jenis',
        'stok',
        'merk'
    ];
}
