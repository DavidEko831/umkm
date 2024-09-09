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
        Schema::create('produks', function (Blueprint $table) {
            $table->bigIncrements('id_produks'); // Primary key
            $table->unsignedBigInteger('toko_id');
            $table->foreign('toko_id')->references('toko_id')->on('tokos')->onDelete('cascade');
            $table->unsignedBigInteger('kategori_produk_id');
            $table->foreign('kategori_produk_id')->references('kategori_produk_id')->on('kategori_produks')->onDelete('cascade');
            $table->string('slug_produk', 50);
            $table->string('nama_produk', 50);
            $table->string('harga', 50);
            $table->string('slogan', 50);
            $table->string('deskripsi', 50);
            $table->string('foto_produk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
