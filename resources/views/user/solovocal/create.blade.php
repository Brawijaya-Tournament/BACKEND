@extends('layouts.kompetisi')

@section('container') 
            <!-- main content -->
            <div class="md:grid md:grid-cols-1 ">
    
                <!-- grid content peserta -->
                <div class="grid-2 md:grid-3 col-span-2 p-10 mb-20">
                    <div class="flex items-center ">
                        <i class="fa-solid fa-angle-left text-white text-2xl"></i>
                        <p class="text-white font-bold text-2xl px-3">PENDAFTARAN SOLO VOCAL</p>
                    </div>
                    @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('message') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                 <!-- form informasi tim -->
                 <form method="post" action="/solo-vocal/register" class="mb-5" enctype="multipart/form-data">
                    @csrf
                    <div class="flex-auto justify-between">
                        <p class="pt-4 font-bold pb-2 text-lg text-secondary2">INFORMASI TIM</p>
                        <hr class="mb-5">
                        <div class="md:flex justify-between">
                            <div class="font-poppins text-secondary2 px-1 md:px-5 lg:px-2 lg:w-full">
                                <label
                                    class="space-x-9 w-full block mb-2 text-base font-medium text-secondary2 leading-5 font-poppins"
                                    for="grid-last-name">
                                    Asal Universitas
                                </label>
                                <input type="text"
                                    class="appearance-none block w-full bg-primary1 text-secondary2 border border-secondary2 rounded-lg py-3 px-4 mb-3 leading-5 focus:outline-none "
                                    id="grid-last-name place" placeholder="Masukkan asal universitas" name="universitas" value="{{ old('universitas') }}">
                                @error('universitas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- form ifnromasi official  -->
                    <div class="official pt-5">
                        <p class="pt-4 font-bold pb-2 text-lg text-secondary2">INFORMASI PESERTA</p>
                        <hr class="mb-5">
                        <!-- row1 -->
                        {{-- Looping tabel --}}
                        @for($i = 1; $i <= 1; $i++)
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
                                    id="grid-first-name" type="text" placeholder="Masukkan nama" name="{{ "nama" . $i }}" value="{{ old('nama' . $i) }}">
                                @error('nama' . $i)
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- No HandPhone -->
                            <div class="font-poppins text-secondary2 px-1 md:px-5 lg:px-2 lg:w-full">
                                <label class="pace-x-9 w-11/12 block mb-2 text-sm font-medium text-secondary2 dark:text-secondary2"
                                    for="link_berkas">Nomor HandPhone</label>
                                    <input type="text"
                                    class="appearance-none  block w-full bg-primary1 text-secondary2 border border-secondary2 rounded-lg py-3 px-4 mb-3 leading-5 focus:outline-none"
                                    id="grid-last-name place" placeholder="Masukkan nomor handphone" name="{{ "hp" . $i }}" value="{{ old('hp' . $i) }}">
                                @error('hp' . $i)
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                        id="grid-state" name="{{ "gender" . $i }}" value="{{ old('gender' . $i) }}">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Fakultas -->
                            <div class="font-poppins text-secondary2 px-1 md:px-5 lg:px-2 lg:w-full">
                                <label
                                    class="space-x-9 w-11/12 block mb-2 text-base font-medium text-secondary2 leading-5 font-poppins"
                                    for="grid-last-name">
                                    Fakultas
                                </label>
                                <input type="text"
                                    class="appearance-none block w-full bg-primary1 text-secondary2 border border-secondary2 rounded-lg py-3 px-4 mb-3 leading-5 focus:outline-none "
                                    id="grid-last-name place" placeholder="Masukkan fakultas" name="{{ "fakultas" . $i }}" value="{{ old('fakultas' . $i) }}">
                                @error('fakultas' . $i)
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    id="grid-first-name" type="text" placeholder="Masukkan email" name="{{ "email" . $i }}" value="{{ old('email' . $i) }}">
                                @error('email' . $i)
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    id="grid-last-name place" placeholder="Masukkan angkatan" name="{{ "angkatan" . $i }}" value="{{ old('angkatan' . $i) }}">
                                @error('angkatan' . $i)
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="md:flex justify-between">
                            <!-- nim -->
                            <div class="font-poppins text-secondary2 px-1 lg:px-2 lg:w-full ">
                                <label
                                    class="space-x-9 w-11/12 block mb-2 text-base font-medium text-secondary2 leading-5 font-poppins"
                                    for="grid-first-name">
                                    Nim
                                </label>
                                <input
                                    class="appearance-none block w-full bg-primary1 text-secondary2 border border-secondary2 rounded-lg py-3 px-4 mb-3 leading-5 focus:outline-none"
                                    id="grid-first-name" value="" type="text" placeholder="Masukkan Nim" name="{{ "nim" . $i }}" value="{{ old('nim' . $i) }}">
                                @error('nim' . $i)
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- berkas -->
                            <div class="font-poppins text-secondary2 px-1 md:px-5 lg:px-2 lg:w-full">
                                <label
                                    class="space-x-9 w-11/12 block mb-2 text-base font-medium text-secondary2 leading-5 font-poppins"
                                    for="grid-last-name">
                                    Upload Berkas Individu
                                </label>
                                <input type="text"
                                    class="appearance-none block w-full bg-primary1 text-secondary2 border border-secondary2 rounded-lg py-3 px-4 mb-3 leading-5 focus:outline-none "
                                    id="grid-last-name place" placeholder="Masukkan link gdrive" name="{{ "link_gdrive" . $i }}" value="{{ old('link_gdrive' . $i) }}">
                                @error('link_gdrive' . $i)
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        @endfor
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
                                        <li>Unduh Rulebook
                                            <a href="https://docs.google.com/file/d/15IPVb0fBQ-C3nP2690nDUPMgeYpWNIs3/edit?filetype=msword"
                                            target="_blank"><strong>klik disini.</strong></a>
                                        </li>
                                    </ol>
                                </div>
                                <div class="md:w-[45%] w-full py-5 md:py-0 flex md:justify-end items-center md:pl-40">
                                    <button class="px-10 py-2 font-bold text-primary2 bg-secondary2 rounded-xl font-poppins" type="submit">
                                        Simpan & Lanjut
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection
