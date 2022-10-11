@extends('layouts.user')

@section('container') 
    <!-- section/konten beranda -->
    <section class="pt-44 bg-cover bg-no-repeat bg-center pb-40" style="background-image: url('img/KompetisiBultang.svg');">
    <div class="container md:ml-20 ">
            <div class="md:flex">
                <div class="flex w-full justify-center px-4 md:w-1/2 md:order-2">
                    <div class="">
                        <img src="img/MASKOT BT FUTSAL.svg" alt="Logo BuluTangkis" class="mx-auto items-center self-center">
                    </div>
                </div>
                <div class="w-full self-center px-4 lg:w-1/2 md:order-1">
                    <div class="mt-0 lg:mt-20 mb-1 lg:mb-5 flex justify-center md:justify-start">
                        <a href="#" class="font-poppins font-bold text-lg leading-5 text-pink2 bg-transparent border border-pink2 rounded-3xl py-1 px-8 hover:shadow-lg transition duration-300 ease-in-out" style="color:#D7137D;border-color:#D7137D">OLAHRAGA</a>
                    </div>
                    <h1 class="text-center md:text-left font-silverkids font-normal text-5xl lg:text-6xl leading-10 text-secondary2 uppercase mt-5 lg:mt-0 mb-5 md:py-4" style="text-shadow: 2px 2px 2px #D7137D;">FUTSAL</h1>
                    <p class="text-justify md:text-left font-poppins font-normal text-base text-white leading-6 mb-10">Futsal adalah permainan bola yang dimainkan oleh dua tim, yang masing-masing beranggotakan lima orang. Tujuannya adalah memasukkan bola ke gawang lawan, dengan memanipulasi bola dengan kaki. Selain lima pemain utama, setiap regu juga diizinkan memiliki pemain cadangan.</p>
                    <div class="lg:flex lg:items-center lg:space-x-2 pb-10 md:pb-0">
                        <div class="mb-10 lg:mb-0 bg-secondary2 rounded-xl py-3 px-8 text-center">
                            <a href="/login" class="font-poppins font-bold text-lg leading-5 text-primary2  hover:shadow-lg hover:bg-secondary3 transition duration-300 ease-in-out">Daftar Sekarang</a>
                        </div>
                        <div class=" bg-transparent border border-secondary2 rounded-xl py-3 px-8 text-center">
                            <a href="https://docs.google.com/document/d/1d0vkcCCZG8sbvXf1oRuFfGZ8UhawEdXm/edit?usp=sharing&ouid=104215817382893711125&rtpof=true&sd=true" target="_blank" class="font-poppins font-bold text-lg leading-5 text-secondary2  hover:shadow-lg hover:bg-primary3 transition duration-300 ease-in-out">Download Rulebook</a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <!-- section/konten timeline -->
    <section class="-mt-40 bg-no-repeat bg-cover pt-44" style="background-image: url('./img/bgTimeline2.svg');">
        <div class="container mx-auto w-full h-full">
            <div class="p-10 h-full">
                <h1 class="font-silverkids font-normal text-5xl text-center leading-10 text-primary2 mb-10 mt-20 lg:mb-10 lg:mt-40" style="text-shadow: 2px 2px 2px #FDBC28;">timeline</h1>
                <div class="flex justify-center items-center mb-10 lg:mb-20">
                    <img src="img/garis.svg">
                </div>
                <div class="flex justify-center items-center lg:mb-10">
                    <img src="img/tl-futsal.svg">
                </div>
            </div>
        </div>
    </section>

    <!-- section/konten price pool -->
    <section class="bg-primary1 pt-44" style="background-image: url('./img/Pattern.svg');">
        <div class="h-full lg:h-screen grid md:grid-cols-3 sm:gride-re">
            <!-- grid content -->
            <div class="items-center col-span-3 p-5 mr-4">
                <div class="flex justify-center items-center mt-8 mb-4">
                    <h1 class="font-silverkids font-normal text-4xl text-center leading-10 text-secondary2 mb-10 lg:mb-10" style="text-shadow: 2px 2px 2px #D7137D;">PRIZE POOL</h1>
                </div>
                <div class="flex justify-center items-center mb-10 lg:mb-20">
                    <img src="img/garis2.svg">
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 md:mt-16 mx-auto lg:mx-24">
                    <!-- card 1-->
                    <div class="flex flex-row w-full lg:w-5/6 my-5 lg:my-0 justify-center">
                        <div class="rounded-3xl shadow-lg bg-transparent border border-secondary2 mx-3 w-full lg:w-5/6 h-96">
                            <img class="rounded-t-lg w-32 h-48 block mx-auto pt-10" src="img/juara 2.svg" alt=""/>
                            <div class="p-6 items-center">
                                <h1 class="text-secondary2 text-2xl font-bold font-poppins text-center leading-7 mb-6">Second Place</h1>
                                <p class="text-pink2 text-base leading-5 font-poppins font-bold text-center mb-6" style="color:#D7137D">
                                   Coming Soon
                                </p>
                                <p class="text-secondary2 text-xs leading-4 font-poppins font-normal text-center mb-6">
                                    (Trofi + E-Sertifikat)
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                    <!-- card 2-->
                    <div class="flex flex-row w-full lg:w-5/6 my-5 lg:my-0 justify-center">
                        <div class="rounded-3xl shadow-lg bg-transparent border border-secondary2 mx-3 w-full lg:w-5/6 h-96">
                            <img class="rounded-t-lg w-32 h-48 block mx-auto pt-10" src="img/juara 1.svg" alt=""/>

                            <div class="p-6 items-center">
                                <h1 class="text-secondary2 text-2xl font-bold font-poppins text-center leading-7 mb-6">First Place</h1>
                                <p class="text-pink2 text-base leading-5 font-poppins font-bold text-center mb-6" style="color:#D7137D">
                                    Coming Soon
                                </p>
                                <p class="text-secondary2 text-xs leading-4 font-poppins font-normal text-center mb-6">
                                    (Trofi + E-Sertifikat)
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                    <!-- card 3-->
                    <div class="flex flex-row w-full lg:w-5/6 my-5 lg:my-0 justify-center">
                        <div class="rounded-3xl shadow-lg bg-transparent border border-secondary2 mx-3 w-full lg:w-5/6 h-96">
                            <img class="rounded-t-lg w-32 h-48 block mx-auto pt-10" src="img/juara 3.svg" alt=""/>
                            <div class="p-6 items-center">
                                <h1 class="text-secondary2 text-2xl font-bold font-poppins text-center leading-7 mb-6">Third Place</h1>
                                <p class="text-pink2 text-base leading-5 font-poppins font-bold text-center mb-6" style="color:#D7137D">
                                    Coming Soon
                                </p>
                                <p class="text-secondary2 text-xs leading-4 font-poppins font-normal text-center mb-6">
                                    (Trofi + E-Sertifikat)
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div>
    </section>

    <!-- section/konten kontak -->
    <section class="flex flex-row justify-center bg-primary1 pt-44 w-full" style="background-image: url('./img/Pattern.svg');">
        <div class="h-full lg:h-auto lg:mb-10">
            <!-- grid content -->
            <div class="col-span-3 p-5 mr-4">
                <div class="flex justify-center items-center mt-8 mb-4">
                    <h1 class="font-silverkids font-normal text-4xl text-center leading-10 text-secondary2 mb-10 lg:mb-10" style="text-shadow: 2px 2px 2px #D7137D;">KONTAK</h1>
                </div>
                <div class="flex justify-center items-center lg:mb-20">
                    <img src="img/garis2.svg">
                </div>
                <div class="grid md:mt-16">
                  <!-- card -->
                <div class="w-full my-5 lg:my-0">
                  <div class="rounded-3xl shadow-lg bg-secondary2 mx-auto w-96 h-40">
                    <div class="p-6">
                        <div class="flex flex-cols items-start px-10 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-6 h-6 fill-primary2 text-primary2">
                                <path d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"/>
                            </svg>
                            <p class="text-primary2 text-lg leading-5 font-poppins font-bold pl-5">
                                Jihad Fisabilillah M.M.
                            </p>
                        </div>
                        <div class="flex flex-cols items-start px-10 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="sm:w-6 h-6 fill-primary2 text-primary2">
                                <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                            </svg>
                            <p class="text-primary2 text-base leading-5 font-poppins font-normal pl-5">
                                088220294997
                            </p>
                        </div>
                        <div class="flex flex-cols items-start px-10 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="sm:w-6 h-6 fill-primary2 text-primary2">
                                <path d="M272.1 204.2v71.1c0 1.8-1.4 3.2-3.2 3.2h-11.4c-1.1 0-2.1-.6-2.6-1.3l-32.6-44v42.2c0 1.8-1.4 3.2-3.2 3.2h-11.4c-1.8 0-3.2-1.4-3.2-3.2v-71.1c0-1.8 1.4-3.2 3.2-3.2H219c1 0 2.1.5 2.6 1.4l32.6 44v-42.2c0-1.8 1.4-3.2 3.2-3.2h11.4c1.8-.1 3.3 1.4 3.3 3.1zm-82-3.2h-11.4c-1.8 0-3.2 1.4-3.2 3.2v71.1c0 1.8 1.4 3.2 3.2 3.2h11.4c1.8 0 3.2-1.4 3.2-3.2v-71.1c0-1.7-1.4-3.2-3.2-3.2zm-27.5 59.6h-31.1v-56.4c0-1.8-1.4-3.2-3.2-3.2h-11.4c-1.8 0-3.2 1.4-3.2 3.2v71.1c0 .9.3 1.6.9 2.2.6.5 1.3.9 2.2.9h45.7c1.8 0 3.2-1.4 3.2-3.2v-11.4c0-1.7-1.4-3.2-3.1-3.2zM332.1 201h-45.7c-1.7 0-3.2 1.4-3.2 3.2v71.1c0 1.7 1.4 3.2 3.2 3.2h45.7c1.8 0 3.2-1.4 3.2-3.2v-11.4c0-1.8-1.4-3.2-3.2-3.2H301v-12h31.1c1.8 0 3.2-1.4 3.2-3.2V234c0-1.8-1.4-3.2-3.2-3.2H301v-12h31.1c1.8 0 3.2-1.4 3.2-3.2v-11.4c-.1-1.7-1.5-3.2-3.2-3.2zM448 113.7V399c-.1 44.8-36.8 81.1-81.7 81H81c-44.8-.1-81.1-36.9-81-81.7V113c.1-44.8 36.9-81.1 81.7-81H367c44.8.1 81.1 36.8 81 81.7zm-61.6 122.6c0-73-73.2-132.4-163.1-132.4-89.9 0-163.1 59.4-163.1 132.4 0 65.4 58 120.2 136.4 130.6 19.1 4.1 16.9 11.1 12.6 36.8-.7 4.1-3.3 16.1 14.1 8.8 17.4-7.3 93.9-55.3 128.2-94.7 23.6-26 34.9-52.3 34.9-81.5z"/>
                            </svg>
                            <p class="text-primary2 text-base leading-5 font-poppins font-normal pl-5">
                                sedangsayang
                            </p>
                        </div>
                        <div class="flex justify-between items-center">
                        
                        </div>
                    </div>
                  </div>
                </div>
                <!-- end card -->
                </div>
              </div>
        </div>
    </section>
@endsection