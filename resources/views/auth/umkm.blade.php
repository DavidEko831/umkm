<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UMKM</title>
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
  <body class="">
    <!--MOBILE-->
    <section class="md:hidden">
      <nav class="flex flex-col gap-y-20 bg-[#3BAFAB] md:gap-y-14">
        <div class="relative flex items-center justify-center">
          <a href="/homeadmin" class="absolute left-0 mt-8 pt-2">
            <svg
              width="59"
              height="71"
              viewBox="0 0 59 71"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="mt-3 h-[34px] w-[38px] md:h-[57px] md:w-[70px]"
            >
              <path
                d="M57.2162 3.51066L58.9062 66.6637C58.9211 67.3032 58.7462 67.935 58.4001 68.4913C58.0541 69.0476 57.55 69.5072 56.9423 69.8207C56.3346 70.1342 55.6461 70.2897 54.9511 70.2704C54.256 70.2511 53.5807 70.0579 52.9978 69.7114L2.55844 39.4621C0.467161 38.2084 0.382846 35.0578 2.40399 33.6906L51.1533 0.786855C51.7156 0.406048 52.3798 0.173781 53.0739 0.115289C53.7681 0.0567973 54.4655 0.174318 55.0904 0.455082C55.7154 0.735846 56.2439 1.16912 56.6187 1.70782C56.9935 2.24652 57.2001 2.87005 57.2162 3.51066Z"
                fill="#FDC300"
              />
            </svg>
          </a>

          
        </div>

        <div
          class="mb-2 flex flex-row justify-center gap-x-10 text-[14px] font-bold text-white"
        >
          <a href="postingan" class="pt-[18px]">Postingan</a>
          <a
            href="/homeadmin/umkm"
            class="pt-[18px] underline decoration-[#FDC300] decoration-4"
            >UMKM</a
          >
          <a href="/homeadmin/tambahProduk"
            >Tambah <br />
            Produk</a
          >
          <a href="#" class="pt-[18px]">Berita</a>
        </div>
      </nav>

      <main class="mt-6 flex flex-col gap-y-6">
        <!--UMKM-->
        
        @foreach($umkms as $product)
        <div class="rounded-2xl bg-[#76C6F8]">
          <!--TOMBOL-->
          
          <div class="mr-4 flex justify-end gap-x-2 pt-2">
            <a href="{{ route('umkm.edit', $product->id_umkm) }}"class="">
              <svg
                width="20"
                height="27"
                viewBox="0 0 20 27"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M15.313 2.2635L17.7323 5.6385L15.888 8.2125L13.4686 4.8375L15.313 2.2635ZM6.45166 18H8.87102L14.7476 9.80212L12.3283 6.42712L6.45166 14.625V18Z"
                  fill="#353434"
                />
                <path
                  d="M15.3227 21.375H6.57911C6.55814 21.375 6.53637 21.3862 6.5154 21.3862C6.48879 21.3862 6.46218 21.3761 6.43476 21.375H4.03234V5.625H9.55411L11.167 3.375H4.03234C3.14282 3.375 2.41943 4.383 2.41943 5.625V21.375C2.41943 22.617 3.14282 23.625 4.03234 23.625H15.3227C15.7504 23.625 16.1607 23.3879 16.4632 22.966C16.7656 22.544 16.9356 21.9717 16.9356 21.375V11.6235L15.3227 13.8735V21.375Z"
                  fill="#353434"
                />
              </svg>
            </a>
            <a href="{{ route('umkm.delete', $product->id_umkm) }}"  onclick="return confirm('Are you sure you want to delete this record?')"
            >
              <svg
                width="16"
                height="22"
                viewBox="0 0 16 22"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M3.29937 4.02439L4.0197 19.0039C4.03054 19.2272 4.10983 19.4369 4.24139 19.5902C4.37294 19.7436 4.54684 19.8291 4.7276 19.8293H11.1431C11.3238 19.8291 11.4977 19.7436 11.6293 19.5902C11.7609 19.4369 11.8401 19.2272 11.851 19.0039L12.5713 4.02439H3.29937ZM13.6385 4.02439L12.9137 19.0818C12.8868 19.6403 12.6886 20.165 12.3595 20.5487C12.0304 20.9325 11.5953 21.1462 11.1431 21.1463H4.7276C4.2754 21.1462 3.8403 20.9325 3.51121 20.5487C3.18211 20.165 2.98386 19.6403 2.95696 19.0818L2.2322 4.02439H0.39502V3.2561C0.39502 3.11056 0.44175 2.97097 0.524932 2.86805C0.608113 2.76514 0.720932 2.70732 0.838568 2.70732H15.0321C15.1498 2.70732 15.2626 2.76514 15.3458 2.86805C15.4289 2.97097 15.4757 3.11056 15.4757 3.2561V4.02439H13.6385ZM9.70954 0.292686C9.82717 0.292686 9.93999 0.350504 10.0232 0.453421C10.1064 0.556337 10.1531 0.695921 10.1531 0.841467V1.60976H5.7176V0.841467C5.7176 0.695921 5.76433 0.556337 5.84751 0.453421C5.93069 0.350504 6.04351 0.292686 6.16115 0.292686H9.70954ZM5.7176 6.87805H6.78212L7.22567 16.7561H6.16115L5.7176 6.87805ZM9.08857 6.87805H10.1531L9.70954 16.7561H8.64502L9.08857 6.87805Z"
                  fill="#353434"
                />
              </svg>
            </a>
            <a href="">
              <svg
                width="15"
                height="21"
                viewBox="0 0 15 21"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M7.22352 15.2185V3.01201L4.80762 6.29999L4.07352 5.28678L7.74195 0.292725L11.4114 5.28678L10.6773 6.3014L8.26039 3.01201V15.2185H7.22352ZM2.15946 20.0488C1.68181 20.0488 1.28331 19.8315 0.963956 19.3969C0.644601 18.9622 0.484578 18.4194 0.483887 17.7684V14.3492H1.52075V17.7684C1.52075 17.9857 1.58711 18.1852 1.71983 18.3667C1.85255 18.5483 1.99875 18.6386 2.15843 18.6377H13.3255C13.4845 18.6377 13.6307 18.5474 13.7641 18.3667C13.8975 18.1861 13.9638 17.9867 13.9632 17.7684V14.3492H15V17.7684C15 18.4185 14.8403 18.9608 14.521 19.3955C14.2016 19.8301 13.8028 20.0479 13.3244 20.0488H2.15946Z"
                  fill="#353434"
                />
              </svg>
            </a>
          </div>

          <!--ISI-->
          <div class="mb-4 ml-6 flex flex-row">
            <img src="{{ asset('storage/' . $product->foto) }}" alt="" class="h-[97px] w-[92px]" />

            <div class="ml-2 flex flex-col gap-y-1 font-bold">
              <h3 class="text-[13px] text-[#016997]">{{ $product->namaToko }}</h3>
              <p class="text-[10px]">{{ $product->namaProduk }}</p>
              <p class="text-[10px]">{{ $product->harga }}</p>
              <p class="text-[10px]">{{ $product->alamat }}</p>
              <a href="{{ $product->telp }}" class="flex flex-row text-[10px]"
                >{{ $product->telp }}<img
                  src="/gambar/wa.svg"
                  alt=""
                  class="float-right h-[19px] w-[12px] pb-[8px]"
              /></a>
            </div>
          </div>
          
        </div>
        @endforeach
      </main>
    </section>

    <!--DEKSTOP-->
    <section class="hidden flex-col md:flex h-full">
      <!--TOP-->
      <div class="flex h-[203px] w-full content-center bg-[#3BAFAB]">
        <a href="/homeadmin" class="left-0 my-auto pt-2">
          <svg
            width="59"
            height="71"
            viewBox="0 0 59 71"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            class="mt-3 h-[56px] w-[62px]"
          >
            <path
              d="M57.2162 3.51066L58.9062 66.6637C58.9211 67.3032 58.7462 67.935 58.4001 68.4913C58.0541 69.0476 57.55 69.5072 56.9423 69.8207C56.3346 70.1342 55.6461 70.2897 54.9511 70.2704C54.256 70.2511 53.5807 70.0579 52.9978 69.7114L2.55844 39.4621C0.467161 38.2084 0.382846 35.0578 2.40399 33.6906L51.1533 0.786855C51.7156 0.406048 52.3798 0.173781 53.0739 0.115289C53.7681 0.0567973 54.4655 0.174318 55.0904 0.455082C55.7154 0.735846 56.2439 1.16912 56.6187 1.70782C56.9935 2.24652 57.2001 2.87005 57.2162 3.51066Z"
              fill="#FDC300"
            />
          </svg>
        </a>
      </div>

      <div class="flex h-full flex-row">
        <nav
          class="w-4/12 bg-[#3BAFAB] text-center text-[32px] font-bold text-white h-screen"
        >
          <div
            class="flex h-[80px] w-full items-center justify-center border-y-2 border-white"
          >
            <a href="postingan" class="">POSTINGAN</a>
          </div>

          <div
            class="flex h-[80px] w-full items-center justify-center border-b-2 border-white"
          >
            <a href="/homeadmin/umkm" class="">UMKM</a>
          </div>

          <div
            class="flex h-[80px] w-full items-center justify-center border-b-2 border-white"
          >
            <a href="/homeadmin/tambahProduk" class="">TAMBAH PRODUK</a>
          </div>

          <div
            class="flex h-[80px] w-full items-center justify-center border-b-2 border-white"
          >
            <a href="#" class="">BERITA</a>
          </div>
        </nav>

        <main class="mt-2 flex w-full flex-col gap-y-8 overflow-auto h-screen">
          @foreach($umkms as $product)
          <div class="mx-auto w-11/12 rounded-2xl bg-[#76C6F8]">
            <!--TOMBOL-->
            

            <div class="mr-4 flex justify-end gap-x-3 pt-2">
              <a href="{{ route('umkm.edit', $product->id_umkm) }}"class="">
                <svg
                  width="40"
                  height="41"
                  viewBox="0 0 20 27"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M15.313 2.2635L17.7323 5.6385L15.888 8.2125L13.4686 4.8375L15.313 2.2635ZM6.45166 18H8.87102L14.7476 9.80212L12.3283 6.42712L6.45166 14.625V18Z"
                    fill="#353434"
                  />
                  <path
                    d="M15.3227 21.375H6.57911C6.55814 21.375 6.53637 21.3862 6.5154 21.3862C6.48879 21.3862 6.46218 21.3761 6.43476 21.375H4.03234V5.625H9.55411L11.167 3.375H4.03234C3.14282 3.375 2.41943 4.383 2.41943 5.625V21.375C2.41943 22.617 3.14282 23.625 4.03234 23.625H15.3227C15.7504 23.625 16.1607 23.3879 16.4632 22.966C16.7656 22.544 16.9356 21.9717 16.9356 21.375V11.6235L15.3227 13.8735V21.375Z"
                    fill="#353434"
                  />
                </svg>
              </a>
        
              <a href="{{ route('umkm.delete', $product->id_umkm) }}"  onclick="return confirm('Are you sure you want to delete this record?')"  >
                <svg
                  width="44"
                  height="40"
                  viewBox="0 0 16 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M3.29937 4.02439L4.0197 19.0039C4.03054 19.2272 4.10983 19.4369 4.24139 19.5902C4.37294 19.7436 4.54684 19.8291 4.7276 19.8293H11.1431C11.3238 19.8291 11.4977 19.7436 11.6293 19.5902C11.7609 19.4369 11.8401 19.2272 11.851 19.0039L12.5713 4.02439H3.29937ZM13.6385 4.02439L12.9137 19.0818C12.8868 19.6403 12.6886 20.165 12.3595 20.5487C12.0304 20.9325 11.5953 21.1462 11.1431 21.1463H4.7276C4.2754 21.1462 3.8403 20.9325 3.51121 20.5487C3.18211 20.165 2.98386 19.6403 2.95696 19.0818L2.2322 4.02439H0.39502V3.2561C0.39502 3.11056 0.44175 2.97097 0.524932 2.86805C0.608113 2.76514 0.720932 2.70732 0.838568 2.70732H15.0321C15.1498 2.70732 15.2626 2.76514 15.3458 2.86805C15.4289 2.97097 15.4757 3.11056 15.4757 3.2561V4.02439H13.6385ZM9.70954 0.292686C9.82717 0.292686 9.93999 0.350504 10.0232 0.453421C10.1064 0.556337 10.1531 0.695921 10.1531 0.841467V1.60976H5.7176V0.841467C5.7176 0.695921 5.76433 0.556337 5.84751 0.453421C5.93069 0.350504 6.04351 0.292686 6.16115 0.292686H9.70954ZM5.7176 6.87805H6.78212L7.22567 16.7561H6.16115L5.7176 6.87805ZM9.08857 6.87805H10.1531L9.70954 16.7561H8.64502L9.08857 6.87805Z"
                    fill="#353434"
                  />
                </svg>
              </a>
              
              <a href="">
                <svg
                  width="30"
                  height="30"
                  viewBox="0 0 15 21"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M7.22352 15.2185V3.01201L4.80762 6.29999L4.07352 5.28678L7.74195 0.292725L11.4114 5.28678L10.6773 6.3014L8.26039 3.01201V15.2185H7.22352ZM2.15946 20.0488C1.68181 20.0488 1.28331 19.8315 0.963956 19.3969C0.644601 18.9622 0.484578 18.4194 0.483887 17.7684V14.3492H1.52075V17.7684C1.52075 17.9857 1.58711 18.1852 1.71983 18.3667C1.85255 18.5483 1.99875 18.6386 2.15843 18.6377H13.3255C13.4845 18.6377 13.6307 18.5474 13.7641 18.3667C13.8975 18.1861 13.9638 17.9867 13.9632 17.7684V14.3492H15V17.7684C15 18.4185 14.8403 18.9608 14.521 19.3955C14.2016 19.8301 13.8028 20.0479 13.3244 20.0488H2.15946Z"
                    fill="#353434"
                  />
                </svg>
              </a>
            </div>

            <!--ISI-->
            <div class="mb-4 ml-6 flex flex-row items-center">
              <img
                src="{{ asset('storage/' . $product->foto) }}"
                alt=""
                class="h-[178px] w-[189px]"
              />
              <h3 class="ml-1 text-[32px] font-bold text-[#016997]">{{ $product->namaToko }}</h3>
              <div class=" ml-8 flex flex-col gap-y-3 font-bold">
                <p class="text-[20px]">{{ $product->namaToko }}</p>
                <p class="text-[20px]">{{ $product->harga }}</p>
                <p class="text-[20px]">{{ $product->alamat }}</p>
                <a href="{{ $product->telp }}" class="flex flex-row text-[20px]"
                  >{{ $product->telp }}<img
                    src="/gambar/wa.svg"
                    alt=""
                    class="float-right h-[23px] w-[23px]"
                /></a>
              </div>
            </div>
           
          </div>
          @endforeach
        </main>
        
      </div>
    </section>

     <!-- Pagination Links -->
     <div class="mt-6 flex items-center justify-center">
      {{ $umkms->links() }} <!-- Laravel pagination links -->
  </div>
</div>


@if (session('success'))
    <script>
        // Show an alert with the success message and redirect
        alert('{{ session('success') }}');
        window.location.href = "{{ route('umkm') }}";
    </script>
@endif




  </body>
</html>
