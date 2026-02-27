<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Lazismu Kota Cirebon</title>
  </head>
  <body>
<nav x-data="{ mobileMenuOpen: false }" class="bg-white sticky top-0 z-50 shadow-sm border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            <div class="shrink-0 flex items-center">
                <img class="h-12 w-auto" src="https://lazismu.org/wp-content/uploads/2025/04/logo-lazismu.png" alt="Lazismu Logo">
            </div>

            <div class="hidden lg:flex items-center space-x-8">
                <a href="#" class="text-orange-500 font-medium hover:text-orange-600 transition">Tentang</a>
                <a href="#mitra" class="text-gray-600 font-medium hover:text-orange-500 transition">Program</a>
                <a href="#news" class="text-gray-600 font-medium hover:text-orange-500 transition">Berita</a>
                <a href="#artikel" class="text-gray-600 font-medium hover:text-orange-500 transition">Artikel</a>
                
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="flex items-center text-gray-600 font-medium group-hover:text-orange-500 transition focus:outline-none">
                        <span>Publikasi</span>
                        <svg class="ml-1 h-4 w-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         class="absolute left-0 mt-0 w-56 bg-white shadow-xl rounded-b-lg border-orange-500 py-2 z-50">
                        <a href="#" class="block px-6 py-3 text-sm text-gray-700 hover:bg-orange-50 hover:text-orange-500">Buku</a>
                        <a href="#" class="block px-6 py-3 text-sm text-gray-700 hover:bg-orange-50 hover:text-orange-500 border-t border-gray-50">Laporan Keuangan</a>
                        <a href="#" class="block px-6 py-3 text-sm text-gray-700 hover:bg-orange-50 hover:text-orange-500 border-t border-gray-50">Laporan Tahunan</a>
                    </div>
                </div>

                <a href="#" class="text-gray-600 font-medium hover:text-orange-500 transition">Ramadhan</a>
            </div>

            <div class="flex items-center space-x-4">
                <a href="#" class="hidden md:block bg-orange-500 hover:bg-orange-600 text-white px-6 py-2.5 rounded-md font-bold shadow-md transition-all transform active:scale-95">
                    Donasi Sekarang
                </a>

                <button class="p-2 text-gray-500 hover:bg-gray-100 rounded-full transition">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>

                <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-2 rounded-md text-gray-600 hover:bg-gray-100">
                    <svg x-show="!mobileMenuOpen" class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                    <svg x-show="mobileMenuOpen" class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="lg:hidden bg-white border-t border-gray-100 shadow-inner">
        <div class="px-4 pt-2 pb-6 space-y-1">
            <a href="#" class="block px-3 py-4 text-base font-semibold text-orange-500 bg-orange-50 rounded-lg">Tentang</a>
            <a href="#" class="block px-3 py-4 text-base font-medium text-gray-600 hover:bg-gray-50">Program</a>
            <a href="#" class="block px-3 py-4 text-base font-medium text-gray-600 hover:bg-gray-50">Berita</a>
            <a href="#" class="block px-3 py-4 text-base font-medium text-gray-600 hover:bg-gray-50">Publikasi</a>
            <div class="pt-4">
                <a href="#" class="block w-full text-center bg-orange-500 text-white py-4 rounded-xl font-bold shadow-lg">Donasi Sekarang</a>
            </div>
        </div>
    </div>
</nav>

<section x-data="{ 
    activeSlide: 1, 
    slides: [1, 2, 3], 
    loop() { 
        setInterval(() => { this.activeSlide = this.activeSlide === this.slides.length ? 1 : this.activeSlide + 1 }, 5000) 
    } 
}" x-init="loop()" class="relative bg-white overflow-hidden px-5">
    
    <div class="relative min-h-150 md:min-h-150 flex items-center">
        
        <div x-show="activeSlide === 1" 
             x-transition:enter="transition ease-out duration-1000" 
             x-transition:enter-start="opacity-0 transform translate-x-12" 
             x-transition:enter-end="opacity-100 transform translate-x-0"
             class="max-w-7xl mx-auto px-4 w-full flex flex-col md:flex-row items-center">
            
            <div class="w-full md:w-1/2 z-10 text-center md:text-left pt-10 md:pt-0">
                <h1 class="text-5xl md:text-7xl font-black text-orange-950 leading-tight">
                    Zakat <br> <span class="text-orange-500">Penghasilan</span>
                </h1>
                
                <div class="mt-4 flex flex-wrap justify-center md:justify-start items-center gap-4 text-lg font-bold text-gray-700">
                    <span>Nishab <b class="text-orange-600 text-xl ml-1">85 gr emas</b></span>
                    <span class="hidden md:block border-l-2 border-gray-300 h-6"></span>
                    <span>Besaran Zakat <b class="text-orange-600 text-xl ml-1">2,5%</b></span>
                </div>
                
                <div class="mt-6 p-5 border-2 border-orange-100 rounded-3xl bg-orange-50/30 inline-block text-left">
                    <p class="text-gray-500 italic text-xs mb-2">Dua cara menghitung zakat penghasilan</p>
                    <ol class="list-decimal list-inside text-gray-800 font-bold space-y-1 text-sm md:text-base">
                        <li>Penghasilan keseluruhan x 2,5%</li>
                        <li>(Penghasilan keseluruhan - pengeluaran pokok) x 2,5%</li>
                    </ol>
                </div>

                <div class="mt-10">
                    <button class="group bg-orange-500 hover:bg-orange-600 text-white text-xl font-black px-10 py-4 rounded-full shadow-2xl transition-all transform hover:scale-105 flex items-center mx-auto md:mx-0">
                        Zakat Sekarang!
                        <svg class="ml-2 w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                    </button>
                </div>
            </div>

            <div class="w-full md:w-1/2 mt-12 md:mt-0 relative">
                <img src="https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/19133834/Web-Banner-Fidyah-1447H-2048x730.webp" alt="Tim Lazismu" class="w-full h-auto object-contain drop-shadow-2xl">
                <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-orange-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 -z-10"></div>
            </div>
        </div>

        <template x-if="activeSlide === 2">
            <div class="max-w-7xl mx-auto px-4 w-full text-center">
                <h2 class="text-5xl font-bold text-orange-500">Program Kemanusiaan</h2>
                <p class="mt-4 text-gray-600 text-xl">Membantu sesama dengan aksi nyata di lapangan.</p>
            </div>
        </template>

        <template x-if="activeSlide === 3">
            <div class="max-w-7xl mx-auto px-4 w-full text-center">
                <h2 class="text-5xl font-bold text-orange-500">Program Kemanusiaan</h2>
                <p class="mt-4 text-gray-600 text-xl">Membantu sesama dengan aksi nyata di lapangan.</p>
            </div>
        </template>
    </div>

    <button @click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1" class="absolute left-4 top-1/2 -translate-y-1/2 p-3 rounded-full bg-black/5 hover:bg-orange-500 hover:text-white transition group">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
    </button>
    <button @click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1" class="absolute right-4 top-1/2 -translate-y-1/2 p-3 rounded-full bg-black/5 hover:bg-orange-500 hover:text-white transition">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
    </button>
</section>

<section class="py-16 px-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
                Masih Bingung Untuk Berzakat?
            </h2>
            <p class="mt-3 text-gray-500 text-lg">
                Untuk membantu kamu, maka terlebih dahulu klik tombol dibawah ini
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="group p-8 bg-gray-50 rounded-2xl border border-transparent hover:border-orange-200 hover:bg-orange-50/50 transition-all duration-300">
                <div class="mb-6">
                    <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-orange-600 mb-3">Konsultasi</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Sampaikan pertanyaan kamu kepada tim Layanan kami
                </p>
                <a href="#" class="inline-flex items-center font-bold text-orange-500 hover:text-orange-700">
                    Selengkapnya 
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                </a>
            </div>

            <div class="group p-8 bg-gray-50 rounded-2xl border border-transparent hover:border-orange-200 hover:bg-orange-50/50 transition-all duration-300">
                <div class="mb-6">
                    <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-orange-600 mb-3">Kalkulator Zakat</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Hitung dan tunaikan zakat kamu sekarang
                </p>
                <a href="#" class="inline-flex items-center font-bold text-orange-500 hover:text-orange-700">
                    Selengkapnya 
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                </a>
            </div>

            <div class="group p-8 bg-gray-50 rounded-2xl border border-transparent hover:border-orange-200 hover:bg-orange-50/50 transition-all duration-300">
                <div class="mb-6">
                    <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-orange-600 mb-3">Laman Donasi</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Beragam pilihan donasi zakat, infak dan sedekah yang menarik
                </p>
                <a href="#" class="inline-flex items-center font-bold text-orange-500 hover:text-orange-700">
                    Selengkapnya 
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                </a>
            </div>
        </div>

        <div class="mt-16 text-center">
            <a href="#" class="inline-flex items-center bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-10 rounded-xl shadow-lg shadow-orange-200 transition-all transform hover:-translate-y-1">
                Kunjungi Pusat Layanan
                <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
        </div>
    </div>
</section>

<section id="program" class="py-10 px-20 bg-white" x-data="{ 
    activeSet: 1,
    totalSets: 2,
    autoPlay() {
        setInterval(() => {
            this.activeSet = this.activeSet === this.totalSets ? 1 : this.activeSet + 1;
        }, 6000);
    }
}" x-init="autoPlay()">
    <div class="max-w-5xl mx-auto px-4 relative">
        
        <div class="text-center mb-8">
            <div class="flex justify-center mb-2">
                <img src="https://lazismu.org/images/logo-icon.png" alt="Icon" class="h-8 w-auto">
            </div>
            <h2 class="text-2xl md:text-3xl font-black text-gray-800 uppercase tracking-tight">
                Pilar Program Lazismu
            </h2>
            <p class="mt-2 text-gray-500 text-sm md:text-base">
                Dukung program-program kemanusiaan Lazismu
            </p>
        </div>

        <div class="relative px-10">
            
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-700 ease-in-out gap-4"
                     :style="'transform: translateX(-' + (activeSet - 1) * 100 + '%)'">
                    
                    <div class="min-w-full grid grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="bg-orange-400 rounded-xl flex flex-col items-center justify-center p-4 h-40 transition transform hover:scale-105 shadow-md">
                            <div class="h-16 w-16 mb-2 bg-white/20 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                            </div>
                            <h3 class="text-white text-xs md:text-sm font-black text-center leading-tight">SOSIAL DAKWAH</h3>
                        </div>

                        <div class="bg-lime-500 rounded-xl flex flex-col items-center justify-center p-4 h-40 transition transform hover:scale-105 shadow-md">
                            <div class="h-16 w-16 mb-2 bg-white/20 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                            </div>
                            <h3 class="text-white text-xs md:text-sm font-black text-center">KEMANUSIAAN</h3>
                        </div>

                        <div class="bg-lime-400 rounded-xl flex flex-col items-center justify-center p-4 h-40 transition transform hover:scale-105 shadow-md">
                            <div class="h-16 w-16 mb-2 bg-white/20 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" /></svg>
                            </div>
                            <h3 class="text-white text-xs md:text-sm font-black text-center">LINGKUNGAN</h3>
                        </div>

                        <div class="bg-orange-500 rounded-xl flex flex-col items-center justify-center p-4 h-40 transition transform hover:scale-105 shadow-md">
                            <div class="h-16 w-16 mb-2 bg-white/20 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            </div>
                            <h3 class="text-white text-xs md:text-sm font-black text-center">EKONOMI</h3>
                        </div>
                    </div>

                    <div class="min-w-full grid grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="bg-red-500 rounded-xl h-40 flex items-center justify-center shadow-md">
                            <h3 class="text-white font-black">KESEHATAN</h3>
                        </div>
                        <div class="bg-blue-500 rounded-xl h-40 flex items-center justify-center shadow-md">
                            <h3 class="text-white font-black">PENDIDIKAN</h3>
                        </div>
                        </div>

                </div>
            </div>

            <button @click="activeSet = activeSet === 1 ? totalSets : activeSet - 1" 
                    class="absolute left-0 top-1/2 -translate-y-1/2 bg-white/80 p-2 rounded-full text-gray-400 hover:text-orange-500 transition shadow">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
            </button>
            <button @click="activeSet = activeSet === totalSets ? 1 : activeSet + 1" 
                    class="absolute right-0 top-1/2 -translate-y-1/2 bg-white/80 p-2 rounded-full text-gray-400 hover:text-orange-500 transition shadow">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </button>
        </div>

        <div class="mt-24 text-center">
            <a href="#" class="inline-flex items-center bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-10 rounded-xl shadow-lg shadow-orange-200 transition-all transform hover:-translate-y-1">
                Lihat Semua Pilar
                <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
        </div>
    </div>
</section>

<section id="news" class="py-16 px-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        
        <div class="text-center mb-12">
            <div class="flex justify-center mb-4">
                <img src="https://lazismu.org/images/logo-icon.png" alt="Icon" class="h-10 w-auto">
            </div>
            <h2 class="text-3xl md:text-4xl font-black text-gray-800 tracking-tight">
                Info Terkini Lazismu
            </h2>
            <p class="mt-3 text-gray-500 text-lg">
                Berita terkini kegiatan Lazismu
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col">
                <div class="relative overflow-hidden aspect-vidio">
                    <img src="https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/23112002/Lazismu-Buton-Seminar-Kepedulian-Sosial.jpg" alt="Berita 1" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-linear-to-t from-black/20 to-transparent"></div>
                </div>
                <div class="p-6 grow">
                    <h3 class="text-xl font-bold text-gray-800 leading-snug group-hover:text-orange-500 transition-colors duration-300">
                        Hari Pertama Berpuasa, Lazismu Banyumas Salurkan 150 Kado Ramadan untuk...
                    </h3>
                </div>
            </article>

            <article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col">
                <div class="relative overflow-hidden aspect-vidio">
                    <img src="https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/23104057/Tebar-Takjil-Pulang-Pisau-ok.jpg" alt="Berita 2" class="w-full h-full object-cover group-hover:scale-100 transition-transform duration-700">
                    <div class="absolute inset-0 bg-linear-to-t from-black/20 to-transparent"></div>
                </div>
                <div class="p-6 grow">
                    <h3 class="text-xl font-bold text-gray-800 leading-snug group-hover:text-orange-500 transition-colors duration-300">
                        Adopsi Resep Sukses Lazismu Jawa Tengah, Lazismu Sumsel Targetkan Lompatan Tata...
                    </h3>
                </div>
            </article>

            <article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col">
                <div class="relative overflow-hidden aspect-vidio">
                    <img src="https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/19105953/Kado-Ramadan-Lansia-Laz-BanyumasOK.jpg" alt="Berita 3" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-linear-to-t from-black/20 to-transparent"></div>
                </div>
                <div class="p-6 grow">
                    <h3 class="text-xl font-bold text-gray-800 leading-snug group-hover:text-orange-500 transition-colors duration-300">
                        Raih Penghargaan Teraktif 2025, Lazismu Pulang Pisau Dorong Spirit Gerakan Zakat di...
                    </h3>
                </div>
            </article>

        </div>

        <div class="mt-12 text-center">
            <a href="#" class="inline-flex items-center text-orange-500 font-bold hover:text-orange-700 transition group">
                Berita Lainnya
                <svg class="ml-2 w-6 h-6 bg-orange-500 text-white rounded-full p-1 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
</section>

<section id="mitra" class="py-16 bg-white" x-data="{ 
    activeSet: 1, 
    totalSets: 2,
    autoPlay() {
        setInterval(() => {
            this.activeSet = this.activeSet === this.totalSets ? 1 : this.activeSet + 1;
        }, 4000);
    } 
}" x-init="autoPlay()">
    <div class="max-w-7xl mx-auto px-4 relative">
        
        <div class="text-center mb-10">
            <h2 class="text-3xl font-black text-gray-800 tracking-tight">Mitra Kami</h2>
            <p>Dalam menyukseskan visi & misi Lazismu, kami selalu berkolaborasi dengan beberapa mitra</p>
            <div class="w-20 h-1 bg-orange-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="relative overflow-hidden px-12">
            <div class="flex transition-transform duration-1000 ease-in-out gap-8"
                 :style="'transform: translateX(-' + (activeSet - 1) * 100 + '%)'">
                
                <div class="min-w-full grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-items-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXdkVgxyOpg-skXBTrhFvR4VqIgDrNUteyiQ&s" class="h-16 grayscale hover:grayscale-0 transition duration-300" alt="Mitra">
                    <img src="https://www.mandiri-investasi.co.id/wp-content/uploads/2019/06/maybank-PNG.png" class="h-16 grayscale hover:grayscale-0 transition duration-300" alt="Mitra">
                    <img src="https://1.bp.blogspot.com/-4qkYYe_sQoI/YBvH0NmYCjI/AAAAAAAAab0/DpiJkew5pPg2kZeoYp3uLqAuoBs7wwldwCLcBGAsYHQ/w400-h400/Download%2BLogo%2BBANK%2BSYARIAH%2BINDONESIA%2BCDR%2Bdan%2BPNG.png" class="h-16 grayscale hover:grayscale-0 transition duration-300" alt="Mitra">
                    <img src="logo-mitra4.png" class="h-16 grayscale hover:grayscale-0 transition duration-300" alt="Mitra">
                </div>

                <div class="min-w-full grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-items-center">
                    <img src="logo-mitra5.png" class="h-16 grayscale hover:grayscale-0 transition duration-300" alt="Mitra">
                    <img src="logo-mitra6.png" class="h-16 grayscale hover:grayscale-0 transition duration-300" alt="Mitra">
                    <img src="logo-mitra7.png" class="h-16 grayscale hover:grayscale-0 transition duration-300" alt="Mitra">
                    <img src="logo-mitra8.png" class="h-16 grayscale hover:grayscale-0 transition duration-300" alt="Mitra">
                </div>
            </div>

            <button @click="activeSet = activeSet === 1 ? totalSets : activeSet - 1" class="absolute left-0 top-1/2 -translate-y-1/2 p-2 rounded-full bg-gray-100 hover:bg-orange-500 hover:text-white transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
            </button>
            <button @click="activeSet = activeSet === totalSets ? 1 : activeSet + 1" class="absolute right-0 top-1/2 -translate-y-1/2 p-2 rounded-full bg-gray-100 hover:bg-orange-500 hover:text-white transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </button>
        </div>

        <div class="flex justify-center mt-8 space-x-2">
            <template x-for="i in totalSets">
                <button @click="activeSet = i" 
                        :class="activeSet === i ? 'bg-orange-500 w-6' : 'bg-gray-300 w-2'" 
                        class="h-2 rounded-full transition-all duration-300"></button>
            </template>
        </div>

        <div class="mt-12 mb-12 text-center">
            <a href="#" class="inline-flex items-center text-orange-500 font-bold hover:text-orange-700 transition group">
                Selengkapnya
                <svg class="ml-2 w-6 h-6 bg-orange-500 text-white rounded-full p-1 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
</section>

<section id="artikel" class="py-16 px-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        
        <div class="text-center mb-12">
            <div class="flex justify-center mb-4">
                <img src="https://lazismu.org/images/logo-icon.png" alt="Icon" class="h-10 w-auto">
            </div>
            <h2 class="text-4xl font-black text-gray-800 tracking-tight">
                Artikel Lazismu
            </h2>
            <p class="mt-3 text-gray-500 text-lg">
                Berita terkini kegiatan Lazismu
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <article class="flex flex-col bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 group transition-all duration-300 hover:shadow-2xl">
                <div class="relative aspect-4/3 overflow-hidden">
                    <img src="path-ke-gambar-puasa.jpg" alt="Artikel" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>

                <div class="p-6 grow flex flex-col">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 leading-tight group-hover:text-orange-500 transition-colors">
                        Hikmah Puasa, Melatih Pribadi Berkarakter
                    </h3>
                    <p class="text-gray-500 text-sm leading-relaxed line-clamp-4 mb-6">
                        Dalam Islam, setiap ibadah yang dikerjakan memiliki tuntunan dan prinsip-prinsip yang harus dipegang oleh kaum muslim dan muslimat...
                    </p>
                    
                    <div class="mt-auto">
                        <a href="#" class="inline-flex items-center text-xs font-bold text-orange-500 uppercase tracking-widest hover:text-orange-600 transition">
                            Selengkapnya
                            <svg class="ml-1 w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="px-6 py-4 border-t border-gray-50 bg-gray-50/30 flex items-center text-[11px] text-gray-400 font-medium italic">
                    <span>11 Februari 2026</span>
                    <span class="mx-2 text-gray-300">•</span>
                </div>
            </article>

            <article class="flex flex-col bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 group transition-all duration-300 hover:shadow-2xl">
                <div class="relative aspect-4/3 overflow-hidden">
                    <img src="path-ke-gambar-quran.jpg" alt="Artikel" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6 grow flex flex-col">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 leading-tight group-hover:text-orange-500 transition-colors">
                        Puasa Ramadhan, Mengapa Diwajibkan Bagi Seorang Muslim?
                    </h3>
                    <p class="text-gray-500 text-sm leading-relaxed line-clamp-4 mb-6">
                        Puasa merupakan jalan menuju ketakwaan kepada Allah SWT. Hal ini sejalan dengan prinsip-prinsip ibadah salah satunya...
                    </p>
                    <div class="mt-auto">
                        <a href="#" class="inline-flex items-center text-xs font-bold text-orange-500 uppercase tracking-widest">
                            Selengkapnya
                            <svg class="ml-1 w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 5l7 7-7 7M5 5l7 7-7 7" /></svg>
                        </a>
                    </div>
                </div>
                <div class="px-6 py-4 border-t border-gray-50 bg-gray-50/30 flex items-center text-[11px] text-gray-400 font-medium italic">
                    <span>9 Februari 2026</span>
                    <span class="mx-2 text-gray-300">•</span>
                </div>
            </article>

            <article class="flex flex-col bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 group transition-all duration-300 hover:shadow-2xl">
                <div class="relative aspect-4/3 overflow-hidden">
                    <img src="path-ke-gambar-kurma.jpg" alt="Artikel" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6 grow flex flex-col">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 leading-tight group-hover:text-orange-500 transition-colors">
                        Makna Puasa sebagai Perisai Bagi Orang yang Beriman
                    </h3>
                    <p class="text-gray-500 text-sm leading-relaxed line-clamp-4 mb-6">
                        Marhaban Ya Ramadhan. Bulan penuh keberkahan yang ditunggu-tunggu itu semakin dekat menyapa kita semua. Ramadhan adalah...
                    </p>
                    <div class="mt-auto">
                        <a href="#" class="inline-flex items-center text-xs font-bold text-orange-500 uppercase tracking-widest">
                            Selengkapnya
                            <svg class="ml-1 w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 5l7 7-7 7M5 5l7 7-7 7" /></svg>
                        </a>
                    </div>
                </div>
                <div class="px-6 py-4 border-t border-gray-50 bg-gray-50/30 flex items-center text-[11px] text-gray-400 font-medium italic">
                    <span>6 Februari 2026</span>
                    <span class="mx-2 text-gray-300">•</span>
                </div>
            </article>

        </div>
    </div>

            <div class="mt-16 text-center">
            <a href="#" class="inline-flex items-center bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-10 rounded-xl shadow-lg shadow-orange-200 transition-all transform hover:-translate-y-1">
                Lihat Lainnya
                <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
        </div>
</section>

<footer class="bg-white pt-16 px-20 pb-8 border-t border-gray-100 relative overflow-hidden">
    <div class="absolute bottom-0 left-0 w-64 opacity-20 pointer-events-none px-5">
        <img src="https://lazismu.org/wp-content/uploads/2025/04/element-footer.png" alt="Decoration" class="w-full">
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
            
            <div class="space-y-6">
                <img src="https://lazismu.org/wp-content/uploads/2025/04/logo-lazismu.png" alt="Lazismu Logo" class="h-16 w-auto">
                <p class="text-gray-500 text-sm leading-relaxed text-justify">
                    LAZISMU adalah lembaga zakat nasional dengan SK Menag No. 90 Tahun 2022, yang berkhidmat dalam pemberdayaan masyarakat melalui pendayagunaan dana zakat, infaq, wakaf dan dana kedermawanan lainnya baik dari perseorangan, lembaga, perusahaan dan instansi lainnya. Lazismu tidak menerima segala bentuk dana yang bersumber dari kejahatan. UU RI No. 8 Tahun 2010 Tentang Pencegahan dan Pemberantasan Tindak Pidana Pencucian Uang.
                </p>
            </div>

            <div class="lg:pl-8">
                <h4 class="text-xl font-bold text-gray-800 mb-6">Alamat</h4>
                <ul class="space-y-4 text-gray-500 text-sm">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-orange-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Jl. Jambrut No.5, Kenari, Kec. Senen, Jakarta Pusat 10430</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-orange-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <a href="mailto:info@lazismu.org" class="hover:text-orange-500 transition">info@lazismu.org</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-orange-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <span>0856-1626-222</span>
                    </li>
                </ul>
            </div>

            <div class="lg:pl-8">
                <h4 class="text-xl font-bold text-gray-800 mb-6">Selengkapnya</h4>
                <ul class="space-y-3 text-gray-500 text-sm font-medium">
                    <li><a href="#" class="hover:text-orange-500 transition">FAQ</a></li>
                    <li><a href="#" class="hover:text-orange-500 transition">Laman Donasi</a></li>
                    <li><a href="#" class="hover:text-orange-500 transition">Publikasi</a></li>
                    <li><a href="#" class="hover:text-orange-500 transition">Ketentuan Layanan</a></li>
                    <li><a href="#" class="hover:text-orange-500 transition">Kebijakan Privasi</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-xl font-bold text-gray-800 mb-6">Media Sosial</h4>
                <div class="grid grid-cols-3 gap-3">
                    <a href="#" class="w-12 h-12 bg-[#3f3f3f] text-white flex items-center justify-center rounded-md hover:bg-orange-500 transition">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-[#08529b] text-white flex items-center justify-center rounded-md hover:bg-orange-500 transition">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-[#333333] text-white flex items-center justify-center rounded-md hover:bg-orange-500 transition">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-[#ff0000] text-white flex items-center justify-center rounded-md hover:bg-orange-600 transition">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-[#000000] text-white flex items-center justify-center rounded-md hover:bg-orange-500 transition">
                        <i class="bi bi-tiktok"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-[#0077b5] text-white flex items-center justify-center rounded-md hover:bg-orange-500 transition">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-20 pt-8 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center text-gray-400 text-xs text-center md:text-left">
            <p>Copyright © <?php echo date('Y'); ?> LAZISMU bagian dari Persekutuan dan Perkumpulan PERSYARIKATAN MUHAMMADIYAH</p>
        </div>
    </div>

    <a href="https://wa.me/..." class="fixed bottom-6 right-6 z-99 bg-[#25d366] text-white p-3 rounded-full shadow-2xl transform hover:scale-110 transition-all duration-300">
        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
    </a>
</footer>
  </body>
</html>