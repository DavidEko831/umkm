<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BERANDA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Italianno&display=swap"
      rel="stylesheet"
    />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"
      defer
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js"
      crossorigin="anonymous"
      defer
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css"
      rel="stylesheet"
      crossorigin="anonymous"
    />
  </head>
  <body class="w-full h-full">
    <header class="bg-[#FDC300] h-14 md:h-36 flex items-center justify-center">
      <h1
        class="text-center place-self-center text-xl md:text-[60px] text-white"
        style="font-family: 'Italianno', cursive"
      >
        mulai UMKM mu dengan kami
      </h1>
    </header>

    <nav class="bg-[#3BAFAB] h-auto relative" x-data="{ isOpen: false }">
      <div class="relative px-4 mx-auto">
        <!-- Logo and Masuk div -->
        <div class="relative flex items-center h-16 md:h-40">
          <!-- Mobile menu button -->
          <div class="z-50 flex md:hidden">
            <button
              type="button"
              @click="isOpen = !isOpen"
              class="relative z-50 inline-flex items-center justify-center p-2 text-white bg-transparent rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
            >
              <span class="sr-only">Open main menu</span>
              <svg
                :class="{'hidden': isOpen, 'block': !isOpen }"
                class="block w-6 h-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                  stroke="currentColor"
                />
              </svg>
              <svg
                :class="{'block': isOpen, 'hidden': !isOpen }"
                class="hidden w-6 h-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M6 18L18 6M6 6l12 12"
                  stroke="currentColor"
                />
              </svg>
            </button>
          </div>
          <!-- Image in the center -->
          <div class="absolute inset-0 flex items-center justify-center">
            <img
              src="gambar/desa semambung.png"
              alt=""
              class="h-14 w-14 md:h-28 md:w-24"
            />
          </div>
          <!-- "Masuk" link with fixed position -->
          <div class="absolute hidden mr-12 md:block right-80">
            <a href="/login" class="font-bold text-white">MASUK</a>
          </div>
        </div>

        <!-- Navigation links -->
        <div class="flex items-center justify-center flex-grow">
          <div class="hidden mb-2 md:block">
            <div class="flex items-baseline justify-center space-x-32">
              <a href="/beranda" class="font-bold text-white"
                ><img src="" alt="" />BERANDA</a
              >
              <a href="/beritaUtama" class="font-bold text-white"
                ><img src="" alt="" />BERITA</a
              >
              <a href="/makanan" class="font-bold text-white"
                ><img src="" alt="" />UMKM</a
              >
              <a href="/tentangKami" class="font-bold text-white"
                ><img src="" alt="" />TENTANG KAMI</a
              >
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile menu -->
      <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
          <a
            href="/login"
            class="block px-3 py-2 text-base font-medium font-bold text-gray-300 rounded-md hover:bg-gray-700"
            >MASUK</a
          >
          <a
            href="/beranda"
            class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700"
            ><img src="" alt="" />BERANDA</a
          >
          <a
            href="/beritaUtama"
            class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700"
            ><img src="" alt="" />BERITA</a
          >
          <a
            href="/makanan"
            class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700"
            ><img src="" alt="" />UMKM</a
          >
          <a
            href="/tentangKami"
            class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700"
            ><img src="" alt="" />TENTANG KAMI</a
          >
        </div>
      </div>
    </nav>

    <!--content-->
    <main>
      <!--UMKM DESA-->
      <section
        class="bg-[url('/gambar/umkm.webp')] bg-cover bg-center h-[663px] relative"
      >
        <div
          class="bg-[#502C57] w-full h-full absolute top-0 left-0 z-10 opacity-60"
        ></div>
        <!--mobile-->
        <div
          class="absolute z-20 flex flex-col items-center w-full mt-6 transform -translate-x-1/2 left-1/2 md:hidden"
        >
          <img
            src="/gambar/paperbag.jpeg"
            alt=""
            class="w-[269px] h-[236px] mb-4"
          />
          <h3 class="text-white text-center font-bold text-[24px] mb-2">
            UMKM<br />DESA SEMAMBUNG<br />WONOAYU
          </h3>
          <hr class="border-b-8 border-[#FDC300] w-full md:hidden" />
          <h4
            class="text-white text-center text-[16px] font-bold mt-2 break-words"
          >
            UMKM di Desa Semambung <br />
            tak kalah majunya. Terdapat lebih <br />
            dari 40 lebih UMKM yang telah <br />
            berjalan di Desa Semambung, <br />
            Wonoayu, Sidoarjo.
          </h4>
        </div>

        <!--dekstop-->
        <div
          class="absolute inset-0 z-20 hidden grid-cols-2 md:grid place-items-center"
        >
          <div class="flex justify-center">
            <img
              src="/gambar/paperbag.jpeg"
              alt=""
              class="w-[469px] h-[411px]"
            />
          </div>
          <div class="text-center">
            <h3 class="text-white font-bold text-[50px] mb-2">
              UMKM<br />DESA SEMAMBUNG WONOAYU
            </h3>
            <hr class="border-b-8 border-[#FDC300] mb-2 w-11/12" />
            <h4 class="text-white text-[25px] font-bold break-words w-11/12">
              UMKM di Desa Semambung tak kalah majunya. Terdapat lebih dari 40
              lebih UMKM yang telah berjalan di Desa Semambung, Wonoayu,
              Sidoarjo.
            </h4>
          </div>
        </div>
      </section>

      <!--SEPERTI APA ITU-->
      <section class="w-full mt-4 text-center">
        <h3 class="font-bold text-[#016997] text-[24px]">
          Seperti apakah itu?
        </h3>

        <div
          class="flex flex-col items-center justify-center mx-auto mt-4 md:flex-row gap-y-5 md:gap-x-5"
        >
          <div
            class="w-[230px] h-[207px] md:w-[432px] md:h-[432px] flex flex-col justify-center bg-[#76C6F8] gap-y-6"
          >
            <img
              src="/gambar/balai.jpg"
              alt=""
              class="w-[161px] h-[114px] md:w-[317px] md:h-[321px] pt-2 self-center"
            />
            <h2
              href="#"
              class="bg-[#FDC300] text-[14px] w-[161px] h-[38px] md:w-[311px] md:h-[69px] md:text-[25px] self-center text-white rounded-xl text-center flex items-center justify-center"
              >FOTO PRODUK</h2
            >
          </div>

          <div
            class="w-[230px] h-[207px] md:w-[432px] md:h-[432px] flex flex-col justify-center bg-[#76C6F8] gap-y-6"
          >
            <img
              src="/gambar/balai.jpg"
              alt=""
              class="w-[161px] h-[114px] md:w-[317px] md:h-[321px] pt-2 self-center"
            />
            <h2
              href="#"
              class="bg-[#FDC300] text-[14px] w-[161px] h-[38px] md:w-[311px] md:h-[69px] md:text-[25px] self-center text-white rounded-xl text-center flex items-center justify-center"
              >TENTUKAN HARGA</h2
            >
          </div>

          <div
            class="w-[230px] h-[207px] md:w-[432px] md:h-[432px] flex flex-col justify-center bg-[#76C6F8] gap-y-6"
          >
            <img
              src="/gambar/balai.jpg"
              alt=""
              class="w-[161px] h-[114px] md:w-[317px] md:h-[321px] pt-2 self-center"
            />
            <h2
              href="#"
              class="bg-[#FDC300] text-[14px] w-[161px] h-[38px] md:w-[311px] md:h-[69px] md:text-[25px] self-center text-white rounded-xl text-center flex items-center justify-center"
              >KONEKSI DUNIA LUAR</h2
            >
          </div>
        </div>
      </section>

      <!--DESA SEMAMBUNG-->
      <section
        class="bg-[url('/gambar/1.jpg')] bg-cover bg-center h-[663px] relative mt-4"
      >
        <div
          class="bg-[#744440] w-full h-full absolute top-0 left-0 z-10 opacity-60"
        ></div>
        <!--mobile-->
        <div
          class="absolute z-20 flex flex-col items-center w-full mt-6 transform -translate-x-1/2 left-1/2 md:hidden"
        >
          <img src="/gambar/1.jpg" alt="" class="w-[269px] h-[236px] mb-4" />
          <h3 class="text-white text-center font-bold text-[20px] mb-2 mt-8">
            DESA SEMAMBUNG WONOAYU
          </h3>
          <hr class="w-[282px] border-b-8 border-[#FDC300] w-full md:hidden" />
          <h4
            class="text-white text-center text-[12px] font-bold mt-12 break-words"
          >
            Semambung adalah sebuah desa di wilayah <br />
            Kecamatan Wonoayu, Kabupaten Sidoarjo, <br />
            Provinsi Jawa Timur. <br />
            Desa ini terdiri atas 2 <br />
            RW Dan 10 RT. Pusat pemerintahan <br />
            desa ini berada di Balai Desa Semambung yang <br />
            terletak Di Jalan Raya Semambung <br />
            (Krian-sidoarjo). <br />
          </h4>
          <a
            href="/desa"
            class="bg-[#FDC300] text-[14px] w-[161px] h-[38px] md:w-[311px] md:h-[69px] md:text-[25px] text-white rounded-xl text-center flex items-center justify-center mt-12"
            >BERIKUTNYA</a
          >
        </div>

        <!--dekstop-->
        <div
          class="absolute inset-0 z-20 hidden grid-cols-2 md:grid place-items-center"
        >
          <div class="text-center">
            <h3 class="text-white font-bold text-[40px] mb-2">
              DESA SEMAMBUNG,WONOAYU
            </h3>
            <hr class="border-b-8 border-[#FDC300] mb-2 w-11/12 mx-auto" />
            <p class="text-white text-[25px] font-bold break-words pl-2">
              Semambung adalah sebuah desa di wilayah Kecamatan Wonoayu,
              Kabupaten Sidoarjo, Provinsi Jawa Timur. Desa ini terdiri atas 2
              RW Dan 10 RT. Pusat pemerintahan desa ini berada di Balai Desa
              Semambung yang terletak Di Jalan Raya Semambung (Krian-sidoarjo).
            </p>
            <a
              href="/desa"
              class="bg-[#FDC300] text-[14px] w-[161px] h-[38px] md:w-[311px] md:h-[69px] md:text-[25px] md:mx-auto text-white rounded-2xl text-center flex items-center justify-center font-bold mt-12"
              >BERIKUTNYA</a
            >
          </div>
          <div class="flex justify-center">
            <img src="/gambar/1.jpg" alt="" class="w-[429px] h-[379px]" />
          </div>
        </div>
      </section>

      <!-- Multicard -->
      <section class="mt-4">
        <div class="flex justify-center gap-x-[6vw] items-center mt-4 mx-4">
          <div
            class="w-[230px] h-[207px] md:w-[411px] md:h-[432px] flex flex-col justify-center bg-[#76C6F8] gap-y-1 md:gap-y-2"
          >
            <img
              src="/gambar/balai.jpg"
              alt=""
              class="w-[113px] h-[103px] md:w-[290px] md:h-[267px] pt-2 self-center"
            />
            <p class="text-[12px] md:text-[15px] text-center text-white">
              Kenyang di perut
            </p>
            <a
              href="/makanan"
              class="bg-[#FDC300] text-[12px] w-[138px] h-[47px] md:w-[311px] md:h-[69px] md:text-[25px] self-center text-white rounded-xl text-center flex items-center justify-center"
              >Berikutnya</a
            >
          </div>

          <div
            class="w-[230px] h-[207px] md:w-[411px] md:h-[432px] flex flex-col justify-center bg-[#76C6F8] gap-y-1 md:gap-y-2"
          >
            <img
              src="/gambar/balai.jpg"
              alt=""
              class="w-[113px] h-[103px] md:w-[290px] md:h-[267px] pt-2 self-center"
            />
            <p class="text-[12px] md:text-[15px] text-center text-white">
              Harimmu makin ceria
            </p>
            <a
              href="/minuman"
              class="bg-[#FDC300] text-[12px] w-[138px] h-[47px] md:w-[311px] md:h-[69px] md:text-[25px] self-center text-white rounded-xl text-center flex items-center justify-center"
              >Berikutnya</a
            >
          </div>

          <div
            class="w-[230px] h-[207px] md:w-[411px] md:h-[432px] flex flex-col justify-center bg-[#76C6F8] gap-y-1 md:gap-y-2"
          >
            <img
              src="/gambar/balai.jpg"
              alt=""
              class="w-[113px] h-[103px] md:w-[290px] md:h-[267px] pt-2 self-center"
            />
            <p class="text-[12px] md:text-[15px] text-center text-white">
              Baju dengan kain cotton combed 30s.
            </p>
            <a
              href="/konveksi"
              class="bg-[#FDC300] text-[12px] w-[138px] h-[47px] md:w-[311px] md:h-[69px] md:text-[25px] self-center text-white rounded-xl text-center flex items-center justify-center"
              >Berikutnya</a
            >
          </div>
        </div>
      </section>

      <!--Siap Bergabung Dengan-->

      <section
        class="bg-[url('/gambar/umkm.webp')] bg-cover bg-center h-[663px] relative mt-4 flex justify-center items-center"
      >
        <div
          class="bg-[#032F42] w-full h-full absolute top-0 left-0 z-10 opacity-60"
        ></div>
        <div class="z-20 flex flex-col text-center gap-y-10">
          <h3 class="text-white text-[24px] md:text-[50px] font-bold">
            Siap Bergabung <br class="md:hidden" />
            Dengan Kami
          </h3>
          <hr class="border-b-8 border-[#FF8A80] mb-2 w-11/12 mx-auto" />
          <p
            class="bg-[#FDC300] text-[16px] w-[291px] md:w-10/12 h-[109px] md:h-[212px] md:text-[35px] md:mx-auto text-white text-center flex items-center justify-center"
          >
            Hanya dengan beberapa menit saja, <br />
            UMKM mu sudah upgrade!
          </p>
        </div>
      </section>
    </main>
    <section class="relative">
      <a
        href="https://wa.me/yourphonenumber"
        class="bg-[#25D366] p-3 rounded-full fixed bottom-4 left-4 z-30"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="w-6 h-6 md:w-[72px] md:h-[77px] text-white"
          fill="currentColor"
          viewBox="0 0 24 24"
        >
          <path
            d="M20.52 3.48C18.37 1.34 15.51.25 12.46.25c-6.02 0-10.93 4.91-10.93 10.93 0 1.92.49 3.81 1.42 5.47L1.25 22.75l6.39-1.66c1.59.87 3.39 1.32 5.3 1.32 6.02 0 10.93-4.91 10.93-10.93 0-3.05-1.09-5.91-3.35-8.17zM12.46 20.6c-1.64 0-3.24-.43-4.65-1.24l-.33-.19-3.78.98 1.01-3.7-.22-.34C3.36 15.02 2.89 13.77 2.89 12.46c0-5.27 4.3-9.56 9.56-9.56 2.56 0 4.96 1 6.77 2.82 1.81 1.81 2.82 4.22 2.82 6.77 0 5.27-4.29 9.56-9.58 9.56zm5.42-7.82c-.28-.14-1.66-.82-1.92-.92-.26-.1-.45-.14-.64.14-.19.28-.74.92-.92 1.11-.17.19-.34.22-.62.07-.28-.14-1.18-.44-2.26-1.4-.83-.74-1.39-1.66-1.56-1.94-.17-.28-.02-.42.12-.56.12-.12.28-.34.42-.51.14-.19.19-.28.28-.47.09-.19.05-.36-.02-.5-.07-.14-.62-1.48-.85-2.02-.22-.53-.44-.45-.64-.45-.16 0-.35 0-.54 0-.19 0-.5.07-.77.35-.26.28-1 1-1 2.45s1.02 2.84 1.16 3.04c.14.19 2 3.06 4.85 4.29.68.29 1.21.46 1.63.6.68.22 1.3.19 1.78.12.54-.07 1.66-.68 1.9-1.34.24-.66.24-1.24.17-1.34-.07-.1-.26-.19-.54-.33z"
          />
        </svg>
      </a>
    </section>

    <footer class="bg-[#3BAFAB] py-4">
      <div class="grid h-full grid-cols-2 border-t-2 border-b-2">
        <div class="flex flex-col h-full px-4 text-white border-r-2">
          <h3 class="text-[10px] md:text-[25px] text-center mt-5">
            Terhubung Dengan Kami
          </h3>
          <p class="text-[9px] md:text-[24px] break-words mt-4">
            JL. RAYA SEMAMBUNG NO. 296 SEMAMBUNG LOR, SEMAMBUNG KEC. WONOAYU
            KAB. SIDOARJO, JAWA TIMUR, 61261.
          </p>
          <ol class="mt-4 list-none">
            <li class="flex items-center">
              <a
                href="https://www.instagram.com/desa.semambung.wny?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                class="flex items-center text-[9px] md:text-[24px]"
              >
                <img
                  src="/gambar/ig.png"
                  alt=""
                  class="w-[19px] h-[19px] mr-2 md:h-[50px] md:w-[50px]"
                />
                <span>desa.semambung.wny</span>
              </a>
            </li>
            <li class="flex items-center">
              <a
                href="https://youtube.com/@seputardesasemambung?si=0Kvjl9JbqKjq79q-"
                class="flex items-center text-[9px] md:text-[24px]"
              >
                <img
                  src="/gambar/yt.png"
                  alt=""
                  class="w-[19px] h-[19px] mr-2 md:h-[50px] md:w-[50px]"
                />
                <span>seputar desa semambung</span>
              </a>
            </li>
          </ol>
          <a
            href="http://semambung-wonoayu.desa.id/"
            class="text-[8px] self-start pt-2 md:text-[24px]"
          >
            http://semambung-wonoayu.desa.id/
          </a>
        </div>

        <div class="flex flex-col h-full px-4 text-center text-white gap-y-5">
          <h3 class="text-[10px] mt-5 font-bold md:text-[25px]">Produk Kami</h3>
          <a href="/makanan" class="text-[10px] md:text-[24px]"
            >Makanan</a
          >
          <a href="/minuman" class="text-[10px] md:text-[24px]"
            >Minuman</a
          >
          <a href="/konveksi" class="text-[10px] md:text-[24px]"
            >Konveksi</a
          >
          <a
            href="/tentangKami"
            class="text-[10px] self-center md:text-[25px] font-bold flex"
            ><img
              src=""
              alt=""
              class="w-[11px] h-[10px] md:h-[25px] md:w-[25px]"
            />
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
