@extends('front.layout.app')

@section('content')
    <div id="header" class="bg-[#F6F7FA] relative h-[700px] -mb-[488px]">
        <div class="container max-w-[1130px] mx-auto relative pt-10  z-10">
            <x-navbar />
        </div>
    </div>
    <div id="Contact"
        class="container max-w-[1130px] mx-auto flex flex-wrap xl:flex-nowrap justify-between gap-[50px] relative z-10">
        <div class="flex flex-col mt-20 gap-[50px]">
            <div class="breadcrumb flex items-center gap-[30px]">
                <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Beranda</p>
                <span class="text-cp-light-grey">/</span>
                <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Produk</p>
                <span class="text-cp-light-grey">/</span>
                <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Janji Temu</p>
            </div>
            <h1 class="font-extrabold text-4xl leading-[45px]">Kami Membantu Anda Membangun Proyek Luar Biasa</h1>
            <div class="flex flex-col gap-5">
                <div class="flex items-center gap-[10px]">
                    <div class="w-6 h-6 flex shrink-0">
                        <img src="assets/icons/global.svg" alt="icon">
                    </div>
                    <p class="text-cp-dark-blue font-semibold">No 96, Anggapati Jakarta</p>
                </div>
                <div class="flex items-center gap-[10px]">
                    <div class="w-6 h-6 flex shrink-0">
                        <img src="assets/icons/call.svg" alt="icon">
                    </div>
                    <p class="text-cp-dark-blue font-semibold">(021) 22081996</p>
                </div>
                <div class="flex items-center gap-[10px]">
                    <div class="w-6 h-6 flex shrink-0">
                        <img src="assets/icons/monitor-mobbile.svg" alt="icon">
                    </div>
                    <p class="text-cp-dark-blue font-semibold">shaynacomp.com</p>
                </div>
            </div>
        </div>
        <div>
            <form method="post" action="{{ route('front.appointment_store') }}"
                class="flex flex-col p-[30px] rounded-[20px] gap-[18px] bg-white shadow-[0_10px_30px_0_#D1D4DF40] w-full md:w-[700px] shrink-0">
                @csrf
                <div class="flex items-center gap-[18px]">
                    <div class="flex flex-col gap-2 w-full">
                        <p class="font-semibold">Nama Lengkap</p>
                        <div
                            class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
                            <div class="w-[18px] h-[18px] flex shrink-0">
                                <img src="assets/icons/profile.svg" alt="icon">
                            </div>
                            <input type="text" name="name" id=""
                                class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full"
                                placeholder="Tulis nama lengkap Anda" required>
                        </div>
                        @error('name')
                            <div style="color: red !important; font-size: 12px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <p class="font-semibold">Alamat Email</p>
                        <div
                            class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
                            <div class="w-[18px] h-[18px] flex shrink-0">
                                <img src="assets/icons/sms.svg" alt="icon">
                            </div>
                            <input type="email" name="email" id=""
                                class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full"
                                placeholder="Tulis alamat email Anda" required>
                        </div>
                        @error('email')
                            <div style="color: red !important; font-size: 12px">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center gap-[18px]">
                    <div class="flex flex-col gap-2 w-full">
                        <p class="font-semibold">Nomor Telepon</p>
                        <div
                            class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
                            <div class="w-[18px] h-[18px] flex shrink-0">
                                <img src="assets/icons/call-black.svg" alt="icon">
                            </div>
                            <input type="tel" name="phone_number" id=""
                                class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full"
                                placeholder="Tulis nomor telepon Anda" required>
                        </div>
                        @error('phone_number')
                            <div style="color: red !important; font-size: 12px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <p class="font-semibold">Tanggal Pertemuan</p>
                        <div
                            class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white relative">
                            <div class="w-[18px] h-[18px] flex shrink-0">
                                <img src="assets/icons/calendar.svg" alt="icon">
                            </div>
                            <button type="button" id="dateButton"
                                class="p-0 bg-transparent w-full text-left border-none outline-none">Pilih tanggal</button>
                            <input type="date" name="meeting_at" id="dateInput" class="absolute opacity-0 -z-10">
                        </div>
                        @error('meeting_at')
                            <div style="color: red !important; font-size: 12px">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center gap-[18px]">
                    <div class="flex flex-col gap-2 w-full">
                        <p class="font-semibold">Minat Anda</p>
                        <div
                            class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
                            <div class="w-[18px] h-[18px] flex shrink-0">
                                <img src="assets/icons/building-4-black.svg" alt="icon">
                            </div>
                            <select name="product_id" id=""
                                class="appearance-none outline-none w-full invalid:font-normal font-semibold px-[10px] -mx-[10px]"
                                required>
                                <option value="" hidden>Pilih proyek</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('product_id')
                            <div style="color: red !important; font-size: 12px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <p class="font-semibold">Anggaran Tersedia</p>
                        <div
                            class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
                            <div class="w-[18px] h-[18px] flex shrink-0">
                                <img src="assets/icons/dollar-square.svg" alt="icon">
                            </div>
                            <input type="number" name="budget" id=""
                                class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full"
                                placeholder="Berapa anggaran Anda" required>
                        </div>
                        @error('budget')
                            <div style="color: red !important; font-size: 12px">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col gap-2 w-full">
                    <p class="font-semibold">Deskripsi Proyek</p>
                    <div
                        class="flex gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
                        <div class="w-[18px] h-[18px] flex shrink-0 mt-[3px]">
                            <img src="assets/icons/message-text.svg" alt="icon">
                        </div>
                        <textarea name="brief" id="" rows="6"
                            class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full resize-none"
                            placeholder="Ceritakan deskripsi proyek Anda"></textarea>
                    </div>
                    @error('brief')
                        <div style="color: red !important; font-size: 12px">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit"
                    class="bg-cp-dark-blue p-5 w-full rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Pesan
                    Janji Temu</button>
            </form>
        </div>

    </div>
    <div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20">
        <h2 class="font-bold text-lg">Dipercaya oleh 500+ Pemimpin Teratas di Seluruh Dunia</h2>
        <div class="logo-container flex flex-wrap gap-5 justify-center">
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-54.svg') }}" class="object-contain w-full h-full"
                        alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-52.svg') }}" class="object-contain w-full h-full"
                        alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-55.svg') }}" class="object-contain w-full h-full"
                        alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-44.svg') }}" class="object-contain w-full h-full"
                        alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-51.svg') }}" class="object-contain w-full h-full"
                        alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-55.svg') }}" class="object-contain w-full h-full"
                        alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-52.svg') }}" class="object-contain w-full h-full"
                        alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-54.svg') }}" class="object-contain w-full h-full"
                        alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-51.svg') }}" class="object-contain w-full h-full"
                        alt="logo">
                </div>
            </div>
        </div>
    </div>
    <div id="Testimonials" class="w-full flex flex-col gap-[50px] items-center mt-20">
        <div class="flex flex-col gap-[14px] items-center">
            <p
                class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                KLIEN YANG SUKSES</p>
            <h2 class="font-bold text-4xl leading-[45px] text-center">Klien Kami yang Puas<br>Dari Perusahaan di Seluruh
                Dunia
            </h2>
        </div>
        <div class="main-carousel w-full">
            @forelse ($testimonials as $testimonial)
                <div
                    class="carousel-card container max-w-[1130px] w-full flex flex-wrap justify-between items-center lg:mx-[calc((100vw-1130px)/2)]">
                    <div class="testimonial-container flex flex-col gap-[112px] w-[565px]">
                        <div class="flex flex-col gap-[30px]">
                            <div class="h-9 overflow-hidden">
                                <img src="{{ asset('assets/logo/logo-54.svg') }}" class="object-contain" alt="icon">
                            </div>
                            <div class="relative pt-[27px] pl-[30px]">
                                <div class="absolute top-0 left-0">
                                    <img src="{{ asset('assets/icons/quote.svg') }}" alt="icon">
                                </div>
                                <p class="font-semibold text-2xl leading-[46px] relative z-10">{{ $testimonial->message }}
                                </p>
                            </div>
                            <div class="flex items-center justify-between pl-[30px]">
                                <div class="flex items-center gap-6">
                                    <div class="w-[60px] h-[60px] flex shrink-0 rounded-full overflow-hidden">
                                        <img src="{{ Storage::url($testimonial->client->avatar) }}"
                                            class="w-full h-full object-cover" alt="photo">
                                    </div>
                                    <div class="flex flex-col justify-center gap-1">
                                        <p class="font-bold">{{ $testimonial->client->name }}</p>
                                        <p class="text-sm text-cp-light-grey">{{ $testimonial->client->occupation }}</p>
                                    </div>
                                </div>
                                <div class="flex flex-nowrap">
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-indicator flex items-center justify-center gap-2 h-4 shrink-0">
                        </div>
                    </div>
                    <div class="testimonial-thumbnail w-[470px] h-[550px] rounded-[20px] overflow-hidden bg-[#D9D9D9]">
                        <img src="{{ Storage::url($testimonial->thumbnail) }}"
                            class="w-full h-full object-cover object-center" alt="thumbnail">
                    </div>
                </div>
            @empty
                <div>Data Tidak Tersedia</div>
            @endforelse

        </div>
    </div>
    <div id="Awards" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
        <div class="flex items-center justify-between">
            <div class="flex flex-col gap-[14px]">
                <p
                    class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                    PENGHARGAAN KAMI</p>
                <h2 class="font-bold text-4xl leading-[45px]">Kami Telah Mengabdi dengan<br>Upaya Tim Terbaik Kami</h2>
            </div>
            <a href="" class="bg-cp-black p-[14px_20px] w-fit rounded-xl font-bold text-white">Jelajahi Lebih
                Lanjut</a>
        </div>
        <div
            class="awards-card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px] justify-center">
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Pencipta Dasar yang Kuat dan Efisien</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Bali, 2020</p>
            </div>
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Tempat Paling Ramai namun Harmonis</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Shanghai, 2021</p>
            </div>
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Hal-Hal Kecil yang Memberikan Dampak Besar</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Zurich, 2022</p>
            </div>
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Kerja Tim dan Solidaritas yang kuat</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Bandung, 2023</p>
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    <!-- JavaScript -->
    <script src="js/contact-form.js"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
@endpush
