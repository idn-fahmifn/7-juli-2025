<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // memanggil model barang untuk menambahkan data pada tabel barang.
        // Barang::create([

        //     // data yang akan dinputkan ke tabel barang.
        //     'nama_barang' => 'Komputer',
        //     'jenis' => 'elektronik',
        //     'stok' => 10,
        //     'merk' => 'Imac Pro 2019'
        // ]);

        Barang::factory()->count(100)->create();

        // barang = modelnya
        // factory => mengambil template data yang akan di generate.
        // count => jumlah data yang dibutuhkan untuk generate.
        // create => perintah mengirimkan data.

    }
}
