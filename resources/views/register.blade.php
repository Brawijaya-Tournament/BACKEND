<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet" />
    <link href="dist/output.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Roboto&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <title>Brawijaya Tournament</title>
</head>
<body class="bg-primary1">
    <!-- navbar -->
    <nav class="bg-primary2 px-10 sm:px-4 py-2.5 shadow-lg">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <!-- logo -->
            <a href="#" class="flex items-center ml-10">
                <img src="img/logoNavbar.svg" class="mr-3 h-16 sm:h-9" alt="Brawijaya Tournament Logo">
            </a>
            <!-- button daftar dan masuk -->
            <div class="flex items-center space-x-2 md:order-2 mr-10">
                <button type="button" class="font-poppins font-bold text-lg leading-5 rounded-xl text-secondary2 bg-primary2 border-2 border-secondary2 hover:bg-secondary3 hover:text-primary3 focus:ring-4 focus:outline-none focus:ring-blue-300 px-5 py-2.5 text-center mr-10 md:mr-0 hidden lg:block sm:mx-auto">Daftar</button>
                <button type="button" class="font-poppins font-bold text-lg leading-5 rounded-xl text-primary2 bg-secondary2 hover:bg-primary3 hover:text-secondary3 border-2 border-secondary2 focus:ring-4 focus:outline-none focus:ring-blue-300 px-5 py-2.5 text-center mr-10 md:mr-0 hidden lg:block">Masuk</button>
                <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-secondary2 rounded-lg md:hidden focus:outline-none focus:ring-2" aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <!-- menu -->
            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-col p-6 mt-4 bg-primary2 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-primary2">
                    <li class="flex flex-cols">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="block lg:hidden h-6 w-6 self-center fill-secondary2">
                            <path d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5L575.8 255.5z"/>
                        </svg>
                         <button class="flex justify-between items-center py-2 pr-4 pl-3 text-secondary2 lg:text-natural7 rounded hover:bg-stone-200 md:hover:bg-transparent md:hover:text-secondary2 font-poppins font-medium text-lg leading-5 w-full md:border-0 md:p-0 md:w-auto active:border-none focus:border-none focus:outline-none active:outline-none">Beranda 
                        </button>
                    </li class="flex flex-cols">
                    <li class="flex flex-cols">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="block lg:hidden h-6 w-6 self-center fill-secondary2">
                            <path d="M572.1 82.38C569.5 71.59 559.8 64 548.7 64h-100.8c.2422-12.45 .1078-23.7-.1559-33.02C447.3 13.63 433.2 0 415.8 0H160.2C142.8 0 128.7 13.63 128.2 30.98C127.1 40.3 127.8 51.55 128.1 64H27.26C16.16 64 6.537 71.59 3.912 82.38C3.1 85.78-15.71 167.2 37.07 245.9c37.44 55.82 100.6 95.03 187.5 117.4c18.7 4.805 31.41 22.06 31.41 41.37C256 428.5 236.5 448 212.6 448H208c-26.51 0-47.99 21.49-47.99 48c0 8.836 7.163 16 15.1 16h223.1c8.836 0 15.1-7.164 15.1-16c0-26.51-21.48-48-47.99-48h-4.644c-23.86 0-43.36-19.5-43.36-43.35c0-19.31 12.71-36.57 31.41-41.37c86.96-22.34 150.1-61.55 187.5-117.4C591.7 167.2 572.9 85.78 572.1 82.38zM77.41 219.8C49.47 178.6 47.01 135.7 48.38 112h80.39c5.359 59.62 20.35 131.1 57.67 189.1C137.4 281.6 100.9 254.4 77.41 219.8zM498.6 219.8c-23.44 34.6-59.94 61.75-109 81.22C426.9 243.1 441.9 171.6 447.2 112h80.39C528.1 135.7 526.5 178.7 498.6 219.8z"/>
                        </svg>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center py-2 pr-4 pl-3 text-secondary2 lg:text-natural7 rounded md:hover:text-secondary2 font-poppins font-medium text-lg leading-5 w-full md:border-0 md:p-0 md:w-auto active:border-none focus:border-none focus:outline-none active:outline-none">Kompetisi 
                            <svg class="ml-1 w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar" class="hidden z-10 w-44 font-normal bg-primary3 rounded divide-y divide-gray-100 shadow active:border-none focus:border-none focus:outline-none active:outline-none">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#" class="block py-2 px-4 font-poppins font-normal text-sm leading-4 text-secondary2 hover:bg-gray-100 ">Bulutangkis</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 font-poppins font-normal text-sm leading-4 text-secondary2 hover:bg-gray-100 ">Basket</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 font-poppins font-normal text-sm leading-4 text-secondary2 hover:bg-gray-100">Futsal</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 font-poppins font-normal text-sm leading-4 text-secondary2 hover:bg-gray-100 ">Fotografi</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 font-poppins font-normal text-sm leading-4 text-secondary2 hover:bg-gray-100 ">Solo Vocal</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 font-poppins font-normal text-sm leading-4 text-secondary2 hover:bg-gray-100">Modern Dance</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 font-poppins font-normal text-sm leading-4 text-secondary2 hover:bg-gray-100 ">Mobile Legends</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 font-poppins font-normal text-sm leading-4 text-secondary2 hover:bg-gray-100 ">PUBG Mobile</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="flex flex-cols" >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="block lg:hidden h-6 w-6 self-center fill-secondary2">
                            <path d="M160 80C160 53.49 181.5 32 208 32H240C266.5 32 288 53.49 288 80V432C288 458.5 266.5 480 240 480H208C181.5 480 160 458.5 160 432V80zM0 272C0 245.5 21.49 224 48 224H80C106.5 224 128 245.5 128 272V432C128 458.5 106.5 480 80 480H48C21.49 480 0 458.5 0 432V272zM400 96C426.5 96 448 117.5 448 144V432C448 458.5 426.5 480 400 480H368C341.5 480 320 458.5 320 432V144C320 117.5 341.5 96 368 96H400z"/>
                        </svg>
                        <button class="flex justify-between items-center py-2 pr-4 pl-3 text-secondary2 lg:text-natural7 rounded hover:bg-stone-200 md:hover:bg-transparent md:hover:text-secondary2 font-poppins font-medium text-lg leading-5 w-full md:border-0 md:p-0 md:w-auto active:border-none focus:border-none focus:outline-none active:outline-none">Klasemen 
                    </li>
                    <li class="flex flex-cols">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="block lg:hidden h-6 w-6 self-center fill-secondary2">
                            <path d="M204.3 32.01H96c-52.94 0-96 43.06-96 96c0 17.67 14.31 31.1 32 31.1s32-14.32 32-31.1c0-17.64 14.34-32 32-32h108.3C232.8 96.01 256 119.2 256 147.8c0 19.72-10.97 37.47-30.5 47.33L127.8 252.4C117.1 258.2 112 268.7 112 280v40c0 17.67 14.31 31.99 32 31.99s32-14.32 32-31.99V298.3L256 251.3c39.47-19.75 64-59.42 64-103.5C320 83.95 268.1 32.01 204.3 32.01zM144 400c-22.09 0-40 17.91-40 40s17.91 39.1 40 39.1s40-17.9 40-39.1S166.1 400 144 400z"/>
                        </svg>
                        <button class="flex justify-between items-center py-2 pr-4 pl-3 text-secondary2 lg:text-natural7 rounded hover:bg-stone-200 md:hover:bg-transparent md:hover:text-secondary2 font-poppins font-medium text-lg leading-5 w-full md:border-0 md:p-0 md:w-auto active:border-none focus:border-none focus:outline-none active:outline-none">FAQ 
                    </li>
                    <li>
                        <button type="button" class="font-poppins font-bold text-lg leading-5 rounded-xl text-secondary2 bg-primary2 border-2 border-secondary2 hover:bg-secondary3 hover:text-primary3 focus:ring-4 focus:outline-none focus:ring-blue-300 px-5 py-2.5 mb-2 text-center mr-10 md:mr-0 w-full block lg:hidden sm:mx-auto">Daftar</button>
                    </li>
                    <li>
                        <button type="button" class="font-poppins font-bold text-lg leading-5 rounded-xl text-primary2 bg-secondary2 hover:bg-primary3 hover:text-secondary3 border-2 border-secondary2 focus:ring-4 focus:outline-none focus:ring-blue-300 px-5 py-2.5 text-center mr-10 md:mr-0 w-full block lg:hidden">Masuk</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- section/konten -->
    <section class="bg-primary1">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto my-12 md:h-screen lg:py-0">
            <div class="w-screen bg-secondary2 rounded-3xl shadow md:mt-0 max-w-xs sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <!-- judul -->
                    <h1 class="uppercase font-silverkids text-4xl font-bold leading-10 tracking-widest text-center text-primary2 md:text-2xl" style="text-shadow: 2px 2px 2px #D7137D;">
                        Daftar
                    </h1>
                    <!-- form -->
                    <form class="space-y-2 md:space-y-6" action="#">
                        <div class="px-5 lg:px-12 lg:w-full">
                            <label for="nama" class="space-x-9 w-11/12 block mb-2 text-base font-medium text-primary2 leading-5 font-poppins">Nama</label>
                            <input type="nama" name="nama" id="nama" placeholder="Masukkan nama" class="bg-secondary2 border border-primary2 text-base font-normal text-primary3 leading-5 font-poppins placeholder-primary3 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                        </div>
                        <div class="px-5 lg:px-12 lg:w-full">
                            <label for="email" class="block mb-2 text-base font-medium text-primary2 leading-5 font-poppins">Email</label>
                            <input type="email" name="email" id="email" placeholder="Masukkan email" class="bg-secondary2 border border-primary2 text-base font-normal text-primary3 leading-5 font-poppins placeholder-primary3 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                        </div>
                        <div class="px-5 lg:px-12 lg:w-full">
                            <label for="password" class="block mb-2 text-base font-medium text-primary2 leading-5 font-poppins">Kata Sandi</label>
                            <input type="password" name="password" id="password" placeholder="Masukkan kata sandi" class="bg-secondary2 border border-primary2 text-base font-normal text-primary3 leading-5 font-poppins placeholder-primary3 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                        </div>
                        <div class="px-5 lg:px-12 lg:w-full">
                            <label for="confirm-password" class="block mb-2 text-base font-medium text-primary2 leading-5 font-poppins">Konfirmasi Kata Sandi</label>
                            <input type="confirm-password" name="confirm-password" id="confirm-password" placeholder="Masukkan kata sandi" class="bg-secondary2 border border-primary2 text-base font-normal text-primary3 leading-5 font-poppins placeholder-primary3 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                        </div>
                        <div class="flex items-start px-5 lg:px-12 lg:w-full">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox h-6 w-6 checkbox-checkbox text-primary2 border border-primary2" checked>
                                <span class="ml-2 font-normal text-sm font-poppins leading-4 text-primary2">Saya setuju dengan Syarat, Ketentuan, dan Kebijakan Privasi yang Berlaku.</span>
                            </label>
                        </div>
                        <button type="submit" class="mx-5 w-10/12 lg:mx-12 lg:w-9/12 text-secondary2 bg-primary2 hover:bg-secondary3 hover:text-primary3 font-poppins focus:ring-4 focus:outline-none focus:ring-primary-300 font-bold rounded-xl text-lg leading-5 py-2.5 text-center">Buat Akun</button>
                        <p class="font-poppins text-sm font-light leading-4 text-black text-center">
                            Sudah punya akun? <a href="#" class="font-poppins font-bold text-black text-sm leading-4 hover:underline">Masuk</a> di sini.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="text-center lg:text-left bg-secondary2 text-primary2 rounded-3xl">
        <div class="mx-auto lg:mx-20 py-10 text-center md:text-left md:flex md:justify-between">
            <div class="grid grid-cols-2 md:grid-cols-2 md:mb-0 sm:gap-6 sm:grid-cols-5 lg:grid-cols-5 gap-8">
                <!-- grid 1 -->
                <div class="col-span-2">
                    <h6 class="font-silverkids text-2xl font-normal leading-7 text-primary2 mb-4 flex items-center justify-center md:justify-start sm:text-center" style="text-shadow: 2px 2px 2px #D7137D;">
                        <img src="img/logoFooter.svg" class="mr-3 h-12 sm:h-9" alt="Brawijaya Tournament Logo">
                        Brawijaya Tournament
                    </h6>
                    <p class="font-poppins text-sm font-normal leading-4 text-primary2 mb-2">Kementrian Pemuda, Olahraga, dan Seni </p>
                    <p class="font-poppins text-sm font-normal leading-4 text-primary2 mb-8">Eksekutif Mahasiswa Universitas Brawijaya</p>
                    <span class="text-primary2 font-bold font-poppins text-sm leading-4">Email:</span>
                    <span class="font-poppins text-sm leading-4 font-normal text-primary2">brawijayatournament2022@gmail.com</span>
                </div>
                <!-- grid 2 -->
                <div class="">
                    <h6 class="uppercase font-bold mb-4 flex text-base font-poppins leading-5 justify-center md:justify-start">Akses</h6>
                    <p class="mb-1">
                        <a href="#!" class="text-primary2 font-poppins font-normal text-sm leading-4">Beranda</a>
                    </p>
                    <p class="mb-1">
                        <a href="#!" class="text-primary2 font-poppins font-normal text-sm leading-4">Kompetisi</a>
                    </p>
                    <p class="mb-1">
                        <a href="#!" class="text-primary2 font-poppins font-normal text-sm leading-4">Klasemen</a>
                    </p>
                    <p>
                        <a href="#!" class="text-primary2 font-poppins font-normal text-sm leading-4">FAQ</a>
                    </p>
                </div>
                <!-- grid 3 -->
                <div class="">
                    <h6 class="uppercase font-bold mb-4 flex text-base font-poppins lediang-5 justify-center md:justify-start">Kompetisi</h6>
                    <p class="mb-1">
                        <a href="#!" class="text-primary2 font-poppins font-normal text-sm leading-4">Bulu Tangkis</a>
                    </p>
                    <p class="mb-1">
                        <a href="#!" class="text-primary2 font-poppins font-normal text-sm leading-4">Basket</a>
                    </p>
                    <p class="mb-1">
                        <a href="#!" class="text-primary2 font-poppins font-normal text-sm leading-4">Futsal</a>
                    </p>
                    <p class="mb-1">
                        <a href="#!" class="text-primary2 font-poppins font-normal text-sm leading-4">Fotografi</a>
                    </p>
                    <p class="mb-1">
                        <a href="#!" class="text-primary2 font-poppins font-normal text-sm leading-4">Solo Vocal</a>
                    </p>
                    <p class="mb-1">
                        <a href="#!" class="text-primary2 font-poppins font-normal text-sm leading-4">Modern Dance</a>
                    </p>
                    <p class="mb-1">
                        <a href="#!" class="text-primary2 font-poppins font-normal text-sm leading-4">Mobile Legends</a>
                    </p>
                    <p>
                        <a href="#!" class="text-primary2 font-poppins font-normal text-sm leading-4">PUBG Mobile</a>
                    </p>
                </div>
                <!-- grid 4 -->
                <div class="col-span-2 lg:col-span-1">
                    <h6 class="uppercase font-bold mb-4 text-base font-poppins leading-5 flex justify-center md:justify-start">Sosial Media</h6>
                    <p class="font-poppins text-sm font-normal leading-4 text-primary2 mb-6">ikuti sosial media kami untuk informasi lebih lanjut dan terupdate</p>
                    <p class="flex items-center justify-center md:justify-start mb-4 sm:justify-center">
                        <!-- instgram -->
                        <i class="flex items-center bg-primary2 justify-center h-9 w-9 mx-1 rounded-full fab fill-current text-white text-xl fa-instagram"></i>
                        <!-- line -->
                        <i class="flex items-center bg-primary2 justify-center h-9 w-9 mx-1 rounded-full fab fill-current text-white text-xl fa-line"></i>
                        <!-- twitter -->
                        <i class="flex items-center bg-primary2 justify-center h-9 w-9 mx-1 rounded-full fab fill-current text-white text-xl fa-twitter"></i>
                        <!-- tiktok -->
                        <i class="flex items-center bg-primary2 justify-center h-9 w-9 mx-1 rounded-full fab fill-current text-white text-xl fa-tiktok"></i>
                        <!-- youtube -->
                        <i class="flex items-center bg-primary2 justify-center h-9 w-9 mx-1 rounded-full fab fill-current text-white text-xl fa-youtube"></i>
                    </p>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="text-center p-6 bg-primary2">
            <span class="font-poppins text-sm leading-4 font-normal text-secondary2">© 2022</span>
            <a class="text-secondary2 font-bold font-poppins text-sm leading-4" href="#">Brawijaya Tournament</a>
            <span class="font-poppins text-sm leading-4 font-normal text-secondary2">All rights reserved</span>
        </div>
    </footer>
</body>
</html>