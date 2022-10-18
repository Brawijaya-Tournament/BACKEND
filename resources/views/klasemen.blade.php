@extends('layouts.user')

@section('container') 
    <section class="pt-44 bg-no-repeat bg-cover pb-40" style="background-image: url('img/BgKlasemen.svg');">
        <div class="container">
                <div class="flex justify-center w-full items-center self-center px-4">
                    <div class="mt-10 mb-10 md:mb-10 md:mt-10">
                        <img src="img/klasemen.svg" alt="Logo BuluTangkis" class="max-w-full mx-auto">
                    </div>
                </div>
        </div>
    </section>

    <!-- section/konten timeline -->
    <section class="-mt-40 bg-no-repeat bg-cover pt-44" style="background-image: url('./img/bgMerahKlasemen.svg');">
        <div class="container mx-auto w-full h-full">
            <div class="p-10 h-full">
                <div class="flex justify-center items-center mb-10 md:mt-20 md:mb-20">
                    <table class="w-full border-2 border-secondary2 rounded-full border-collapse border-hidden" style="border-collapse: collapse;border-radius: 30px;">
                        <tbody class="rounded-full border-collapse border-hidden" style="border-collapse: collapse;border-radius: 30px;">
                            <tr class=" ">
                                <td class="border-2 border-secondary2 font-bold text-center py-2 text-lg text-secondary2 leading-5">NAMA INSTANSI</td>
                                <td class="border-2 border-secondary2 font-bold text-center text-lg">
                                    <img src="img/juara 1.svg" class="w-16 md:h-24 mx-auto my-auto">
                                </td>
                                <td class="border-2 border-secondary2 font-bold text-center text-lg">
                                    <img src="img/juara 2.svg" class="w-16 md:h-24 mx-auto my-auto">
                                </td>
                                <td class="border-2 border-secondary2 font-bold text-center text-lg">
                                    <img src="img/juara 3.png" class="w-16 md:h-24 mx-auto my-auto">
                                </td>
                                <td class="border-2 border-secondary2 font-bold text-center py-2 text-lg text-secondary2 leading-5">TOTAL</td>
                            </tr>
                            @foreach($klasemens as $klasemen)                              
                            <tr class="">  
                                <td class="border-1 border-secondary2 font-poppins pl-6 text-lg text-white py-2 flex flex-cols items-start">
                                    {{ $klasemen->nama_univ }}
                                </td>
                                <td class="border-2 border-secondary2 text-center font-poppins text-lg text-white py-2">{{ $klasemen->emas }}</td>
                                <td class="border-2 border-secondary2 text-center font-poppins text-lg text-white py-2">{{ $klasemen->perak }}</td>
                                <td class="border-2 border-secondary2 text-center font-poppins text-lg text-white py-2">{{ $klasemen->perunggu }}</td>
                                <td class="border-2 border-secondary2 text-center font-poppins text-lg text-white py-2">{{ $klasemen->emas + $klasemen->perak + $klasemen->perunggu }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection