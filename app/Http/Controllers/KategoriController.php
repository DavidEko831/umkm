<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;
class KategoriController extends Controller
{
    //

    public function makananadmin()
    {
        // Mendapatkan produk yang kategorinya 'makanan'
        $produks = Umkm::where('kategori', 'makanan')->paginate(10);

        return view('auth.makananadmin', ['produks' => $produks]);
    }

    public function makanan()
    {
        // Mendapatkan produk yang kategorinya 'makanan'
        $produks = Umkm::where('kategori', 'makanan')->paginate(10);

        return view('makanan', ['produks' => $produks]);
    }

    public function minuman()
    {
        // Mendapatkan produk yang kategorinya 'makanan'
        $produks = Umkm::where('kategori', 'minuman')->paginate(10);

        return view('minuman', ['produks' => $produks]);
    }

    public function minumanadmin()
    {
        // Mendapatkan produk yang kategorinya 'makanan'
        $produks = Umkm::where('kategori', 'minuman')->paginate(10);

        return view('auth.minumanadmin', ['produks' => $produks]);
    }

    public function konveksi()
    {
        // Mendapatkan produk yang kategorinya 'makanan'
        $produks = Umkm::where('kategori', 'konveksi')->paginate(10);

        return view('konveksi', ['produks' => $produks]);
    }

    public function konveksiadmin()
    {
        // Mendapatkan produk yang kategorinya 'makanan'
        $produks = Umkm::where('kategori', 'konveksi')->paginate(10);

        return view('auth.konveksiadmin', ['produks' => $produks]);
    }
}
