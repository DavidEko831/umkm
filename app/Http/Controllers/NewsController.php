<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data dari model News
        $news = News::all();

        // Looping untuk menambahkan properti isOlderThanAWeek
        foreach ($news as $item) {
            $item->isOlderThanAWeek = Carbon::parse($item->created_at)->lt(Carbon::now()->subWeek());
        }

        // Kirim data ke view
        return view('auth.postingan', ['news' => $news])->with('auth.beritaUtamaadmin', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('auth.newsCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $lock = Cache::lock('id', 30);

        if ($lock->get()) {
            // Mendapatkan path file gambar dari request
            $imagePath = $request->handleImageUpload();

            // Gabungkan data request dengan path gambar
            $newsData = $request->all();
            $newsData['image'] = $imagePath; // Menyimpan path gambar di array data

            // Membuat berita baru menggunakan mass assignment
            News::create($newsData);

            return redirect()->route('news.index')->with('success', 'News created successfully.');
            $lock->release();
        } else {
            return redirect()->route('news.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
        $item = News::get()->findOrFail($news);

        return view('auth.berita', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $item = News::get()->findOrFail($news);

        return view('auth.newsEdit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        // Ambil model yang ada berdasarkan ID
        $item = News::get()->findOrFail($news);

        $lock = Cache::lock('update', 30);

        if ($lock->get()) {
            // Cek perubahan melalui request
            $data = $request->handleChangeInput($item);

            // Jika ada perubahan, lakukan update
            if ($data) {
                $news->update($data);
                return redirect()->route('news.index')->with('success', 'News updated successfully!');
            }

            // Jika tidak ada perubahan, kembali tanpa update
            return redirect()->route('news.index')->with('info', 'No changes detected.');

            $lock->release();
        } else {
            return redirect()->route('news.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        // Ambil model yang ada berdasarkan ID
        $item = News::get()->findOrFail($news);

        $lock = Cache::lock('delete', 30);

        if ($lock->get()) {
            // Hapus gambar lama jika ada
            if ($item->image && Storage::disk('public')->exists('images/' . $item->image)) {
                Storage::disk('public')->delete('images/' . $item->image);
            }

            $item->delete();

            return redirect()->route('news.index');

            $lock->release();
        } else {
            return redirect()->route('news.index');
        }
    }
}
