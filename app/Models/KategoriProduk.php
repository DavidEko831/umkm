<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug_kategori',
        'nama_kategori'
    ];

    public function produks()
    {
        return $this->hasMany(Produk::class, 'kategori_produk_id', 'kategori_produk_id');
    }
}
