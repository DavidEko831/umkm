<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TAMBAH PRODUK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
        crossorigin="anonymous" />
</head>

<body class="bg-[#3BAFAB] flex flex-col items-center">
    <div class="relative w-full flex justify-start mt-2 pl-4">
        <a href="/homeadmin/news">
            <svg width="60" height="" viewBox="0 0 59 71" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="w-[38px] h-[34px] md:w-[60px] md:h-[56px]">
                <path
                    d="M57.2162 3.51066L58.9062 66.6637C58.9211 67.3032 58.7462 67.935 58.4001 68.4913C58.0541 69.0476 57.55 69.5072 56.9423 69.8207C56.3346 70.1342 55.6461 70.2897 54.9511 70.2704C54.256 70.2511 53.5807 70.0579 52.9978 69.7114L2.55844 39.4621C0.467161 38.2084 0.382846 35.0578 2.40399 33.6906L51.1533 0.786855C51.7156 0.406048 52.3798 0.173781 53.0739 0.115289C53.7681 0.0567973 54.4655 0.174318 55.0904 0.455082C55.7154 0.735846 56.2439 1.16912 56.6187 1.70782C56.9935 2.24652 57.2001 2.87005 57.2162 3.51066Z"
                    fill="#FDC300" />
            </svg>
        </a>
    </div>
    <div class="flex flex-col rounded-xl bg-[#FFFFFF] mt-2 w-full md:w-8/12 md:mt-6 md:mx-auto">
        <h1 class="text-[30px] md:text-[32px] text-[#0E435B] text-center mt-2 md:mt-4 font-bold">
            Formulir Berita
        </h1>
        <!--form-->
        <form action="{{ route('news.update', $item->id) }}" method="POST" enctype="multipart/form-data"
            class="mt-10 md:mt-14 flex flex-col gap-y-2 md:h-auto md:w-10/12 mx-auto">
            @csrf
            @method('PUT')
            <!-- Include this line for CSRF protection in Laravel -->
            <label for="title" class="text-[#0E435B] text-[15px] md:text-[32px] font-bold">Judul Berita:</label>
            <input type="text" name="title"
                class="w-full h-[54px] md:h-[61px] border-2 outline-none border-[#A08D8D] placeholder:pl-3 md:text-[32px] focus:placeholder:text-transparent md:placeholder:text-[32px] rounded-[12px]"
                placeholder="Masukkan Judul Berita" value="{{ $item->title }}" />

            <label for="image" class="text-[#0E435B] text-[15px] md:text-[32px] font-bold">Foto Berita:</label>
            <div>
                <!-- Input untuk file, tidak memerlukan atribut value -->
                <input type="file" name="image" id="image"
                    class="w-full h-[54px] md:h-[61px] border-2 outline-none border-[#A08D8D] placeholder:pl-3 md:text-[32px] focus:placeholder:text-transparent md:placeholder:text-[32px] rounded-[12px]"
                    accept="image/*" />

                <!-- Jika ada gambar yang sudah diupload sebelumnya, tampilkan di sini -->
                @if ($item && $item->image)
                    <div class="mt-4">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="Image Preview"
                            class="w-full h-auto rounded-[12px]">
                    </div>
                @endif
            </div>

            <label for="description" class="text-[#0E435B] text-[15px] md:text-[32px] font-bold">Deskripsi
                Berita:</label>
            <textarea name="description" id="description" placeholder="Masukkan Deskripsi Berita"
                class="w-full h-[64px] md:h-[120px] border-2 outline-none border-[#A08D8D] placeholder:pl-3 md:text-[32px] focus:placeholder:text-transparent md:placeholder:text-[32px] rounded-[12px]">{{ old('description', $item->description ?? '') }}</textarea>

            <button type="submit"
                class="mt-6 mb-2 md:mt-14 md:mb-6 place-self-end bg-[#FDC300] w-[90px] h-[40px] md:w-[246px] md:h-[53px] text-white rounded-xl xl:text-[28px]">Kirim</button>
        </form>

        <!-- Modal -->
        <div id="success-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg">
                <h2 class="text-2xl font-bold mb-4">Sukses</h2>
                <p id="success-message" class="mb-4"></p>
                <button id="close-modal" class="bg-blue-500 text-white px-4 py-2 rounded">Close</button>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mengecek jika ada sesi sukses
            @if (session('success'))
                // Mengatur pesan sukses dan menampilkan modal
                document.getElementById('success-message').innerText = "{{ session('success') }}";
                document.getElementById('success-modal').classList.remove('hidden');
            @endif

            // Menutup modal saat tombol close diklik
            document.getElementById('close-modal').addEventListener('click', function() {
                document.getElementById('success-modal').classList.add('hidden');
            });
        });
    </script>

</body>

</html>
