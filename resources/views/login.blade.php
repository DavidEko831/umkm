<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="content-center h-screen" x-data="{ showError: {{ $errors->any() ? 'true' : 'false' }} }">

    <div class="w-full md:h-[438px] bg-[#2C6664] flex flex-col md:flex-row justify-center items-center px-6 py-8 mx-auto space-y-4 md:space-y-0 md:space-x-6 shadow">

        <div class="flex flex-col items-center justify-center w-full gap-y-4 md:w-1/2"> <!-- Center the content within this div -->
            <h1 class="text-xl font-bold leading-tight tracking-tight text-center text-white md:text-4xl">
                SELAMAT DATANG
            </h1>
            <hr class="h-1 bg-[#FDC300] border-none w-3/4">
            <img src="gambar/desa semambung.png" alt="" class="w-[106px] md:w-[212px] h-[100px] md:h-[200px] mx-auto">
        </div>

        <div class="flex items-center justify-center w-full h-full md:w-1/2"> <!-- Center the form within this div -->
            <form class="w-full px-4 space-y-4 md:space-y-6" action="{{ route('loginsubmit') }}" method="post">
                @csrf
                <div>
                    <input type="email" name="email" id="email" class="text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukan Email" required="">
                </div>
                <div>
                    <input type="password" name="password" id="password" placeholder="Masukan Password" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                </div>
               
                <button type="submit" class="w-full text-white bg-[#FDC300] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">MASUK</button>
            </form>
        </div>

        <!-- Popup error modal -->
        <div x-show="showError" class="fixed inset-0 flex items-center justify-center z-50">
            <div class="bg-white rounded-lg p-6 space-y-4 max-w-xs mx-auto text-center shadow-lg">
                <h2 class="text-xl font-semibold text-red-600">Error</h2>
                <p class="text-gray-700">{{ $errors->first('error') }}</p>
                <button @click="showError = false" class="mt-4 w-full bg-[#FDC300] text-white rounded-lg py-2.5">Tutup</button>
            </div>
        </div>

    </div>

</body>
</html>
