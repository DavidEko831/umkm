<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_toko',
        'alamat',
        'telp',
        'foto_toko'
    ];

    public function produks()
    {
        return $this->hasMany(Produk::class, 'toko_id', 'toko_id');
    }
}
