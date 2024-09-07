<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TENTANG KAMI</title>
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
  <body class="bg-[#003750] h-[400px] md:h-screen">
    <header class="bg-[#FDC300] h-14 md:h-36 flex items-center justify-center">
      <h1
        class="text-center text-[32px] place-self-center text-xl md:text-[60px] text-white"
        style="font-family: 'Italianno', cursive"
      >
        mulai UMKM mu dengan kami
      </h1>
    </header>
    <a href="/beranda" class="pt-2">
      <svg
        width="59"
        height="71"
        viewBox="0 0 59 71"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        class="w-[34px] h-[25px] mt-3 md:w-[70px] md:h-[57px]"
      >
        <path
          d="M57.2162 3.51066L58.9062 66.6637C58.9211 67.3032 58.7462 67.935 58.4001 68.4913C58.0541 69.0476 57.55 69.5072 56.9423 69.8207C56.3346 70.1342 55.6461 70.2897 54.9511 70.2704C54.256 70.2511 53.5807 70.0579 52.9978 69.7114L2.55844 39.4621C0.467161 38.2084 0.382846 35.0578 2.40399 33.6906L51.1533 0.786855C51.7156 0.406048 52.3798 0.173781 53.0739 0.115289C53.7681 0.0567973 54.4655 0.174318 55.0904 0.455082C55.7154 0.735846 56.2439 1.16912 56.6187 1.70782C56.9935 2.24652 57.2001 2.87005 57.2162 3.51066Z"
          fill="#FDC300"
        />
      </svg>
    </a>

    <main class="md:grid grid-cols-2 md:relative">
      <!--Tentang kami-->
      <div>
        <section
          class="flex flex-col ml-8 mr-8 gap-y-2 mt-5 text-white font-bold"
        >
          <h1 class="text-[20px] font-bold md:text-[50px]">TENTANG KAMI</h1>
          <hr class="border-b-4 border-white w-[90px] md:w-[148px]" />
          <p class="break-words text-[10px] md:text-[20px]">
            Kami hadir untuk membantu UMKM warga desa Semambung kec. Wonoayu
            Kab. Sidoarjo. Dengan adanya website ini kami siap membantu
            usaha-usaha warga desa Semambung agar dapat mempermudah promosi
            usaha tersebut. Tujuan kami adalah membuat UMKM warga desa dapat
            bisa di kenal sampai keluar daerah agar dapat mempermudah transaksi
            jual beli dengan menggunakan website.
          </p>
        </section>

        <!--Alamat-->
        <div class="md:grid grid-cols-2 md:mt-8">
          <div>
            <section
              class="flex flex-col ml-8 mr-8 gap-y-2 mt-7 md:mt-0 text-white font-bold"
            >
              <p class="text-[10px] md:text-[15px]">
                JL. RAYA SEMAMBUNG NO. 296 SEMAMBUNG LOR, SEMAMBUNG KEC. WONOAYU
                KAB. SIDOARJO, JAWA TIMUR, 61261.
              </p>
            </section>

            <!--Sosmed-->

            <section
              class="flex flex-col ml-8 mr-8 gap-y-2 mt-7 text-white font-bold"
            >
              <div class="text-white h-full">
                <ol class="list-none mt-4">
                  <li class=" ">
                    <a
                      href="https://www.instagram.com/desa.semambung.wny?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                      class="flex items-center text-[10px] md:text-[16px]"
                    >
                      <img
                        src="/gambar/ig.png"
                        alt=""
                        class="w-[23px] h-[23px] mr-2 md:h-[50px] md:w-[50px]"
                      />
                      <span>desa.semambung.wny</span>
                    </a>
                  </li>
                  <li class=" ">
                    <a
                      href="https://youtube.com/@seputardesasemambung?si=0Kvjl9JbqKjq79q-"
                      class="flex items-center text-[10px] md:text-[16px]"
                    >
                      <img
                        src="/gambar/yt.png"
                        alt=""
                        class="w-[23px] h-[23px] mr-2 md:h-[50px] md:w-[50px]"
                      />
                      <span>seputar desa semambung</span>
                    </a>
                  </li>
                </ol>
                <a
                  href="http://semambung-wonoayu.desa.id/"
                  class="text-[10px] flex md:text-[16px]"
                >
                  <img
                    src=""
                    alt=""
                    class="w-[23px] h-[23px] mr-2 md:h-[50px] md:w-[50px]"
                  />
                  <span>http://semambung-wonoayu.desa.id/</span>
                </a>
              </div>
            </section>
          </div>
          <!--Produk Kami-->
          <div>
            <section
              class="hidden md:flex flex-col ml-14 gap-y-2 mt-14 md:mt-0 text-white font-bold md:text-center"
            >
              <h3 class="text-[12px] md:text-[25px]">PRODUK KAMI</h3>
              <ol
                class="list-none mt-4 flex flex-col gap-y-3 text-[10px] md:text-[16px] md:text-left pl-4 md:pl-10 md:gap-y-10"
              >
                <li class=""><a href="/makanan">Makanan</a></li>
                <li class=""><a href="/minuman">Minuman</a></li>
                <li class=""><a href="/konveksi">Konveksi</a></li>
              </ol>
            </section>
          </div>
        </div>

        <section
          class="hidden md:flex flex-col ml-16 mt-10 md:mt-10 text-white"
        >
          <p class="text-[10px] md:text-[25px] md:text-right md:pr-40">
            @kkn1unnar2024
          </p>
        </section>
      </div>

      <div
        class="hidden md:flex absolute bottom-0 right-0 w-48 h-48 md:w-1/4 md:h-1/2 bg-white rounded-tl-full items-end justify-end p-0"
      >
        <img
          src="/gambar/1.jpg"
          alt=""
          class="w-36 h-28 md:w-5/6 md:h-3/6 md:rounded-l-2xl"
        />
      </div>

      <!--mobile-->
      <div
        class="relative h-full flex flex-row text-white font-bold ml-14 mb-0 md:hidden"
      >
        <div class="flex flex-col gap-y-2">
          <h3 class="text-[12px]">PRODUK KAMI</h3>
          <ol
            class="list-none mt-4 flex flex-col gap-y-3 text-[10px] md:text-[16px] md:text-left pl-4 md:pl-10 md:gap-y-10"
          >
            <li class=""><a href="/makanan">Makanan</a></li>
            <li class=""><a href="/minuman">Minuman</a></li>
            <li class=""><a href="/konveksi">Konveksi</a></li>
          </ol>
          <p class="text-[10px] pt-6">@kkn1unnar2024</p>
        </div>
        <div
          class="absolute bottom-0 right-0 w-48 h-48 md:w-1/4 md:h-1/2 bg-white rounded-tl-full flex items-end justify-end p-0"
        >
          <img
            src="/gambar/1.jpg"
            alt=""
            class="w-36 h-28 md:w-5/6 md:h-3/6 md:rounded-l-2xl"
          />
        </div>
      </div>
    </main>
  </body>
</html>
