@extends('layouts.user')

@section('container') 
    <section class="bg-primary1">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto my-12 md:h-5/6 md:py-0">
            <div class="w-screen bg-secondary2 rounded-3xl shadow max-w-xs sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 md:my-1 sm:p-8">
                    <!-- judul -->
                    <h1 class="uppercase font-silverkids text-4xl font-bold leading-10 tracking-widest text-center text-primary2 md:text-2xl" style="text-shadow: 2px 2px 2px #D7137D;">
                        Masuk
                    </h1>
                    <!-- form -->
                    <form class="space-y-2 md:space-y-6" action="/login" method="post">
                        @csrf
                        <div class="px-5 lg:px-12 lg:w-full">
                            <label for="email" class="space-x-9 w-11/12 block mb-2 text-base font-medium text-primary2 leading-5 font-poppins">Email</label>
                            <input type="email" name="email" id="email" placeholder="Masukkan email" class="bg-secondary2 border border-primary2 text-base font-normal text-primary3 leading-5 font-poppins placeholder-primary3 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 focus:outline-none" required="">
                        </div>
                        <div class="px-5 lg:px-12 lg:w-full">
                            <label for="password" class="block mb-2 text-base font-medium text-primary2 leading-5 font-poppins">Kata Sandi</label>
                            <input type="password" name="password" id="password" placeholder="Masukkan kata sandi" class="bg-secondary2 border border-primary2 text-base font-normal text-primary3 leading-5 font-poppins placeholder-primary3 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 focus:outline-none" required="">
                        </div>
                        <div class="flex px-5 lg:px-12 lg:w-full justify-between items-center mb-6">
                            <div class="form-group form-check">

                            </div>
                            {{-- <a href="#!" class="font-poppins font-normal text-sm leading-4 text-primary2 hover:text-primary3 focus:text-primary3 active:text-primary2 duration-200 transition ease-in-out">
                                Lupa Kata Sandi ?
                            </a> --}}
                        </div>
                        @if(session()->has('message'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          {{ session('message') }}
                        </div>
                        @endif
                        <button type="submit"
                        class="inline-block mx-5 w-10/12 lg:mx-12 lg:w-9/12 px-12 py-3 bg-primary2 text-secondary2 font-poppins font-bold text-lg leading-5 rounded-xl shadow-md hover:bg-primary3 hover:shadow-lg focus:bg-primary3 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary3 active:shadow-lg transition duration-150 ease-in-out"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light">
                        Masuk
                        </button>
                        <p class="font-poppins text-sm font-light leading-4 text-primary2 text-center">
                            Belum punya akun? <a href="/register" class="font-poppins font-bold text-primary2 text-sm leading-4 hover:underline">Buat Akun</a> di sini.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection