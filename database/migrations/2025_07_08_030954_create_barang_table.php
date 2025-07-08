<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            // column pada tabel barang :
            $table->id();
            $table->bigInteger('kode_matkul')->unsigned()->autoIncrement();
            $table->string('nama_barang')->unique();
            $table->enum('jenis',['makanan', 'elektronik', 'kendaraan'])->default('makanan');
            $table->integer('stok');
            $table->string('merk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
