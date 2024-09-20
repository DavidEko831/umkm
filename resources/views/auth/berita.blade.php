<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BERITA DETAIL</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
        crossorigin="anonymous" />
</head>

<body>
    <header class="h-[70px] md:h-[147px] flex flex-col md:justify-center">
        <a href="./beranda.html" class="pt-2">
            <svg width="59" height="71" viewBox="0 0 59 71" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="w-[26px] h-[21px] md:w-[70px] md:h-[57px]">
                <path
                    d="M57.2162 3.51066L58.9062 66.6637C58.9211 67.3032 58.7462 67.935 58.4001 68.4913C58.0541 69.0476 57.55 69.5072 56.9423 69.8207C56.3346 70.1342 55.6461 70.2897 54.9511 70.2704C54.256 70.2511 53.5807 70.0579 52.9978 69.7114L2.55844 39.4621C0.467161 38.2084 0.382846 35.0578 2.40399 33.6906L51.1533 0.786855C51.7156 0.406048 52.3798 0.173781 53.0739 0.115289C53.7681 0.0567973 54.4655 0.174318 55.0904 0.455082C55.7154 0.735846 56.2439 1.16912 56.6187 1.70782C56.9935 2.24652 57.2001 2.87005 57.2162 3.51066Z"
                    fill="#FDC300" />
            </svg>
        </a>
        <h1
            class="text-[#016997] font-bold text-[20px] md:text-[50px] pt-0.5 md:pt-4 mx-4 md:mx-0 mb-4 md:mb-6 text-center">
            {{ $item->title }}
        </h1>
    </header>

    <main>
        <!--Semambung adalah sebuah desa-->

        <!--Letak desa-->
        <section class="flex flex-col md:flex-row items-start mt-4 md:mt-6 px-4 md:px-10">
            <!-- Gambar -->
            <div
                class="w-[230px] h-[207px] md:w-[432px] md:h-[432px] flex justify-center items-center bg-[#76C6F8] mx-auto">
                <img src="{{ asset('storage/' . $item->image) }}" alt="Deskripsi Gambar"
                    class="max-w-full max-h-full md:w-[317px] md:h-[321px] p-3 object-contain" />
            </div>

            <!-- Teks -->
            <div class="flex-1 px-4">
                <p class="text-[12px] md:text-[25px] pr-1 md:pr-3 indent-1">
                    {{ $item->description }}
                </p>
            </div>
        </section>

        <section class="mt-6 md:mt-10">
            <div class="flex items-center justify-center">
                <p
                    class="text-[12px] md:text-[25px] text-center text-[#C26861] mx-auto break-words max-w-[90%] indent-2 md:indent-10">
                </p>
            </div>
        </section>
    </main>

    <section class="relative">
        <a href="https://wa.me/yourphonenumber" class="bg-[#25D366] p-3 rounded-full fixed bottom-4 left-4 z-30">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-[72px] md:h-[77px] text-white"
                fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M20.52 3.48C18.37 1.34 15.51.25 12.46.25c-6.02 0-10.93 4.91-10.93 10.93 0 1.92.49 3.81 1.42 5.47L1.25 22.75l6.39-1.66c1.59.87 3.39 1.32 5.3 1.32 6.02 0 10.93-4.91 10.93-10.93 0-3.05-1.09-5.91-3.35-8.17zM12.46 20.6c-1.64 0-3.24-.43-4.65-1.24l-.33-.19-3.78.98 1.01-3.7-.22-.34C3.36 15.02 2.89 13.77 2.89 12.46c0-5.27 4.3-9.56 9.56-9.56 2.56 0 4.96 1 6.77 2.82 1.81 1.81 2.82 4.22 2.82 6.77 0 5.27-4.29 9.56-9.58 9.56zm5.42-7.82c-.28-.14-1.66-.82-1.92-.92-.26-.1-.45-.14-.64.14-.19.28-.74.92-.92 1.11-.17.19-.34.22-.62.07-.28-.14-1.18-.44-2.26-1.4-.83-.74-1.39-1.66-1.56-1.94-.17-.28-.02-.42.12-.56.12-.12.28-.34.42-.51.14-.19.19-.28.28-.47.09-.19.05-.36-.02-.5-.07-.14-.62-1.48-.85-2.02-.22-.53-.44-.45-.64-.45-.16 0-.35 0-.54 0-.19 0-.5.07-.77.35-.26.28-1 1-1 2.45s1.02 2.84 1.16 3.04c.14.19 2 3.06 4.85 4.29.68.29 1.21.46 1.63.6.68.22 1.3.19 1.78.12.54-.07 1.66-.68 1.9-1.34.24-.66.24-1.24.17-1.34-.07-.1-.26-.19-.54-.33z" />
            </svg>
        </a>
    </section>

    <footer class="bg-[#3BAFAB] py-4 mt-10 md:mt-60">
        <div class="grid grid-cols-2 h-full border-b-2 border-t-2">
            <div class="flex flex-col text-white h-full border-r-2 px-4">
                <h3 class="text-[10px] md:text-[25px] text-center mt-5">
                    Terhubung Dengan Kami
                </h3>
                <p class="text-[9px] md:text-[24px] break-words mt-4">
                    JL. RAYA SEMAMBUNG NO. 296 SEMAMBUNG LOR, SEMAMBUNG KEC. WONOAYU
                    KAB. SIDOARJO, JAWA TIMUR, 61261.
                </p>
                <ol class="list-none mt-4">
                    <li class="flex items-center">
                        <a href="https://www.instagram.com/desa.semambung.wny?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            class="flex items-center text-[9px] md:text-[24px]">
                            <img src="/gambar/ig.png" alt=""
                                class="w-[19px] h-[19px] mr-2 md:h-[50px] md:w-[50px]" />
                            <span>desa.semambung.wny</span>
                        </a>
                    </li>
                    <li class="flex items-center">
                        <a href="https://youtube.com/@seputardesasemambung?si=0Kvjl9JbqKjq79q-"
                            class="flex items-center text-[9px] md:text-[24px]">
                            <img src="/gambar/yt.png" alt=""
                                class="w-[19px] h-[19px] mr-2 md:h-[50px] md:w-[50px]" />
                            <span>seputar desa semambung</span>
                        </a>
                    </li>
                </ol>
                <a href="http://semambung-wonoayu.desa.id/" class="text-[8px] self-start pt-2 md:text-[24px]">
                    http://semambung-wonoayu.desa.id/
                </a>
            </div>

            <div class="flex flex-col gap-y-5 text-center text-white h-full px-4">
                <h3 class="text-[10px] mt-5 font-bold md:text-[25px]">Produk Kami</h3>
                <a href="./makanan.html" class="text-[10px] md:text-[24px]">Makanan</a>
                <a href="./minuman.html" class="text-[10px] md:text-[24px]">Minuman</a>
                <a href="./konveksi.html" class="text-[10px] md:text-[24px]">Konveksi</a>
                <a href="./tentangKami.html" class="text-[10px] self-center md:text-[25px] font-bold flex"><img
                        src="" alt="" class="w-[11px] h-[10px] md:h-[25px] md:w-[25px]" />
                    <span>TENTANG KAMI</span>
                </a>
            </div>
        </div>

        <div class="flex justify-center mt-2 md:mt-3">
            <p class="text-white text-[11px] md:text-[25px]">@kkn1unnar2024</p>
        </div>
    </footer>
</body>

</html>
