<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="title" content="Brawijaya Tournament 2022" />
    <meta name="description"
        content="Brawijaya Tournament" />
    <meta name="keywords"
        content="brawijaya tournament" />
    <meta name="author" content="IT Brawijaya Tournament" />
    <meta property="og:title" content="Brawijaya Tournament" />
    <meta property="og:description"
        content="Brawijaya Tournament" />
    <title>Brawijaya Tournament | Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon.png">
    <!-- Custom CSS -->
    <link href="/dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css"
        integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js"
        integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('style')
</head>

<body>
    <section class="h-full gradient-form bg-gray-200 md:h-screen">
        <div class="container py-12 px-6 h-full">
            <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
                <div class="xl:w-10/12">
                    <div class="block bg-white shadow-lg rounded-lg">
                        <div class="lg:flex lg:flex-wrap g-0">
                            <div class="lg:w-6/12 px-4 md:px-0">
                                <div class="md:p-12 md:mx-6">
                                    <div class="text-center">
                                        <img class="mx-auto w-38" src="/img/logoNavbar.svg" alt="logo" />
                                        <h4 class="text-xl font-semibold mt-1 mb-12 pb-1">Selamat Datang! <br /> Admin Panel</h4>
                                    </div>
                                    @if ($message = Session::get('message'))
                                        <div class="w-full rounded-xl shadow-md  text-white text-center p-1 my-1 "
                                            style="
                            background: linear-gradient(
                              to right,
                              #147167,
                              #3E8678,
                              #FE6722,
                              #F69534
                            );
                          ">
                                            {{ $message }}
                                        </div>
                                    @endif
                                    <form action="/adminbt/login" method="POST">
                                        @csrf
                                        <p class="mb-4">Masukkan Password <span
                                                class="font-bold text-[#147167]">ADMIN</span></p>
                                        <div class="mb-4">
                                            <input type="text"
                                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="exampleFormControlInput1" placeholder="email" name="email" />
                                            @error('email')
                                                <p class=" text-red-500 "> {{ $message }} </p>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="password"
                                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="exampleFormControlInput1" placeholder="password" name="password" />
                                            @error('password')
                                                <p class=" text-red-500 "> {{ $message }} </p>
                                            @enderror
                                        </div>
                                        <!-- <div class="mb-4">
                                            <input type="password"
                                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="exampleFormControlInput1" placeholder="password" name="password" />
                                            @error('password')
                                                <p class=" text-red-500 "> {{ $message }} </p>
                                            @enderror
                                        </div> -->
                                        <div class="text-center pt-1 mb-12 pb-1">
                                            <button
                                                class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                                                type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                                style="
                              background: linear-gradient(
                                to right,
                                #ed3c0d,          
                                #022051
                              );
                            ">
                                                Log in
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="lg:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none"
                                style="
                      background: linear-gradient(to right,
                                #ed3c0d,          
                                #022051);
                    ">
                                <div class="text-white px-4 py-6 md:p-12 md:mx-6">
                                    <h4 class="text-xl font-semibold mb-6 text-center"></h4>
                                    <p class="text-sm text-justify">
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- endinject -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>
