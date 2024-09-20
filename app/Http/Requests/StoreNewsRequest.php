<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
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

    /**
     * Handle the image upload and save the path to the database.
     *
     * @return string
     */
    public function handleImageUpload(): string
    {
        $newNameFile = '';
        if ($this->hasFile('image')) {
            $date = date('YmdHis');
            $extension = $this->file('image')->getClientOriginalExtension();
            $newNameFile = $date . '.' . $extension;
            $path = $this->file('image')->storeAs('images', $newNameFile);
            return $path;
        }

        return ''; // Kembalikan string kosong jika tidak ada file yang diunggah
    }
}
