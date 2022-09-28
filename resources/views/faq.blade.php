@extends('layouts.user')

@section('container') 
        <div class="flex justify-center mt-12 mb-12">
            <img src="img/faq.svg" alt="logo faq">
        </div>
        <section class="mx-5 md:mx-48">
            <div id="accordion-collapse" data-accordion="collapse">
                <!-- 1 -->
                <div>
                    <h2 id="accordion-collapse-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-poppins text-left bg-secondary2 rounded-lg"
                            data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                            aria-controls="accordion-collapse-body-1">
                            <span class="text-primary2">Apakah Brawijaya Tournament hanya ada tournament e-sport seperti
                                tahun sebelumnya?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0 text-primary2"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-1" class="" aria-labelledby="accordion-collapse-heading-1">
                        <div class="p-5 bg-white rounded-lg mb-2 text-primary2 font-poppins">
                            <p>
                                Hai Champs 🙌🏻
                            </p>
                            <p>
                                Ditahun 2022 ini Brawijaya Tournament tidak hanya perlombaan E-Sport saja tetapi ada
                                olahraga dan juga seni. Yuk tunggu apa lagi segera daftarkan diri kamu di Brawijata
                                Tournament 2022
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div>
                    <h2 id="accordion-collapse-heading-2">
                        <button type="button"
                            class="mt-6 rounded-lg flex items-center justify-between w-full p-5 font-poppins text-left text-primary2 bg-secondary2"
                            data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                            aria-controls="accordion-collapse-body-2">
                            <span class="text-primary2">Apa saja perlombaan yang akan ada di Brawijaya
                                Tournament?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0 text-primary2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                        <div class="p-5 font-poppins text-primary2 bg-white rounded-lg mb-2">
                            <p>
                                Hai Champs 🙌🏻
                            </p>
                            <p>
                                Perlombaan yang akan ada di Brawijaya Tournament 2022 ini adalah
                            </p>
                            <p>
                                Futsal
                            </p>
                            <p>
                                Basket
                            </p>
                            <p>
                                Badminton
                            </p>
                            <p>
                                PUBG
                            </p>
                            <p>
                                ML (Mobile Legend)
                            </p>
                            <p>
                                Modern Dance
                            </p>
                            <p>
                                Solo Vocal
                            </p>
                            <p>
                                Fotografi
                            </p>
                            <p>
                                Tunggu apa lagi yuk persiapkan diri kamu untuk menjadi bagian dari peserta Brawijaya
                                Tournament 2022.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="">
                    <h2 id="accordion-collapse-heading-3">
                        <button type="button"
                            class="mt-6 rounded-lg flex items-center justify-between w-full p-5 font-poppins text-left text-primary2 bg-secondary2"
                            data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                            aria-controls="accordion-collapse-body-3">
                            <span class="text-primary2">Siapa saja yang boleh mengikuti Brawijaya Tournament?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0 text-primary2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                        <div class="p-5 font-poppins text-primary2 bg-white rounded-lg mb-2">
                            <p>
                                Hai Champs🙌🏻
                            </p>
                            <p>
                                KETENTUAN UMUM PENDAFTARAN PESERTA
                                BRAWIJAYA TOURNAMENT 2022
                            </p>
                            <p>
                                1. Pendaftar merupakan Mahasiswa AKTIF di seluruh Indonesia maksimal semester 7 untuk S1
                                dan semester 4 untuk D3.
                            </p>
                            <p>
                                2. Batas usia maksimal pendaftar adalah 23 tahun.
                            </p>
                            <p>
                                3. Badan dalam kondisi sehat, segar, dan bugar saat mengikuti perlombaan.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div>
                    <h2 id="accordion-collapse-heading-4">
                        <button type="button"
                            class="mt-6 rounded-lg flex items-center justify-between w-full p-5 font-poppins text-left text-primary2 bg-secondary2"
                            data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                            aria-controls="accordion-collapse-body-4">
                            <span class="text-primary2">Apakah Brawijaya Tournament dilaksanakan offline?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0 text-primary2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                        <div class="p-5 font-poppins text-primary2 bg-white rounded-lg mb-2">
                            <p>
                                Hai Champs🙌🏻
                            </p>
                            <p>
                                Pada tahun 2022 ini Brawijaya Tournament akan diselenggarakan secara hybrid yaa, jangan
                                lupa pantengin terus sosial media Brawijaya Tournament untuk info lebih lanjut
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div>
                    <h2 id="accordion-collapse-heading-5">
                        <button type="button"
                            class="mt-6 rounded-lg flex items-center justify-between w-full p-5 font-poppins text-left text-primary2 bg-secondary2"
                            data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                            aria-controls="accordion-collapse-body-5">
                            <span class="text-primary2">Bagaimana alur pendaftaran Brawijaya Tournament?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0 text-primary2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                        <div class="p-5 font-poppins text-primary2 bg-white rounded-lg mb-2">
                            <p>
                                Hai Champs 🙌🏻
                            </p>
                            <p>
                                Semua pendaftaran lomba Brawijaya Tournament akan dilakukan diwebsite kami.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 6 -->
                <div>
                    <h2 id="accordion-collapse-heading-6">
                        <button type="button"
                            class="mt-6 rounded-lg flex items-center justify-between w-full p-5 font-poppins text-left text-primary2 bg-secondary2"
                            data-accordion-target="#accordion-collapse-body-6" aria-expanded="false"
                            aria-controls="accordion-collapse-body-6">
                            <span class="text-primary2">Berapa lama rangkaian Brawijaya Tournament berlangsung?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0 text-primary2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-6">
                        <div class="p-5 font-poppins text-primary2 bg-white rounded-lg mb-2">
                            <p>
                                Hai Champs🙌🏻
                            </p>
                            <p>
                                Rangkaian Brawijaya Tournament dilaksanakan pada 14-27 Oktober 2022.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 7 -->
                <div>
                    <h2 id="accordion-collapse-heading-7">
                        <button type="button"
                            class="mt-6 rounded-lg flex items-center justify-between w-full p-5 font-poppins text-left text-primary2 bg-secondary2"
                            data-accordion-target="#accordion-collapse-body-7" aria-expanded="false"
                            aria-controls="accordion-collapse-body-7">
                            <span class="text-primary2">Dimana Brawijaya Tournament diselenggarakan?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0 text-primary2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-7" class="hidden" aria-labelledby="accordion-collapse-heading-7">
                        <div class="p-5 font-poppins text-primary2 bg-white rounded-lg mb-2">
                            <p>
                                Hai Champs 🙌🏻
                            </p>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
                <!-- 8 -->
                <div>
                    <h2 id="accordion-collapse-heading-8">
                        <button type="button"
                            class="mt-6 rounded-lg flex items-center justify-between w-full p-5 font-poppins text-left text-primary2 bg-secondary2"
                            data-accordion-target="#accordion-collapse-body-8" aria-expanded="false"
                            aria-controls="accordion-collapse-body-8">
                            <span class="text-primary2">Bagaimana cara mendapatkan informasi tentang pendaftaran
                                Brawijaya Tournament?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0 text-primary2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-8" class="hidden" aria-labelledby="accordion-collapse-heading-8">
                        <div class="p-5 font-poppins text-primary2 bg-white rounded-lg mb-2">
                            <p>
                                Hai Champs 🙌🏻
                            </p>
                            <p>
                                Informasi pendaftaran Brawijaya Tournament 2022 dapat diakses melakui website ini yaa,
                                tunggu apa lagi segera persiapkan diri kamu untuk menjadi bagian dari Brawijaya
                                Tournament 2022.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 9 -->
                <div>
                    <h2 id="accordion-collapse-heading-9">
                        <button type="button"
                            class="mt-6 rounded-lg flex items-center justify-between w-full p-5 font-poppins text-left text-primary2 bg-secondary2"
                            data-accordion-target="#accordion-collapse-body-9" aria-expanded="false"
                            aria-controls="accordion-collapse-body-9">
                            <span class="text-primary2">Apakah pendaftaran Brawijaya Tournament memerlukan biaya?
                            </span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0 text-primary2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-9" class="hidden" aria-labelledby="accordion-collapse-heading-9">
                        <div class="p-5 font-poppins text-primary2 bg-white rounded-lg mb-2">
                            <p>
                                Hai Champs 🙌🏻
                            </p>
                            <p>
                                Untuk biaya pendaftaran perlombaan kami sebagai berikut:
                            </p>
                            <p>
                                Futsal (1,2juta)
                            </p>
                            <p>
                                Basket (1 juta)
                            </p>
                            <p>
                                Badminton Single (250 ribu)
                            </p>
                            <p>
                                Badminton Double (300 ribu)
                            </p>
                            <p>
                                Modern Dance (75 ribu) (online)
                            </p>
                            <p>
                                Solo Vocal (50 ribu) (online)
                            </p>
                            <p>
                                Fotografi (25 ribu) (online)
                            </p>
                            <p>
                                PUBG (100 ribu) (online)
                            </p>
                            <p>
                                Mobile Legend (75 ribu) (online)
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 10 -->
                <div>
                    <h2 id="accordion-collapse-heading-10">
                        <button type="button"
                            class="mt-6 rounded-lg flex items-center justify-between w-full p-5 font-poppins text-left text-primary2 bg-secondary2"
                            data-accordion-target="#accordion-collapse-body-10" aria-expanded="false"
                            aria-controls="accordion-collapse-body-10">
                            <span class="text-primary2">Kapan Brawijaya Tournament dilaksanakan? </span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0 text-primary2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-10" class="hidden" aria-labelledby="accordion-collapse-heading-10">
                        <div class="p-5 font-poppins text-primary2 bg-white rounded-lg mb-2">
                            <p>
                                Hai Champs 🙌🏻
                            </p>
                            <p>
                                11 Oktober 2022 Technical Meeting (Seni)
                            </p>
                            <p>
                                13 Oktober 2022 Technical Meeting (Olahraga)
                            </p>
                            <p>
                                14-27 Oktober 2022 Main Event & Penjurian
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 11 -->
                <div>
                    <h2 id="accordion-collapse-heading-11">
                        <button type="button"
                            class="mt-6 rounded-lg flex items-center justify-between w-full p-5 font-poppins text-left text-primary2 bg-secondary2"
                            data-accordion-target="#accordion-collapse-body-11" aria-expanded="false"
                            aria-controls="accordion-collapse-body-11">
                            <span class="text-primary2">Apakah Brawijaya Tournament dapat disaksikan secara
                                langsung?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0 text-primary2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-11" class="hidden" aria-labelledby="accordion-collapse-heading-11">
                        <div class="p-5 font-poppins text-primary2 bg-white rounded-lg mb-2">
                            <p>
                                Hai Champs 🙌🏻
                            </p>
                            <p>
                                Pertandingan Brawijaya Tournament dapat disaksikan secara langsung, kami tunggu
                                kedatanganmu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection