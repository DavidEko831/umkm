<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'toko_id',
        'kategori_produk_id',
        'slug_produk',
        'nama_produk',
        'harga',
        'slogan',
        'deskripsi',
        'foto_produk'
    ];

    public function toko()
    {
        return $this->belongsTo(Toko::class, 'toko_id', 'toko_id');
    }

    public function kategoriProduk()
    {
        return $this->belongsTo(KategoriProduk::class, 'kategori_produk_id', 'kategori_produk_id');
    }
}
