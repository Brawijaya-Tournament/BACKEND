@extends('layouts.user')

@section('container') 
    <section class="bg-primary1">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto my-12 md:h-screen lg:py-0">
            <div class="w-screen bg-secondary2 rounded-3xl shadow md:mt-0 max-w-xs sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <!-- judul -->
                    <h1 class="uppercase font-silverkids text-4xl font-bold leading-10 tracking-widest text-center text-primary2 md:text-2xl" style="text-shadow: 2px 2px 2px #D7137D;">
                        Daftar
                    </h1>
                    <!-- form -->
                    <form class="space-y-2 md:space-y-6" action="/register" method="post">
                        @csrf
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
                            <input type="confirm-password" name="confirm_password" id="confirm-password" placeholder="Masukkan kata sandi" class="bg-secondary2 border border-primary2 text-base font-normal text-primary3 leading-5 font-poppins placeholder-primary3 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                        </div>
                        <div class="flex items-start px-5 lg:px-12 lg:w-full">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox h-6 w-6 checkbox-checkbox text-primary2 border border-primary2" checked>
                                <span class="ml-2 font-normal text-sm font-poppins leading-4 text-primary2">Saya setuju dengan Syarat, Ketentuan, dan Kebijakan Privasi yang Berlaku.</span>
                            </label>
                        </div>
                        <button type="submit" class="mx-5 w-10/12 lg:mx-12 lg:w-9/12 text-secondary2 bg-primary2 hover:bg-secondary3 hover:text-primary3 font-poppins focus:ring-4 focus:outline-none focus:ring-primary-300 font-bold rounded-xl text-lg leading-5 py-2.5 text-center">Buat Akun</button>
                        <p class="font-poppins text-sm font-light leading-4 text-black text-center">
                            Sudah punya akun? <a href="/login" class="font-poppins font-bold text-black text-sm leading-4 hover:underline">Masuk</a> di sini.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection