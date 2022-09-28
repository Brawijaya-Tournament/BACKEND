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
    <script src="https://kit.fontawesome.com/a951d809d8.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Roboto&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <title>Brawijaya Tournament</title>
</head>
<body class="bg-primary1">
    <!-- navbar -->
    <nav class="bg-primary2 px-10 sm:px-4 py-2.5 shadow-lg ">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <!-- logo -->
            <a href="#" class="flex items-center ml-10">
                <img src="img/logoNavbar.svg" class="mr-3 h-16 sm:h-9" alt="Brawijaya Tournament Logo">
                <img src="img/bt.svg" alt="" class="hidden mr-3 sm:flex md:h-10" srcset="">
            </a>
            <!-- button daftar dan masuk -->
            <div class="flex items-center space-x-2 md:order-2 mr-10">
                <button type="button" class="font-poppins font-bold text-lg leading-5 rounded-xl text-secondary2 bg-primary2 border-2 border-secondary2 hover:bg-secondary3 hover:text-primary3 focus:ring-4 focus:outline-none focus:ring-blue-300 px-5 py-2.5 text-center mr-10 md:mr-0 hidden lg:block sm:mx-auto">Keluar</button>
                <button data-collapse-toggle="navbar-cta" type="button" class="mobile-menu-button inline-flex items-center p-2 text-sm text-secondary2 rounded-lg md:hidden focus:outline-none focus:ring-2" aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <!-- menu -->
            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col p-6 mt-4 bg-primary2 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-primary2">
                    <li>
                        <button type="button" class="font-poppins font-bold text-lg leading-5 rounded-xl text-primary2 bg-secondary2 hover:bg-primary3 hover:text-secondary3 border-2 border-secondary2 focus:ring-4 focus:outline-none focus:ring-blue-300 px-5 py-2.5 text-center mr-10 md:mr-0 w-full block lg:hidden">Keluar</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- section/konten -->
    <section class="bg-primary1">
        <div class="md:flex-row ">
            <!-- grid sidebar -->
            <div class="relative md:flex">
            <!-- sidebar -->
            <div class="sidebar min-h-screen z-50 bg-primary2 text-blue-100 w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
              <!-- nav -->
              <nav class="text-white ">
                <div class="flex py-3  font-extrabold pl-3 pr-20   transition duration-200 hover:bg-blue-700 hover:text-white hover:border-l-2 hover:border-secondary1">
                    <img src="./img/IconHome.svg" alt="">
                    <a href="#" class="block  px-4 rounded">DASHBOARD</a>
                </div>
                <div class="flex  py-3  font-extrabold pl-3 pr-20  transition duration-200 hover:bg-blue-700 hover:text-white hover:border-l-2 hover:border-secondary1">
                    <img src="./img/IconAnnouncement.svg" alt="">
                    <a href="#" class="block  px-4 rounded">PENGUMUMAN</a>
                </div>
                <hr class="mt-3 mb-2 border-secondary1 text-secondary1 bg-secondary1">
                <div class="flex py-3  font-extrabold pl-3 pr-20   transition duration-200 hover:bg-blue-700 hover:text-white hover:border-l-2 hover:border-secondary1">
                    <img src="./img/IconWarn.svg" alt="">
                    <a href="#" class="block  px-4 rounded">LAPOR KENDALA</a>
                </div>
                <button class="bg-secondary1 w-full rounded-md py-2 my-4 md:hidden ">
                    <a href="#" class="block  px-4 rounded text-center font-semibold">KELUAR</a>
                </button>
               
                </nav>
            </div>
            <!-- main content -->
            <div class="md:grid md:grid-cols-1 ">
    
                <!-- grid content peserta -->
                <div class="grid-2 md:grid-3 col-span-2 p-10 mb-20">
                    <div class="flex items-center ">
                        <i class="fa-solid fa-angle-left text-white text-2xl"></i>
                        <p class="text-white font-bold text-2xl px-3">PENDAFTARAN BASKET</p>
                    </div>
                 <!-- form informasi tim -->
                 <div class="flex-auto justify-between">
                    <p class="pt-4 font-bold pb-2 text-lg text-secondary2">INFORMASI TIM</p>
                    <hr class="mb-5">
                    <div class="md:flex justify-between">
                        <div class="font-poppins text-secondary2 px-1 lg:px-2 lg:w-full ">
                            <label
                                class="space-x-9 w-11/12 block mb-2 text-base font-medium text-secondary2 leading-5 font-poppins"
                                for="grid-first-name">
                                Nama Tim
                            </label>
                            <input
                                class="appearance-none block w-full bg-primary1 text-secondary2 border border-secondary2 rounded-lg py-3 px-4 mb-3 leading-5 focus:outline-none"
                                id="grid-first-name" type="text" placeholder="Masukkan nama tim">
                        </div>
                        <div class="font-poppins text-secondary2 px-1 md:px-5 lg:px-2 lg:w-full">
                            <label
                                class="space-x-9 w-full block mb-2 text-base font-medium text-secondary2 leading-5 font-poppins"
                                for="grid-last-name">
                                Asal Universitas
                            </label>
                            <input type="text"
                                class="appearance-none block w-full bg-primary1 text-secondary2 border border-secondary2 rounded-lg py-3 px-4 mb-3 leading-5 focus:outline-none "
                                id="grid-last-name place" placeholder="Masukkan asal universitas">
                        </div>
                    </div>
                </div>
                <!-- form ifnromasi official  -->
                <div class="official pt-5">
                    <p class="pt-4 font-bold pb-2 text-lg text-secondary2">INFORMASI OFFICIAL</p>
                    <hr class="mb-5">
                    <!-- row1 -->
                    <div class="md:flex justify-between">
                        <!-- nama -->
                        <div class="font-poppins text-secondary2 px-1 lg:px-2 lg:w-full ">
                            <label
                                class="space-x-9 w-11/12 block mb-2 text-base font-medium text-secondary2 leading-5 font-poppins"
                                for="grid-first-name">
                                Nama
                            </label>
                            <input
                                class="appearance-none block w-full bg-primary1 text-secondary2 border border-secondary2 rounded-lg py-3 px-4 mb-3 leading-5 focus:outline-none"
                                id="grid-first-name" type="text" placeholder="Masukkan nama">
                        </div>
                        <!-- fakultas -->
                        <div class="font-poppins text-secondary2 px-1 md:px-5 lg:px-2 lg:w-full">
                            <label
                                class="space-x-9 w-11/12 block mb-2 text-base font-medium text-secondary2 leading-5 font-poppins"
                                for="grid-last-name">
                                Fakultas
                            </label>
                            <input type="text"
                                class="appearance-none block w-full bg-primary1 text-secondary2 border border-secondary2 rounded-lg py-3 px-4 mb-3 leading-5 focus:outline-none "
                                id="grid-last-name place" placeholder="Masukkan fakultas">
                        </div>
                    </div>
                    <!-- row2 -->
                    <div class="md:flex justify-between">
                        <!-- jenis kelamin -->
                        <div class="font-poppins text-secondary2 px-1 lg:px-2 lg:w-full ">
                            <label
                                class="space-x-9 w-11/12 block mb-2 text-base font-medium text-secondary2 leading-5 font-poppins"
                                for="grid-first-name">
                                Jenis Kelamin
                            </label>
                            <div class="relative">
                                <select
                                    class="w-full mb-2 bg-primary1 border border-secondary2 text-secondary2 py-2.5 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-primary1 focus:border-secondary2"
                                    id="grid-state">
                                    <option>Perempuan</option>
                                    <option>Laki-laki</option>
                                </select>
                            </div>
                        </div>
                        <!-- angkatan -->
                        <div class="font-poppins text-secondary2 px-1 md:px-5 lg:px-2 lg:w-full">
                            <label
                                class="space-x-9 w-11/12 block mb-2 text-base font-medium text-secondary2 leading-5 font-poppins"
                                for="grid-last-name">
                                Angkatan
                            </label>
                            <input type="text"
                                class="appearance-none  block w-full bg-primary1 text-secondary2 border border-secondary2 rounded-lg py-3 px-4 mb-3 leading-5 focus:outline-none"
                                id="grid-last-name place" placeholder="Masukkan angkatan">
                        </div>
                    </div>
                    <div class="md:flex justify-between">
                        <!-- email -->
                        <div class="font-poppins text-secondary2 px-1 lg:px-2 lg:w-full ">
                            <label
                                class="space-x-9 w-11/12 block mb-2 text-base font-medium text-secondary2 leading-5 font-poppins"
                                for="grid-first-name">
                                Email
                            </label>
                            <input
                                class="appearance-none block w-full bg-primary1 text-secondary2 border border-secondary2 rounded-lg py-3 px-4 mb-3 leading-5 focus:outline-none"
                                id="grid-first-name" type="text" placeholder="Masukkan email">
                        </div>
                        <!-- berkas -->
                        <div class="font-poppins text-secondary2 px-1 md:px-5 lg:px-2 lg:w-full">
                            <label class="pace-x-9 w-11/12 block mb-2 text-sm font-medium text-secondary2 dark:text-secondary2"
                                for="file_input">Upload Berkas Individu*</label>
                            <input
                                class="px-5 py-2.5 block w-full text-sm text-secondary2 bg-primary1 rounded-lg border border-secondary2 cursor-pointer dark:text-primary2 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="file_input" type="file">
                        </div>
                    </div>
                         <!-- Catatan -->
                         <div class="md:flex md:mt-auto py-4 text-white justify-center md:pl-12 pr-10 md:justify-between">
                            <div class="w-full md:w-[50%] md:pr-10">
                                <h3 class="font-bold">Catatan</h3>
                                <ol class="list-decimal md:pl-4 md:space-y-2 md:pr-10">
                                    <li class="text-justify">
                                        (*) Menjadikan satu berkas-berkas yang dibutuhkan (Scan KTM,
                                        Sertifikat Vaksin minimal dosis 2, Surat Keterangan Sehat, dan
                                        Foto Diri 3x4) dan memasukkannya dalam Google Drive serta
                                        upload link Google Drive yang berisi folder berkas-berkas
                                        tersebut pada tempat yang telah disediakan.
                                    </li>
                                    <li>Unduh Rulebook <strong>klik disini</strong>.</li>
                                </ol>
                            </div>
                            <div class="md:w-[45%] w-full py-5 md:py-0 flex md:justify-end items-center md:pl-40">
                                <button class="px-10 py-2 font-bold text-primary2 bg-secondary2 rounded-xl font-poppins">
                                    Simpan&Lanjut
                                </button>
                            </div>
                        </div>
                </div>
                

                </div>
                
            </div>
        </div>
    </section>
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

<script>
const btn = document.querySelector('.mobile-menu-button')
const sidebar = document.querySelector('.sidebar')

btn.addEventListener('click', e => {
  e.stopPropagation()
  sidebar.classList.toggle('-translate-x-full')
})

document.addEventListener('click', () => {
  sidebar.classList.add('-translate-x-full')
})

</script>
</body>
</html>