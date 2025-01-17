<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('output.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS for carousel/flickity-->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity-fade@2/flickity-fade.css">

    <!-- CSS for modal/flowbite -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" /> -->
</head>

<body class="font-poppins text-cp-black">
    @yield('content')

    <footer class="bg-cp-black w-full relative overflow-hidden mt-20">
        <div
            class="container max-w-[1130px] mx-auto flex flex-wrap gap-y-4 items-center justify-between pt-[100px] pb-[220px] relative z-10">
            <div class="flex flex-col gap-10">
                <div class="flex items-center gap-3">
                    <div class="flex shrink-0 h-[43px] overflow-hidden">
                        <img src="assets/logo/logo.svg" class="object-contain w-full h-full" alt="logo">
                    </div>
                    <div class="flex flex-col">
                        <p id="CompanyName" class="font-extrabold text-xl leading-[30px] text-white">ShaynaComp</p>
                        <p id="CompanyTagline" class="text-sm text-cp-light-grey">Membangun Impian Futuristik</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <a href="">
                        <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                            <img src="assets/icons/youtube.svg" class="w-full h-full object-contain" alt="youtube">
                        </div>
                    </a>
                    <a href="">
                        <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                            <img src="assets/icons/whatsapp.svg" class="w-full h-full object-contain" alt="whatsapp">
                        </div>
                    </a>
                    <a href="">
                        <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                            <img src="assets/icons/facebook.svg" class="w-full h-full object-contain" alt="facebook">
                        </div>
                    </a>
                    <a href="">
                        <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                            <img src="assets/icons/instagram.svg" class="w-full h-full object-contain" alt="instagram">
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap gap-[50px]">
                <div class="flex flex-col w-[200px] gap-3">
                    <p class="font-bold text-lg text-white">Produk</p>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Kontraktor
                        Umum</a>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Penilaian
                        Bangunan</a>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Pembuat 3D
                        Paper</a>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Konstruksi
                        Legal</a>
                </div>
                <div class="flex flex-col w-[200px] gap-3">
                    <p class="font-bold text-lg text-white">Tentang Kami</p>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Kami
                        Membuka Lowongan</a>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Tujuan
                        Besar Kami</a>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Hubungan
                        Investor</a>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Media
                        Press</a>
                </div>
                <div class="flex flex-col w-[200px] gap-3">
                    <p class="font-bold text-lg text-white">Tautan Berguna</p>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Kebijakan
                        Privasi</a>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Syarat &
                        Ketentuan</a>
                    <a href="contact.html"
                        class="text-cp-light-grey hover:text-white transition-all duration-300">Hubungi Kami</a>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Unduh
                        Template</a>
                </div>
            </div>
        </div>
        <div class="absolute -bottom-[135px] w-full">
            <p class="font-extrabold text-[250px] leading-[375px] text-center text-white opacity-5">SHAYNA</p>
        </div>
    </footer>


    @stack('before-scripts')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>


    @stack('after-scripts')



</html>
