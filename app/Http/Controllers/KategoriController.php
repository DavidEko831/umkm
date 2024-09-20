<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //

    public function makananadmin(Request $request)
    {
        // Ambil input pencarian
        $keyword = $request->input('search');

        $products = Umkm::where('kategori', 'makanan')
            ->when($keyword, function ($query) use ($keyword) {
                // Filter berdasarkan namaToko atau namaProduk hanya jika ada keyword
                $query->where(function ($query) use ($keyword) {
                    $query->where('namaToko', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('namaProduk', 'LIKE', '%' . $keyword . '%');
                });
            })
            ->paginate(10); // Paginate untuk hasil pencarian

        return view('auth.makananadmin', ['produks' => $products]);
    }

    public function makanan(Request $request)
    {
        // Ambil input pencarian
        $keyword = $request->input('search');

        $products = Umkm::where('kategori', 'makanan')
            ->when($keyword, function ($query) use ($keyword) {
                // Filter berdasarkan namaToko atau namaProduk hanya jika ada keyword
                $query->where(function ($query) use ($keyword) {
                    $query->where('namaToko', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('namaProduk', 'LIKE', '%' . $keyword . '%');
                });
            })
            ->paginate(10); // Paginate untuk hasil pencarian

        return view('makanan', ['produks' => $products]);
    }

    public function minuman(Request $request)
    {
        // Ambil input pencarian
        $keyword = $request->input('search');

        $products = Umkm::where('kategori', 'minuman')
            ->when($keyword, function ($query) use ($keyword) {
                // Filter berdasarkan namaToko atau namaProduk hanya jika ada keyword
                $query->where(function ($query) use ($keyword) {
                    $query->where('namaToko', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('namaProduk', 'LIKE', '%' . $keyword . '%');
                });
            })
            ->paginate(10); // Paginate untuk hasil pencarian

        // Mengembalikan view dengan produk yang sudah difilter
        return view('minuman', ['produks' => $products]);
    }

    public function minumanadmin(Request $request)
    {
        // Ambil input pencarian
        $keyword = $request->input('search');

        $products = Umkm::where('kategori', 'minuman')
            ->when($keyword, function ($query) use ($keyword) {
                // Filter berdasarkan namaToko atau namaProduk hanya jika ada keyword
                $query->where(function ($query) use ($keyword) {
                    $query->where('namaToko', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('namaProduk', 'LIKE', '%' . $keyword . '%');
                });
            })
            ->paginate(10); // Paginate untuk hasil pencarian

        return view('auth.minumanadmin', ['produks' => $products]);
    }

    public function konveksi(Request $request)
    {
        // Ambil input pencarian
        $keyword = $request->input('search');

        $products = Umkm::where('kategori', 'konveksi')
            ->when($keyword, function ($query) use ($keyword) {
                // Filter berdasarkan namaToko atau namaProduk hanya jika ada keyword
                $query->where(function ($query) use ($keyword) {
                    $query->where('namaToko', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('namaProduk', 'LIKE', '%' . $keyword . '%');
                });
            })
            ->paginate(10); // Paginate untuk hasil pencarian

        return view('konveksi', ['produks' => $products]);
    }

    public function konveksiadmin(Request $request)
    {
        // Ambil input pencarian
        $keyword = $request->input('search');

        $products = Umkm::where('kategori', 'konveksi')
            ->when($keyword, function ($query) use ($keyword) {
                // Filter berdasarkan namaToko atau namaProduk hanya jika ada keyword
                $query->where(function ($query) use ($keyword) {
                    $query->where('namaToko', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('namaProduk', 'LIKE', '%' . $keyword . '%');
                });
            })
            ->paginate(10); // Paginate untuk hasil pencarian

        return view('auth.konveksiadmin', ['produks' => $products]);
    }
}
