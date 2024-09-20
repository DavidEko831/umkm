<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Maitree:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <title>BERITA</title>
</head>

<body>
    <header class="flex flex-col md:mt-3 md:flex-row lg:justify-center">
        <a href="/homeadmin" class="my-2 ml-4 sm:my-2 md:my-0 lg:ml-12">
            <svg width="59" height="71" viewBox="0 0 59 71" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="h-[20px] w-[20px] md:h-[156px] md:w-[70px]">
                <path
                    d="M57.2162 3.51066L58.9062 66.6637C58.9211 67.3032 58.7462 67.935 58.4001 68.4913C58.0541 69.0476 57.55 69.5072 56.9423 69.8207C56.3346 70.1342 55.6461 70.2897 54.9511 70.2704C54.256 70.2511 53.5807 70.0579 52.9978 69.7114L2.55844 39.4621C0.467161 38.2084 0.382846 35.0578 2.40399 33.6906L51.1533 0.786855C51.7156 0.406048 52.3798 0.173781 53.0739 0.115289C53.7681 0.0567973 54.4655 0.174318 55.0904 0.455082C55.7154 0.735846 56.2439 1.16912 56.6187 1.70782C56.9935 2.24652 57.2001 2.87005 57.2162 3.51066Z"
                    fill="#FDC300" />
            </svg>
        </a>

        {{ dd($news) }}
        <div class="flex items-center justify-center">
            <div class="mx-auto flex w-screen flex-col border-t-[7px] border-[#FF8A80] md:w-[80vw] md:border-t-[11px]">
                <div class="grid grid-cols-2">
                    <!--kiri-->
                    <div class="h-[39px] border-r-[7px] border-[#FF8A80] md:h-[132px] md:border-r-[11px]">
                        <h1
                            class="flex h-full items-center justify-center text-center text-[16px] font-bold md:text-[34px] lg:text-[42px] xl:text-[52px]">
                            <p>
                                <span class="font-['Maitree'] text-[#502C57]">BERITA </span>
                                <span class="font-['Maitree'] text-[#016997]">UMKM</span>
                            </p>
                        </h1>
                    </div>
                </div>

                <div class="flex flex-row">
                    <div class="flex h-[21px] w-[76vw] items-center bg-[#FDC300] md:h-[40px]">
                        <p class="ml-[20px] text-[8px] font-bold text-[#016997] md:text-[16px]">
                            DESA SEMAMBUNG, WONOAYU, SIDOARJO
                        </p>
                    </div>

                    <div class="mb-[32px] h-[21px] flex-1 bg-[#76C6F8] md:h-[40px]"></div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="relative mx-auto mb-[54px] flex flex-col md:w-[90vw] md:flex-row xl:w-[80vw]">
            <div class="h-[330px] w-full bg-[url('/gambar/BeritaUMKM1.jpg')] bg-cover bg-center">
                <div class="absolute left-0 top-0 z-10 h-full w-full bg-[#016997] opacity-60"></div>
                <div
                    class="absolute left-0 z-20 flex h-[330px] w-full transform flex-col justify-center text-center font-bold text-white md:left-0 md:ml-[32px] md:w-[40vw] md:translate-x-0 md:justify-center md:text-start">
                    <h1 class="text-[48px]">LAPORAN UMKM</h1>
                    <p class="mx-[25px] text-[24px] md:mx-0 lg:text-[28px]">
                        Lebih dari 30 UMKM ada di Desa Semambung telah tersertifikasi
                        halal MUI.
                    </p>
                </div>
            </div>
            <div class="h-[330px] w-full bg-[url('/gambar/BeritaUMKM2.jpg')] bg-cover bg-center"></div>
        </div>

        <hr class="w-creen mx-auto mb-[42px] border-b-8 border-[#FDC300] md:w-[80vw]" />

        <div class="md:mx-[56px] md:flex md:items-center md:justify-center md:gap-x-[16px]">
            <div class="md:w-[50%]">
                <div class="flex flex-col gap-y-[42px]">
                    <div class="mx-[32px] flex flex-col items-center md:w-[40vw]">
                        <div class="flex flex-row items-center md:flex-col">
                            <div
                                class="relative flex h-32 w-[40vw] justify-center bg-[#76C6F8] md:w-[20vw] xl:h-[34vh]">
                                <div
                                    class="absolute left-0 top-0 flex h-[32px] w-[72px] translate-x-[-24px] translate-y-[-12px] items-center justify-center rounded-[60px] bg-[#FDC300]">
                                    <h1 class="font-[20px] font-bold text-white">NEW</h1>
                                </div>
                                <img src="/gambar/balai.jpg" alt=""
                                    class="h-[14vh] w-[26vw] self-center md:w-[16vw] xl:h-[24vh]" />
                            </div>
                            <div class="ml-[4vw] flex-1 md:ml-0">
                                <h1 class="text-[16px] font-bold text-[#016997]">
                                    Kaos Combed 30s sekarang punya desain baru
                                </h1>
                            </div>
                        </div>
                        <div class="mt-[18px] md:mx-0 md:mt-[4px]">
                            <p class="indent-1 text-[10px]">
                                Tak kalah kecenya. Sekarang, Kaos Combed 30s punya desain baru
                                dengan nuansa gaya anak muda. Tak dapat dipungkiri, desain
                                terbaru mampu bersain di dunia fashion. Hal ini membuat banyak
                                anak muda mulai up to date agar tidak fomo.
                                <a href="" class="text-[#016997]">Berikutnya...</a>
                            </p>
                        </div>
                    </div>

                    <div class="mx-[32px] flex flex-col items-center md:w-[40vw]">
                        <div class="flex flex-row items-center md:flex-col">
                            <div
                                class="relative flex h-32 w-[40vw] justify-center bg-[#76C6F8] md:w-[20vw] xl:h-[34vh]">
                                <div
                                    class="absolute left-0 top-0 flex h-[32px] w-[72px] translate-x-[-24px] translate-y-[-12px] items-center justify-center rounded-[60px] bg-[#FDC300]">
                                    <h1 class="font-[20px] font-bold text-white">NEW</h1>
                                </div>
                                <img src="/gambar/balai.jpg" alt=""
                                    class="h-[14vh] w-[26vw] self-center md:w-[16vw] xl:h-[24vh]" />
                            </div>
                            <div class="ml-[4vw] flex-1 md:ml-0">
                                <h1 class="text-[16px] font-bold text-[#016997]">
                                    Kaos Combed 30s sekarang punya desain baru
                                </h1>
                            </div>
                        </div>
                        <div class="mt-[18px] md:mx-0 md:mt-[4px]">
                            <p class="indent-1 text-[10px]">
                                Tak kalah kecenya. Sekarang, Kaos Combed 30s punya desain baru
                                dengan nuansa gaya anak muda. Tak dapat dipungkiri, desain
                                terbaru mampu bersain di dunia fashion. Hal ini membuat banyak
                                anak muda mulai up to date agar tidak fomo.
                                <a href="" class="text-[#016997]">Berikutnya...</a>
                            </p>
                        </div>
                    </div>

                    <div class="mx-[32px] flex flex-col items-center md:w-[40vw]">
                        <div class="flex flex-row items-center md:flex-col">
                            <div
                                class="relative flex h-32 w-[40vw] justify-center bg-[#76C6F8] md:w-[20vw] xl:h-[34vh]">
                                <div
                                    class="absolute left-0 top-0 flex h-[32px] w-[72px] translate-x-[-24px] translate-y-[-12px] items-center justify-center rounded-[60px] bg-[#FDC300]">
                                    <h1 class="font-[20px] font-bold text-white">NEW</h1>
                                </div>
                                <img src="/gambar/balai.jpg" alt=""
                                    class="h-[14vh] w-[26vw] self-center md:w-[16vw] xl:h-[24vh]" />
                            </div>
                            <div class="ml-[4vw] flex-1 md:ml-0">
                                <h1 class="text-[16px] font-bold text-[#016997]">
                                    Kaos Combed 30s sekarang punya desain baru
                                </h1>
                            </div>
                        </div>
                        <div class="mt-[18px] md:mx-0 md:mt-[4px]">
                            <p class="indent-1 text-[10px]">
                                Tak kalah kecenya. Sekarang, Kaos Combed 30s punya desain baru
                                dengan nuansa gaya anak muda. Tak dapat dipungkiri, desain
                                terbaru mampu bersain di dunia fashion. Hal ini membuat banyak
                                anak muda mulai up to date agar tidak fomo.
                                <a href="" class="text-[#016997]">Berikutnya...</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:mx-[22px] md:w-[50%]">
                <div
                    class="mx-[20px] mt-[100px] flex flex-col items-center justify-center md:mx-auto md:mt-0 md:bg-[#382E391A] md:py-[20px]">
                    <div
                        class="relative flex h-[30vh] w-[60vw] justify-center bg-[#76C6F8] md:h-[28vh] md:w-[24vw] xl:h-[36vh]">
                        <img src="/gambar/balai.jpg" alt=""
                            class="h-[20vh] w-[40vw] self-center md:h-[22vh] md:w-[20vw] xl:h-[28vh]" />
                    </div>
                    <h1 class="mb-[32px] mt-[14px] text-[18px] font-bold text-[#016997]">
                        Logo baru KURMA
                    </h1>
                    <div class="flex flex-col gap-y-[12px] text-[10px] md:mx-[20px]">
                        <p class="indent-1">
                            Desa Semambung - KURMA atau yang biasa disebut Kelompok Usaha
                            Perempuan Mandiri ini telah mendapat logo baru untuk usahanya
                            ini. Logo ini sendiri dibuat oleh salah satu anggota KKN Desa
                            Tematik Narotama yang sedang melaksanakan KKN di Desa Semambung.
                        </p>
                        <p class="indent-1">
                            Logo yang telah dibuat ini ternyata ada filosofinya sendiri dari
                            logo tersebut. “Ya, ada filosofinya”, kata Arya, Anggota KKN
                            Desa Tematik Narotama, Desa Semambung, Sidoarjo, Senin
                            (22/7/2024).
                        </p>
                        <p class="indent-1">
                            Dimulai dari bunga dalam vas, memiliki arti keseimbangan dan
                            keharomonisan. Bunga yang berada dalam vas dapat menggambarkan
                            keseimbangan dan keharmonisan antara manusia dan alam, atau
                            antara elemen yang berbeda. Warna hijau yang lembut dapat
                            menunjukkan harmoni dan keselarasan.
                        </p>
                        <p class="indent-1">
                            Yang kedua ada warna hijau. Memiliki arti kehidupan dan
                            pertumbuhan. Hijau sering kali dikaitkan dengan alam dan
                            kehidupan. Logo ini bisa mewakili pertumbuhan, perkembangan, dan
                            kehidupan yang terus berkembang seperti bunga yang tumbuh di
                            dalam vas.
                        </p>
                        <p class="indent-1">
                            “Secara keseluruhan, logo ini dapat diartikan sebagai simbol
                            keharmonisan antara manusia dan alam dengan keselarasan yang
                            dimiliki oleh warna hijau. Namun, tidak dapat dipungkiri bahwa
                            kreativitas dan keindahan mengikuti makna dari logo ini”,
                            sambungnya.
                        </p>
                        <p>(ren)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-[36px] flex flex-col items-center justify-center">
            <div
                class="relative mb-[14px] flex h-[180px] w-10/12 justify-center bg-[url('/gambar/bannerBeritaUMKM.jpg')] bg-cover bg-center">
                <div class="mb-28px absolute bottom-[18px] h-[100px] w-10/12 bg-[#FDC300]">
                    <h1
                        class="flex h-[100px] items-center justify-center text-center text-[16px] text-white md:text-[24px]">
                        UMKM di Desa Semambung telah memanfaatkan teknologi, guna kemajuan
                        bisnis.
                    </h1>
                </div>
                <div
                    class="absolute left-0 top-0 flex h-[28px] w-[132px] translate-x-[-24px] translate-y-[-12px] items-center justify-center rounded-[60px] bg-[#FDC300] md:h-[36px] md:w-[240px]">
                    <h1 class="font-[20px] font-bold text-white">TEKNOLOGI</h1>
                </div>
            </div>

            <div class="my-[24px]">
                <div class="flex flex-col items-center justify-center gap-y-[42px] md:flex-row md:flex-wrap">
                    <div class="mx-[32px] flex flex-col items-center p-[12px] md:w-[40vw] md:bg-[#382E391A]">
                        <div class="flex flex-col items-center md:flex-row">
                            <div
                                class="relative flex h-32 w-[40vw] justify-center bg-[#76C6F8] md:w-[20vw] xl:h-[28vh]">
                                <img src="/gambar/balai.jpg" alt=""
                                    class="h-[14vh] w-[26vw] self-center md:w-[16vw] xl:h-[22vh]" />
                            </div>
                            <div class="order-last ml-4 flex flex-1 flex-col md:order-first md:ml-0 md:mr-2">
                                <h1 class="text-[14px] font-bold text-[#016997]">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Quas
                                </h1>
                                <p class="text-[10px]">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    <a href="" class="text-[#016997]">Berikutnya...</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mx-[32px] flex flex-col items-center p-[12px] md:w-[40vw] md:bg-[#382E391A]">
                        <div class="flex flex-col items-center md:flex-row">
                            <div
                                class="relative flex h-32 w-[40vw] justify-center bg-[#76C6F8] md:w-[20vw] xl:h-[28vh]">
                                <img src="/gambar/balai.jpg" alt=""
                                    class="h-[14vh] w-[26vw] self-center md:w-[16vw] xl:h-[22vh]" />
                            </div>
                            <div class="order-last ml-4 flex flex-1 flex-col md:order-first md:ml-0 md:mr-2">
                                <h1 class="text-[14px] font-bold text-[#016997]">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Quas
                                </h1>
                                <p class="text-[10px]">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    <a href="" class="text-[#016997]">Berikutnya...</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mx-[32px] flex flex-col items-center p-[12px] md:w-[40vw] md:bg-[#382E391A]">
                        <div class="flex flex-col items-center md:flex-row">
                            <div
                                class="relative flex h-32 w-[40vw] justify-center bg-[#76C6F8] md:w-[20vw] xl:h-[28vh]">
                                <img src="/gambar/balai.jpg" alt=""
                                    class="h-[14vh] w-[26vw] self-center md:w-[16vw] xl:h-[22vh]" />
                            </div>
                            <div class="order-last ml-4 flex flex-1 flex-col md:order-first md:ml-0 md:mr-2">
                                <h1 class="text-[14px] font-bold text-[#016997]">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Quas
                                </h1>
                                <p class="text-[10px]">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    <a href="" class="text-[#016997]">Berikutnya...</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="w-creen mx-auto mb-[42px] mt-[22px] border-b-8 border-[#FDC300] md:w-[80vw]" />

        <div class="mx-[6vw] mt-[12px] flex flex-col items-center justify-center gap-y-[42px] md:items-start">
            <div class="mx-[32px] flex flex-col items-center md:w-[70vw]">
                <div class="flex flex-col items-center md:flex-row">
                    <div
                        class="relative flex h-32 w-[40vw] justify-center bg-[#76C6F8] md:mx-4 md:w-[20vw] xl:h-[32vh]">
                        <img src="/gambar/balai.jpg" alt=""
                            class="h-[14vh] w-[26vw] self-center md:w-[16vw] xl:h-[24vh]" />
                    </div>
                    <div class="ml-[4vw] flex-1 md:ml-0">
                        <h1 class="text-[16px] font-bold text-[#016997]">
                            Kaos Combed 30s sekarang punya desain baru
                        </h1>
                        <div class="">
                            <p class="indent-1 text-[10px]">
                                Tak kalah kecenya. Sekarang, Kaos Combed 30s punya desain baru
                                dengan nuansa gaya anak muda. Tak dapat dipungkiri, desain
                                terbaru mampu bersain di dunia fashion. Hal ini membuat banyak
                                anak muda mulai up to date agar tidak fomo.
                                <a href="" class="text-[#016997]">Berikutnya...</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-[32px] flex flex-col items-center md:w-[70vw]">
                <div class="flex flex-col items-center md:flex-row">
                    <div
                        class="relative flex h-32 w-[40vw] justify-center bg-[#76C6F8] md:mx-4 md:w-[20vw] xl:h-[32vh]">
                        <img src="/gambar/balai.jpg" alt=""
                            class="h-[14vh] w-[26vw] self-center md:w-[16vw] xl:h-[24vh]" />
                    </div>
                    <div class="ml-[4vw] flex-1 md:ml-0">
                        <h1 class="text-[16px] font-bold text-[#016997]">
                            Kaos Combed 30s sekarang punya desain baru
                        </h1>
                        <div class="">
                            <p class="indent-1 text-[10px]">
                                Tak kalah kecenya. Sekarang, Kaos Combed 30s punya desain baru
                                dengan nuansa gaya anak muda. Tak dapat dipungkiri, desain
                                terbaru mampu bersain di dunia fashion. Hal ini membuat banyak
                                anak muda mulai up to date agar tidak fomo.
                                <a href="" class="text-[#016997]">Berikutnya...</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-[32px] mb-[120px] flex flex-col items-center md:w-[70vw]">
                <div class="flex flex-col items-center md:flex-row">
                    <div
                        class="relative flex h-32 w-[40vw] justify-center bg-[#76C6F8] md:mx-4 md:w-[20vw] xl:h-[32vh]">
                        <img src="/gambar/balai.jpg" alt=""
                            class="h-[14vh] w-[26vw] self-center md:w-[16vw] xl:h-[24vh]" />
                    </div>
                    <div class="ml-[4vw] flex-1 md:ml-0">
                        <h1 class="text-[16px] font-bold text-[#016997]">
                            Kaos Combed 30s sekarang punya desain baru
                        </h1>
                        <div class="">
                            <p class="indent-1 text-[10px]">
                                Tak kalah kecenya. Sekarang, Kaos Combed 30s punya desain baru
                                dengan nuansa gaya anak muda. Tak dapat dipungkiri, desain
                                terbaru mampu bersain di dunia fashion. Hal ini membuat banyak
                                anak muda mulai up to date agar tidak fomo.
                                <a href="" class="text-[#016997]">Berikutnya...</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <a href="/homeadmin/makananadmin" class="text-[10px] md:text-[24px]">Makanan</a>
                <a href="/homeadmin/minumanadmin" class="text-[10px] md:text-[24px]">Minuman</a>
                <a href="/homeadmin/konveksiadmin" class="text-[10px] md:text-[24px]">Konveksi</a>
                <a href="/homeadmin/tentangKamiadmin"
                    class="text-[10px] self-center md:text-[25px] font-bold flex"><img src="" alt=""
                        class="w-[11px] h-[10px] md:h-[25px] md:w-[25px]" />
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
