@extends('layouts.user')

@section('container') 
<div class="bg-primary1 bg-cover bg-no-repeat bg-center " style="background-image:url('img/bg-hero.svg') ; ">
<!-- section home -->
<div class="container mx-auto py-10">
    <div class="md:absolute">
        <img src="img/bt-home.svg" alt="">
        <img src="img/tagline.svg" alt="">
    </div>
</div>
<img src="img/hero-image.svg" alt="" class="object-contain ">
</div>

<!-- section tentang kami -->
<div style="background-color:#007049 ;" >
    <div class="container mx-auto py-20">
        <div class="about-us ">
            <img src="img/tentang.svg" alt="" class="m-auto">
            <p class="text-secondary2 text-center font-poppins text-lg py-10 px-10">Brawijaya Tournament merupakan program kerja Kementerian
                Pemuda, Seni, dan Olahraga Eksekutif Mahasiswa Universitas Brawijaya. Bentuk kegiatan yang  diselenggarakan adalah kompetisi olahraga dan seni bagi mahasiswa yang berasal dari seluruh perguruan tinggi yang ada di Indonesia. Brawijaya Tournament ini bertujuan untuk memberikan kesempatan bagi para mahasiswa untuk dapat berprestasi sekaligus 
                mengasah minat dan bakat di bidang olahraga dan seni.</p>
        </div>
    </div>
</div>
<img src="img/bd-green.svg" alt="" class="-mt-16 ">

    <!-- section maskot -->
<div class="maskot bg-primary1 md:-mt-16  ">
    <div class=" z-50 md:flex md:w-full md:justify-between md:pt-10">
        <img src="img/Group 1193.svg" alt="" class="w-1/3  float-left">
        <img src="img/Group 1194.svg" alt="" class="w-1/3  float-right right-0">
    </div>
    
    <div class=" container mx-auto py-20 md:py-0 md:mb-28">
        <img src="img/maskot.svg" alt="" class="mx-auto">
        <div class="md:grid md:grid-cols-3 items-center">
            <div class="">
                <img src="img/emmet.svg" alt="">
            </div>
            <div class="md:col-span-2">
                <p class="text-secondary2 text-justify md:text-left font-poppins text-lg p-10">Emmet merupakan maskot dari kegiatan Brawijaya Tournament 2022, yang dilambangkan dengan Burung Manyar, fauna khas dari Malang yang merupakan kota asal penyelenggaraan Brawijaya Tournament 2022. Burung Manyar adalah burung yang kuat dalam melewati masa transisi dan mampu mencapai titik tertingginya, yaitu menggapai prestasi. Emmet dilambangkan sebagai maskot yang pintar membuat strategi apik, merujuk pada cabang perlombaan olahraga yang di dalamnya membutuhkan strategi untuk mencapai kemenangan. Selain itu, Ia juga merupakan pengenyam andal yang dapat melambangkan cabang perlombaan seni. Sayap yang berjumlah 8 helai melambangkan 8 cabang perlombaan yang ada di Brawijaya Tournament 2022.</p>
            </div>
    </div>
</div>
<!-- section timeline -->
<div class="timeline rounded-t-3xl" style="background-color: #03BCDF ;" >
    <div class="container mx-auto py-32 ">
        <img src="img/timeline.svg" alt="" class="mx-auto ">
        <img src="img/Timeline-mobile.svg" alt="" class="mx-auto md:hidden py-20">
        <img src="img/timeline-laptop.svg" alt="" class="mx-auto  hidden md:flex md:py-20">
    </div>

</div>
<!-- section tentang kami -->
<img src="img/awan.svg" alt="" class="-mt-32">
<div class="kompetisi bg-primary2 -mt-32 ">
    
    <div class="container mx-auto py-10">
        <img src="img/kompetisi.svg" alt="" class="mx-auto">

        <div class="content-kompetisi">
            <div class="wrapper py-20 overflow-x-scroll">
                    <div class="flex carousel">
                        <div>  
                        <div class="w-full my-5 lg:my-0">
                        <div class="rounded-3xl shadow-lg mx-3 h-96" style="background-color:#FFF2D4 ;">
                            <div class="p-6">
                            <h1 class="text-primary2 text-2xl font-bold uppercase leading-6  text-center">BULUTANGKIS</h1>
                            <img class=" rounded-t-lg w-full block mx-auto" src="img/MASKOT BADMINTON.svg" alt=""/>
                            <div class="flex justify-center items-center pb-4">
                                <button type="button" class=" inline-block px-10 py-3 bg-primary2 font-poppins  text-lg leading-5 rounded-xl shadow-md hover:bg-secondary2 hover:text-primary2 hover:shadow-lg focus:bg-primary3 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary2 active:shadow-lg transition duration-150 ease-in-out font-bold" style="color:#FFF2D4"><a href="/bulutangkis"> Selengkapnya</a></button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                        <div>
                        <div class="w-full my-5 lg:my-0">
                            <div class="rounded-3xl shadow-lg mx-3 h-96" style="background-color:#FFF2D4 ;">
                                <div class="p-6">
                                <h1 class="text-primary2 text-2xl font-bold uppercase leading-6  text-center">FUTSAL</h1>
                                <img class=" rounded-t-lg w-full block mx-auto" src="img/MASKOT BT FUTSAL.svg" alt=""/>
                                <div class="flex justify-center items-center pb-4">
                                    <button type="button" class=" inline-block px-10 py-3 bg-primary2 font-poppins  text-lg leading-5 rounded-xl shadow-md hover:bg-secondary2 hover:text-primary2 hover:shadow-lg focus:bg-primary3 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary2 active:shadow-lg transition duration-150 ease-in-out font-bold" style="color:#FFF2D4"><a href="/futsal"> Selengkapnya</a></button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div>
                        <div class="w-full my-5 lg:my-0">
                            <div class="rounded-3xl shadow-lg mx-3 h-96" style="background-color:#FFF2D4 ;">
                                <div class="p-6">
                                <h1 class="text-primary2 text-2xl font-bold uppercase leading-6  text-center">BASKET</h1>
                                <img class=" rounded-t-lg w-full block mx-auto" src="img/MASKOT BT BASKET.svg" alt=""/>
                                <div class="flex justify-center items-center pb-4">
                                    <button type="button" class=" inline-block px-10 py-3 bg-primary2 font-poppins  text-lg leading-5 rounded-xl shadow-md hover:bg-secondary2 hover:text-primary2 hover:shadow-lg focus:bg-primary3 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary2 active:shadow-lg transition duration-150 ease-in-out font-bold" style="color:#FFF2D4"><a href="/basket"> Selengkapnya</a></button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div>
                        <div class="w-full my-5 lg:my-0">
                            <div class="rounded-3xl shadow-lg mx-3 h-96" style="background-color:#FFF2D4 ;">
                                <div class="p-6">
                                <h1 class="text-primary2 text-2xl font-bold uppercase leading-6  text-center">FOTOGRAFI</h1>
                                <img class=" rounded-t-lg w-full block mx-auto" src="img/MASKOT BT FOTOGRAFI.svg" alt=""/>
                                <div class="flex justify-center items-center pb-4">
                                    <button type="button" class=" inline-block px-10 py-3 bg-primary2 font-poppins  text-lg leading-5 rounded-xl shadow-md hover:bg-secondary2 hover:text-primary2 hover:shadow-lg focus:bg-primary3 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary2 active:shadow-lg transition duration-150 ease-in-out font-bold" style="color:#FFF2D4"><a href="/fotografi"> Selengkapnya</a></button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div>
                        <div>
                            <div class="w-full my-5 lg:my-0">
                                <div class="rounded-3xl shadow-lg mx-3 h-96" style="background-color:#FFF2D4 ;">
                                    <div class="p-6">
                                    <h1 class="text-primary2 text-2xl font-bold uppercase leading-6  text-center">SOLO VOKAL</h1>
                                    <img class=" rounded-t-lg w-full block mx-auto" src="img/MASKOT BT SOLO VOCAL.svg" alt=""/>
                                    <div class="flex justify-center items-center pb-4">
                                        <button type="button" class=" inline-block px-10 py-3 bg-primary2 font-poppins  text-lg leading-5 rounded-xl shadow-md hover:bg-secondary2 hover:text-primary2 hover:shadow-lg focus:bg-primary3 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary2 active:shadow-lg transition duration-150 ease-in-out font-bold" style="color:#FFF2D4"><a href="/solo-vocal"> Selengkapnya</a></button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        </div>
                        <div>
                            <div class="w-full my-5 lg:my-0">
                                <div class="rounded-3xl shadow-lg mx-3 h-96" style="background-color:#FFF2D4 ;">
                                    <div class="p-6">
                                    <h1 class="text-primary2 text-2xl font-bold uppercase leading-6  text-center">MODERN DANCE</h1>
                                    <img class=" rounded-t-lg w-full block mx-auto" src="img/MASKOT BT MODERN DANCE.svg" alt=""/>
                                    <div class="flex justify-center items-center pb-4">
                                        <button type="button" class=" inline-block px-10 py-3 bg-primary2 font-poppins  text-lg leading-5 rounded-xl shadow-md hover:bg-secondary2 hover:text-primary2 hover:shadow-lg focus:bg-primary3 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary2 active:shadow-lg transition duration-150 ease-in-out font-bold" style="color:#FFF2D4"><a href="/modern-dance"> Selengkapnya</a></button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="w-full my-5 lg:my-0">
                                <div class="rounded-3xl shadow-lg mx-3 h-96" style="background-color:#FFF2D4 ;">
                                    <div class="p-6">
                                    <h1 class="text-primary2 text-2xl font-bold uppercase leading-6  text-center">MOBILE LEGENDS</h1>
                                    <img class=" rounded-t-lg w-full block mx-auto" src="img/MASKOT BT ML.svg" alt=""/>
                                    <div class="flex justify-center items-center pb-4">
                                        <button type="button" class=" inline-block px-10 py-3 bg-primary2 font-poppins  text-lg leading-5 rounded-xl shadow-md hover:bg-secondary2 hover:text-primary2 hover:shadow-lg focus:bg-primary3 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary2 active:shadow-lg transition duration-150 ease-in-out font-bold" style="color:#FFF2D4"><a href="/mobilelegends"> Selengkapnya</a></button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="w-full my-5 lg:my-0">
                                <div class="rounded-3xl shadow-lg mx-3 h-96" style="background-color:#FFF2D4 ;">
                                    <div class="p-6">
                                    <h1 class="text-primary2 text-2xl font-bold uppercase leading-6  text-center">PUBG MOBILE</h1>
                                    <img class=" rounded-t-lg w-full block mx-auto" src="img/MASKOT PUBG.svg" alt=""/>
                                    <div class="flex justify-center items-center pb-4">
                                        <button type="button" class=" inline-block px-10 py-3 bg-primary2 font-poppins  text-lg leading-5 rounded-xl shadow-md hover:bg-secondary2 hover:text-primary2 hover:shadow-lg focus:bg-primary3 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary2 active:shadow-lg transition duration-150 ease-in-out font-bold" style="color:#FFF2D4"><a href="/pubg"> Selengkapnya</a></button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        </div>
                        <div>
                        
                    
                    </div>
                </div>
        </div>
        
            
                

        <img src="img/sponsorship.svg" alt="" class="mx-auto pt-20">
        <div class="bg-secondary2 rounded-2xl my-10 mx-5 ">
            <p class="text-center py-5 font-bold md:text-xl text-lg">Calling all sponsors and media partners</p>
        </div>
    </div>

</div>
@endsection