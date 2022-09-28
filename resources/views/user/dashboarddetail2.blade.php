@extends('layouts.kompetisi')

@section('container') 
            <!-- main content -->
            <div class="md:grid md:grid-cols-3 ">
                 <!-- grid content tim -->
                 <div class="grid-1 md:order-last bg-primary2 py-5 ">
                    <div class="  bg-primary2     right-0  md:relative md:translate-x-0 ">
                        <div class="w-64 p-5 text-primary1 inset-y-0 right-0 transform bg-secondary2 m-10 rounded-lg z-0">
                            <p class="text-primary1 text-3xl font-bold">Nama Tim</p> 
                            <p class="text-primary1 text-2xl font-light">{{ $user->nama_team }}</p>
                        </div>
                        <div class="m-10">
                            <p class="text-lg text-secondary2  font-bold">UPLOAD BERKAS TIM</p> 
                            <hr class="mt-2 text-secondary2">
                            <p class="text-[20px] text-secondary2  py-4 font-bold">Surat Tugas dari Universitas*</p> 
                            <button class="bg-secondary2 px-3 py-2 font-bold rounded-md">Upload Link</button>
                            <p class="text-[20px] text-secondary2  py-4 font-bold">Bukti Transfer Biaya Pendaftaran*</p> 
                            <button class="bg-secondary2 px-3 py-2 font-bold rounded-md">Upload Link</button>
                            <p class="text-sm text-white pt-10">Catatan</p>
                            <ul class="list-disc text-white text-sm mb-5">
                                <li>Memasukkan Berkas yang dibutuhkan pada Google Drive dan upload link Google Drive yang berisi berkas tersebut pada tempat yang telah disediakan.</li>
                            </ul>
                        </div>
                      </div>
                </div>
                <!-- grid content peserta -->
                <div class="grid-2 md:grid-3 col-span-2 p-10 mb-20">
                    <div class="flex items-center ">
                        <i class="fa-solid fa-angle-left text-white text-2xl"></i>
                        <p class="text-white font-bold text-2xl px-3"> BASKET</p>
                    </div>
                    <!-- table leader -->
                    <div class="official pt-2">
                        <p class="pt-4 font-bold pb-2 text-lg text-secondary2">OFFICIAL</p> 
                        <hr class="mb-5">
                        <table class="w-full border-2  border-secondary2">
                            <tr class=" ">
                                <td class="bg-secondary2 text-primary1 font-bold text-center py-2 text-lg">NO</td>
                                <td class="bg-secondary2 border-none font-bold text-center py-2 text-lg">NAMA</td>
                                <td class="bg-secondary2 text-primary1 font-bold text-center py-2 text-lg">DETAIL</td>
                            </tr>
                            <tr class="">
                                <td class="text-center font-poppins text-lg text-white py-2">1</td>
                                <td class=" border-2 border-secondary2 font-poppins text-lg text-white py-2">{{ $user->nama }}</td>
                                <td class="text-center font-poppins text-primary1 py-2"><button class="bg-secondary2 text-sm px-4 font-bold rounded-md py-2">Lihat</button></td>
                            </tr>
                        </table>
                    </div>
                    <!-- tabel player -->
                    <div class="official pt-5">
                        <p class="pt-4 font-bold pb-2 text-lg text-secondary2">PESERTA</p> 
                        <hr class="mb-5">
                        <table class="w-full border-2  border-secondary2">
                            <tr class=" ">
                                <td class="bg-secondary2 text-primary1 font-bold text-center py-2 text-lg">NO</td>
                                <td class="bg-secondary2 border-none font-bold text-center py-2 text-lg">NAMA</td>
                                <td class="bg-secondary2 text-primary1 font-bold text-center py-2 text-lg">DETAIL</td>
                            </tr>
                            @foreach ($anggotas as $anggota)    
                            <tr class="">
                                <td class="text-center font-poppins text-lg text-white py-2">{{ $loop->index + 1 }}</td>
                                <td class=" border-2 border-secondary2 font-poppins text-lg text-white py-2">{{ $anggota->nama }}</td>
                                <td class="text-center font-poppins text-primary1 py-2"><button class="bg-secondary2 text-sm px-4 font-bold rounded-md py-2">Lihat</button></td>
                            </tr>
                            @endforeach
                        </table>
                        <button class="my-5 bg-secondary2 text-lg float-right px-10 font-bold rounded-md py-2">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection