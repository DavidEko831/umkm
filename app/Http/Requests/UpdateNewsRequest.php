<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class UpdateNewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:150',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048', // Gambar tidak wajib diupload setiap saat
            'description' => 'required|string|max:150',
        ];
    }

    public function handleChangeInput($news)
    {
        // Ambil data yang sudah divalidasi
        $data = $this->validated();

        $data = [
            'title' => $data['title'],
            'image' => $news->image,
            'description' => $data['description'],
        ];

        // Pengecekan perubahan 'title', 'description', dan 'image'
        $isTitleChanged = $news->title !== $data['title'];
        $isDescriptionChanged = $news->description !== $data['description'];
        $isImageChanged = false;

        // Handle file upload jika ada
        if ($this->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($news->image && Storage::disk('public')->exists('images/' . $news->image)) {
                Storage::disk('public')->delete('images/' . $news->image);
            }

            // Generate nama file baru
            $date = date('YmdHis');
            $extension = $this->file('image')->getClientOriginalExtension();
            $newNameFile = 'images/' . $date . '.' . $extension;

            // Simpan file ke direktori 'public/images'
            $this->file('image')->storeAs($newNameFile);

            // Set kolom 'image' di data yang akan di-update
            $data['image'] = $newNameFile;

            // Tandai bahwa gambar telah berubah
            $isImageChanged = true;
        }

        // Jika ada perubahan (title, description, atau image), kembalikan data
        if ($isTitleChanged || $isDescriptionChanged || $isImageChanged) {
            return $data;
        }

        // Jika tidak ada perubahan, return null
        return null;
    }

}
