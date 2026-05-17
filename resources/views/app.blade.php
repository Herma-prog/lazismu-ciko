<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Lazismu Kota Cirebon')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        /* Mencegah Alpine.js berkedip saat loading */
        [x-cloak] { display: none !important; }
        
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            margin: 0;
            padding: 0;
        }

        .slider-animate { 
        transition: transform 700ms cubic-bezier(0.65, 0, 0.35, 1) !important; 
        }
        .slider-no-animate { 
            transition: none !important; 
        }
    </style>

    @stack('styles')
</head>
<body class="antialiase bg-white text-slate-900">

    <navbar x-data="{ mobileMenuOpen: false, atTop: true }" 
                @scroll.window="atTop = (window.pageYOffset > 50 ? false : true)"
                class="block">

        <nav :class="atTop ? 'bg-white' : 'bg-white/80 backdrop-blur-xl shadow-xs'"
             class="sticky top-0 z-100 border-b border-slate-100 transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex h-20 items-center justify-between">
                    <div class="shrink-0">
                        <img class="h-10 md:h-12 w-auto" src="https://lazismu.org/wp-content/uploads/2025/04/logo-lazismu.png" alt="Logo">
                    </div>

                    <div class="hidden lg:flex items-center gap-10">
                        <a href="#" class="text-[13px] font-black text-slate-600 hover:text-orange-500 tracking-widest transition uppercase">Beranda</a>
                        <a href="#about" class="text-[13px] font-black text-slate-600 hover:text-orange-500 tracking-widest transition uppercase">Tentang</a>
                        <a href="#program" class="text-[13px] font-black text-slate-600 hover:text-orange-500 tracking-widest transition uppercase">Program</a>
                        <a href="#info" class="text-[13px] font-black text-slate-600 hover:text-orange-500 tracking-widest transition uppercase">Info</a>
                        <a href="#mitra" class="text-[13px] font-black text-slate-600 hover:text-orange-500 tracking-widest transition uppercase">Mitra</a>
                        <a href="#fitur" class="text-[13px] font-black text-slate-600 hover:text-orange-500 tracking-widest transition uppercase">Fitur</a>
                        <a href="#article" class="text-[13px] font-black text-slate-600 hover:text-orange-500 tracking-widest transition uppercase">Artikel</a>
                    </div>

                    <div class="flex items-center gap-4">
                        <a href="#" class="hidden lg:inline-flex bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-xl font-black text-[13px] uppercase shadow-xl shadow-orange-100 transition active:scale-95">
                            Donasi Sekarang
                        </a>
                        <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-2 rounded-xl hover:bg-slate-50 transition">
                            <svg x-show="!mobileMenuOpen" class="h-7 w-7 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                            <svg x-show="mobileMenuOpen" x-cloak class="h-7 w-7 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                        </button>
                    </div>
                </div>
            </div>

            <div x-show="mobileMenuOpen" 
                 x-cloak 
                 x-transition:enter="transition duration-200" 
                 x-transition:enter-start="opacity-0 -translate-y-4" 
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="lg:hidden bg-white border-t border-slate-100 p-6 space-y-4 shadow-2xl">
                <a href="#hero" @click="mobileMenuOpen = false" class="block text-13 font-black text-slate-800 border-b border-slate-50 hover:text-orange-500 transition pb-4 uppercase tracking-tighter">Beranda</a>
                <a href="#about" @click="mobileMenuOpen = false" class="block text-13 font-black text-slate-800 border-b border-slate-50 hover:text-orange-500 transition pb-4 uppercase tracking-tighter">Tentang</a>
                <a href="#program" @click="mobileMenuOpen = false" class="block text-13 font-black text-slate-800 border-b border-slate-50 hover:text-orange-500 transition pb-4 uppercase tracking-tighter">Program</a>
                <a href="#info" @click="mobileMenuOpen = false" class="block text-13 font-black text-slate-800 border-b border-slate-50 pb-4 hover:text-orange-500 transition uppercase tracking-tighter">Info</a>
                <a href="#mitra" @click="mobileMenuOpen = false" class="block text-13 font-black text-slate-800 border-b border-slate-50 pb-4 hover:text-orange-500 transition uppercase tracking-tighter">Mitra</a>
                <a href="#fitur" @click="mobileMenuOpen = false" class="block text-13 font-black text-slate-800 border-b border-slate-50 pb-4 hover:text-orange-500 transition uppercase tracking-tighter">Fitur</a>
                <a href="#article" @click="mobileMenuOpen = false" class="block text-13 font-black text-slate-800 border-b border-slate-50 pb-4 hover:text-orange-500 transition uppercase tracking-tighter">Artikel</a>
                <div class="pt-6">
                    <a href="#" class="block w-full bg-orange-500 hover:bg-orange-600 text-white py-5 rounded-2xl text-center font-black uppercase transition tracking-widest shadow-lg">Donasi Sekarang</a>
                </div>
            </div>
        </nav>
    </navbar>

    <hero x-data="{ 
            active: 1, 
            total: 3, 
            autoplayInterval: null,
            isAnimating: false,
            useAnimation: true,
            resumeTimer: null,
            
            // Fungsi menyalakan autoplay
            startAutoplay() {
                this.stopAutoplay();
                this.autoplayInterval = setInterval(() => {
                    this.next();
                }, 5000);
            },

            // Fungsi mematikan autoplay
            stopAutoplay() {
                clearInterval(this.autoplayInterval);
            },

            next() {
                if (this.isAnimating) return;
                this.isAnimating = true;
                this.useAnimation = true;
                this.active++;
                
                if (this.active > this.total) {
                    setTimeout(() => {
                        this.useAnimation = false; 
                        this.active = 1;
                        this.isAnimating = false;
                    }, 700);
                } else {
                    setTimeout(() => { this.isAnimating = false; }, 700);
                }
            },

            prev() {
                if (this.isAnimating) return;
                this.isAnimating = true;
                
                if (this.active === 1) {
                    this.useAnimation = false; 
                    this.active = this.total + 1;
                    setTimeout(() => {
                        this.useAnimation = true; 
                        this.active = this.total;
                        setTimeout(() => { this.isAnimating = false; }, 700);
                    }, 30);
                } else {
                    this.useAnimation = true;
                    this.active--;
                    setTimeout(() => { this.isAnimating = false; }, 700);
                }
            },

            // 1. Tahan (Hold): Berhenti seketika
            holdPause() {
                this.stopAutoplay();
                clearTimeout(this.resumeTimer);
            },

            // 2. Lepas (Release): Diam 1 detik, baru lanjut autoplay
            handleRelease() {
                clearTimeout(this.resumeTimer);
                this.resumeTimer = setTimeout(() => {
                    this.startAutoplay();
                }, 1000); 
            }
        }" 
        x-init="startAutoplay()" 
        class="relative block w-full bg-white pt-6 pb-10">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-[2rem] md:rounded-[3.5rem] shadow-2xl aspect-[16/9] md:aspect-[21/9] bg-slate-900 group">
                
                <div class="flex h-full w-full"
                    :class="useAnimation ? 'slider-animate' : 'slider-no-animate'"
                    :style="`transform: translateX(-${(active - 1) * 100}%)`"
                    @mousedown="holdPause()" 
                    @mouseup="handleRelease()"
                    @touchstart="holdPause()" 
                    @touchend="handleRelease()"
                    class="cursor-pointer">
                    
                    <div class="h-full w-full shrink-0">
                        <img src="https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/19133834/Web-Banner-Fidyah-1447H-2048x730.webp" class="h-full w-full object-cover select-none pointer-events-none">
                    </div>
                    
                    <div class="h-full w-full shrink-0">
                        <img src="https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/23112002/Lazismu-Buton-Seminar-Kepedulian-Sosial.jpg" class="h-full w-full object-cover select-none pointer-events-none">
                    </div>
                    
                    <div class="h-full w-full shrink-0">
                        <img src="https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/23104057/Tebar-Takjil-Pulang-Pisau-ok.jpg" class="h-full w-full object-cover select-none pointer-events-none">
                    </div>

                    <div class="h-full w-full shrink-0">
                        <img src="https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/19133834/Web-Banner-Fidyah-1447H-2048x730.webp" class="h-full w-full object-cover select-none pointer-events-none">
                    </div>
                </div>

                <div class="absolute inset-0 z-20 flex pointer-events-none">
                    <div @click="prev()" @mousedown="holdPause()" @mouseup="handleRelease()" class="h-full w-1/2 cursor-pointer pointer-events-auto group/btn flex items-center justify-start pl-10">
                        <div class="bg-white/20 backdrop-blur-md p-3 rounded-full text-white opacity-0 group-hover/btn:opacity-100 transition-opacity">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7" /></svg>
                        </div>
                    </div>
                    <div @click="next()" @mousedown="holdPause()" @mouseup="handleRelease()" class="h-full w-1/2 cursor-pointer pointer-events-auto group/btn flex items-center justify-end pr-10">
                        <div class="bg-white/20 backdrop-blur-md p-3 rounded-full text-white opacity-0 group-hover/btn:opacity-100 transition-opacity">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" /></svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-center gap-3">
                <template x-for="i in total">
                    <button @click="active = i; useAnimation = true; holdPause(); handleRelease()" 
                            :class="(active === i || (active > total && i === 1)) ? 'bg-orange-500 w-10 border border-orange-500' : 'bg-slate-200 w-2.5 hover:bg-slate-300'" 
                            class="h-2.5 rounded-full transition-all duration-500 cursor-pointer focus:outline-none"></button>
                </template>
            </div>
        </div>
    </hero>

    <about id="about" class="block py-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
                
                <div class="flex-1 relative">
                    <div class="relative z-10 rounded-[3rem] overflow-hidden shadow-2xl border-8 border-slate-50 group">
                        <img src="https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/19105953/Kado-Ramadan-Lansia-Laz-BanyumasOK.jpg" 
                             class="w-full h-full object-cover aspect-[4/3] group-hover:scale-105 transition duration-700" 
                             alt="Aktivitas Lazismu">
                    </div>
                    
                    <div class="absolute -bottom-10 -right-4 md:-right-10 z-20 bg-orange-500 text-white p-8 rounded-[2.5rem] shadow-2xl shadow-orange-200 hidden sm:block">
                        <p class="text-4xl font-black mb-1 leading-none">22+</p>
                        <p class="text-[10px] font-bold uppercase tracking-widest leading-tight">Tahun<br>Berkhidmat</p>
                    </div>

                    <div class="absolute -top-10 -left-10 w-64 h-64 bg-orange-50 rounded-full blur-3xl -z-10"></div>
                </div>

                <div class="flex-1">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-orange-50 text-orange-600 text-[10px] font-black rounded-full mb-8 uppercase tracking-widest">
                        Profil Lembaga
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black text-slate-950 leading-[1.1] tracking-tighter mb-8 uppercase">
                        Mengenal Lebih Dekat <br><span class="text-orange-500">Lazismu</span>
                    </h2>
                    
                    <div class="space-y-6 text-slate-600 leading-relaxed text-sm md:text-base">
                        <p class="text-justify">
                            <strong>LAZISMU</strong> adalah lembaga amil zakat nasional dengan SK Menag No. 90 Tahun 2022, yang berkhidmat dalam pemberdayaan masyarakat melalui pendayagunaan dana zakat, infaq, wakaf dan dana kedermawanan lainnya secara profesional.
                        </p>
                        
                        <div class="bg-slate-50 p-6 rounded-2xl border-l-4 border-orange-500 italic font-medium text-slate-800 shadow-xs">
                            "Menjadi Lembaga Amil Zakat Terpercaya, Profesional, dan Transparan."
                        </div>
                        
                        <p class="text-justify text-sm">
                            Didirikan oleh Pengurus Pusat (PP) Muhammadiyah pada tahun 2002, Lazismu hadir sebagai solusi atas permasalahan kemiskinan yang terus meningkat. Kami berkomitmen untuk menyalurkan amanah Anda secara tepat sasaran demi kemaslahatan umat.
                        </p>
                    </div>

                    <div class="mt-12 grid grid-cols-2 gap-8">
                        <div>
                            <h4 class="text-xs font-black text-orange-500 uppercase tracking-widest mb-2">Amanah</h4>
                            <p class="text-[11px] text-slate-500 leading-relaxed">Dikelola dengan standar audit yang ketat dan transparan setiap periodenya.</p>
                        </div>
                        <div>
                            <h4 class="text-xs font-black text-orange-500 uppercase tracking-widest mb-2">Terpadu</h4>
                            <p class="text-[11px] text-slate-500 leading-relaxed">Program yang terintegrasi untuk pemberdayaan masyarakat yang berkelanjutan.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </about>

    <program id="program" class="py-24 bg-white overflow-hidden" 
        x-data="{ 
            activePilar: 'pendidikan',
            pilarData: {
                pendidikan: {
                    title: 'Pendidikan', color: 'text-blue-600', lightBg: 'bg-blue-50',
                    icon: '<path d=\'M12 14l9-5-9-5-9 5 9 5z\'/><path d=\'M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z\'/>',
                    desc: 'Mewujudkan generasi cerdas dan berakhlak melalui beasiswa serta dukungan sarana pendidikan untuk yatim dan dhuafa.',
                    programs: [
                        { name: 'Beasiswa Sang Surya', img: 'https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/23112002/Lazismu-Buton-Seminar-Kepedulian-Sosial.jpg', info: 'Bantuan biaya kuliah untuk mahasiswa berprestasi.' },
                        { name: 'Beasiswa Mentari', img: 'https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/19105953/Kado-Ramadan-Lansia-Laz-BanyumasOK.jpg', info: 'Subsidi biaya sekolah tingkat SD hingga SMA.' }
                    ]
                },
                kesehatan: {
                    title: 'Kesehatan', color: 'text-red-600', lightBg: 'bg-red-50',
                    icon: '<path d=\'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z\'/>',
                    desc: 'Layanan medis gratis, bantuan biaya pengobatan, dan penyediaan armada ambulans darurat.',
                    programs: [
                        { name: 'Ambulans Gratis', img: 'https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/23104057/Tebar-Takjil-Pulang-Pisau-ok.jpg', info: 'Layanan antar jemput pasien 24 jam wilayah Cirebon.' }
                    ]
                },
                ekonomi: {
                    title: 'Ekonomi', color: 'text-green-600', lightBg: 'bg-green-50',
                    icon: '<path d=\'M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3 1.343 3-3-1.343-3-3-3z\'/><path d=\'M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z\'/>',
                    desc: 'Pemberdayaan ekonomi melalui modal usaha mikro dan pendampingan kemandirian umat.',
                    programs: [
                        { name: 'UMKM Bangkit', img: 'https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/19133834/Web-Banner-Fidyah-1447H-2048x730.webp', info: 'Bantuan modal dan gerobak untuk pedagang kecil.' }
                    ]
                },
                dakwah: { 
                    title: 'Dakwah', color: 'text-purple-600', lightBg: 'bg-purple-50', 
                    icon: '<path d=\'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H15\'/>', 
                    desc: 'Mensyiarkan nilai Islam inklusif dan bantuan sosial untuk pejuang dakwah di pelosok.', 
                    programs: [{ name: 'Kado Ramadhan', img: 'https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/19105953/Kado-Ramadan-Lansia-Laz-BanyumasOK.jpg', info: 'Paket sembako untuk Marbot dan Guru Ngaji.' }] 
                },
                kemanusiaan: { 
                    title: 'Kemanusiaan', color: 'text-orange-600', lightBg: 'bg-orange-50', 
                    icon: '<path d=\'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9\'/>', 
                    desc: 'Respon cepat tanggap bencana, bantuan kemanusiaan darurat, dan aksi sosial global.', 
                    programs: [{ name: 'Aksi Siaga Bencana', img: 'https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/23104057/Tebar-Takjil-Pulang-Pisau-ok.jpg', info: 'Bantuan logistik dan tim medis untuk lokasi bencana.' }] 
                },
                lingkungan: { 
                    title: 'Lingkungan', color: 'text-teal-600', lightBg: 'bg-teal-50', 
                    icon: '<path d=\'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z\'/>', 
                    desc: 'Melestarikan lingkungan hidup melalui program sanitasi, air bersih, dan energi terbarukan.', 
                    programs: [{ name: 'Sumur Bor', img: 'https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/19133834/Web-Banner-Fidyah-1447H-2048x730.webp', info: 'Penyediaan akses air bersih di daerah kekeringan.' }] 
                }
            }
        }">

        <style>
            .no-scrollbar::-webkit-scrollbar { display: none; }
            .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        </style>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-12">
                <div class="max-w-xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-orange-50 text-orange-600 text-[9px] font-black rounded-full mb-4 uppercase tracking-widest">
                        Pilar Strategis
                    </div>
                    <h2 class="text-3xl md:text-5xl font-black text-slate-950 uppercase tracking-tighter">
                        Program <span class="text-orange-500">Unggulan</span>
                    </h2>
                </div>

                <div class="flex bg-slate-50 p-1.5 rounded-2xl border border-slate-100 overflow-x-auto no-scrollbar gap-1">
                    <template x-for="(data, key) in pilarData" :key="key">
                        <button @click="activePilar = key" 
                                :class="activePilar === key ? 'bg-white shadow-md ' + data.color : 'text-slate-400 hover:text-slate-600'"
                                class="flex items-center gap-3 px-5 py-2.5 rounded-xl transition-all duration-300 group whitespace-nowrap">
                            <svg class="w-4 h-4 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" x-html="data.icon"></svg>
                            <span class="text-[10px] font-black uppercase tracking-widest" x-text="data.title"></span>
                        </button>
                    </template>
                </div>
            </div>

            <div class="relative min-h-[400px]">
                <template x-for="(data, key) in pilarData" :key="key">
                    <div x-show="activePilar === key"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-start">
                        
                        <div class="lg:col-span-5 pt-4">
                            <div :class="data.lightBg + ' ' + data.color" class="inline-flex p-4 rounded-3xl mb-8">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" x-html="data.icon"></svg>
                            </div>
                            <h3 class="text-3xl md:text-4xl font-black text-slate-950 uppercase mb-6 leading-none" x-text="'Pilar ' + data.title"></h3>
                            <p class="text-slate-500 leading-relaxed text-sm md:text-base mb-10" x-text="data.desc"></p>
                            
                            <div class="flex items-center gap-4">
                                <div class="h-[2px] w-12 bg-slate-200"></div>
                                <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none">Lazismu Cirebon</span>
                            </div>
                        </div>

                        <div class="lg:col-span-7 grid grid-cols-1 md:grid-cols-2 gap-6">
                            <template x-for="prog in data.programs" :key="prog.name">
                                <div class="group bg-slate-50 rounded-[2.5rem] p-6 hover:bg-white hover:shadow-2xl hover:shadow-slate-200 transition-all duration-500 border border-transparent hover:border-slate-100">
                                    <div class="aspect-video rounded-3xl overflow-hidden mb-6">
                                        <img :src="prog.img" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 pointer-events-none">
                                    </div>
                                    <h4 class="text-sm font-black text-slate-950 uppercase mb-2 leading-none" x-text="prog.name"></h4>
                                    <p class="text-[11px] text-slate-400 leading-relaxed mb-6" x-text="prog.info"></p>
                                    <button class="w-full py-3 bg-white border border-slate-200 rounded-xl text-[9px] font-black uppercase tracking-widest group-hover:bg-orange-500 group-hover:text-white group-hover:border-transparent transition-all shadow-sm">
                                        Lihat Detail
                                    </button>
                                </div>
                            </template>
                        </div>

                    </div>
                </template>
            </div>
        </div>
    </program>

    <info id="info" class="block py-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-16">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-orange-50 text-orange-600 text-[10px] font-black rounded-full mb-6 uppercase tracking-widest">
                        Warta Lazismu
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black text-slate-950 leading-tight uppercase tracking-tighter">
                        Kabar <span class="text-orange-500">Kebaikan</span> <br>Teranyar
                    </h2>
                </div>
                <a href="#" class="group flex items-center gap-3 text-xs font-black uppercase tracking-[0.2em] text-slate-400 hover:text-orange-600 transition-colors">
                    Lihat Semua Berita 
                    <div class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center group-hover:border-orange-500 group-hover:bg-orange-500 group-hover:text-white transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </div>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                
                <article class="group cursor-pointer">
                    <div class="relative aspect-[16/10] rounded-[2.5rem] overflow-hidden mb-8 shadow-lg">
                        <img src="https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/19105953/Kado-Ramadan-Lansia-Laz-BanyumasOK.jpg" 
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-700" 
                             alt="Penyaluran Zakat">
                        <div class="absolute top-6 left-6">
                            <span class="px-4 py-2 bg-white/90 backdrop-blur-md text-slate-950 text-[9px] font-black uppercase rounded-xl shadow-sm">Penyaluran</span>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="flex items-center gap-3 mb-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                            <time>15 Mei 2026</time>
                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                            <span>Admin</span>
                        </div>
                        <h3 class="text-xl font-black text-slate-950 group-hover:text-orange-600 transition-colors leading-tight uppercase mb-4 tracking-tight">
                            Lazismu Cirebon Salurkan Paket Sembako Untuk Lansia Dhuafa
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed line-clamp-2">
                            Program rutin bulanan kembali dilaksanakan dengan menyasar ratusan penerima manfaat di wilayah pelosok Cirebon...
                        </p>
                    </div>
                </article>

                <article class="group cursor-pointer">
                    <div class="relative aspect-[16/10] rounded-[2.5rem] overflow-hidden mb-8 shadow-lg">
                        <img src="https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/23112002/Lazismu-Buton-Seminar-Kepedulian-Sosial.jpg" 
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-700" 
                             alt="Pendidikan">
                        <div class="absolute top-6 left-6">
                            <span class="px-4 py-2 bg-white/90 backdrop-blur-md text-slate-950 text-[9px] font-black uppercase rounded-xl shadow-sm">Pendidikan</span>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="flex items-center gap-3 mb-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                            <time>12 Mei 2026</time>
                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                            <span>Admin</span>
                        </div>
                        <h3 class="text-xl font-black text-slate-950 group-hover:text-orange-600 transition-colors leading-tight uppercase mb-4 tracking-tight">
                            Membuka Jendela Dunia Melalui Program Beasiswa Sang Surya
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed line-clamp-2">
                            Pendaftaran beasiswa tingkat perguruan tinggi resmi dibuka untuk mendukung mahasiswa berprestasi...
                        </p>
                    </div>
                </article>

                <article class="group cursor-pointer">
                    <div class="relative aspect-[16/10] rounded-[2.5rem] overflow-hidden mb-8 shadow-lg">
                        <img src="https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/23104057/Tebar-Takjil-Pulang-Pisau-ok.jpg" 
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-700" 
                             alt="Ramadan">
                        <div class="absolute top-6 left-6">
                            <span class="px-4 py-2 bg-white/90 backdrop-blur-md text-slate-950 text-[9px] font-black uppercase rounded-xl shadow-sm">Ramadan</span>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="flex items-center gap-3 mb-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                            <time>10 Mei 2026</time>
                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                            <span>Admin</span>
                        </div>
                        <h3 class="text-xl font-black text-slate-950 group-hover:text-orange-600 transition-colors leading-tight uppercase mb-4 tracking-tight">
                            Semarak Berbagi Takjil di Pusat Kota Cirebon Selama Ramadan
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed line-clamp-2">
                            Antusiasme masyarakat sangat tinggi dalam mengikuti program berbagi kebaikan di bulan suci kali ini...
                        </p>
                    </div>
                </article>

            </div>
        </div>
    </info>

    <mitra id="mitra" class="block py-16 bg-slate-50 overflow-hidden border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10 text-center">
            <p class="text-[10px] font-black uppercase tracking-[0.4em] text-slate-400">Mitra Strategis & Kolaborasi</p>
        </div>

        <div class="relative flex overflow-hidden group">
            <div class="absolute inset-y-0 left-0 w-32 bg-gradient-to-r from-slate-50 to-transparent z-20"></div>
            <div class="absolute inset-y-0 right-0 w-32 bg-gradient-to-l from-slate-50 to-transparent z-20"></div>
            
            <div class="flex whitespace-nowrap">
                <div class="flex animate-loop-scroll gap-12 md:gap-24 items-center px-6 md:px-12">
                    <span class="text-xl md:text-2xl font-black text-slate-300 hover:text-orange-500 transition-colors uppercase tracking-tighter">Bank Syariah Indonesia</span>
                    <span class="text-xl md:text-2xl font-black text-slate-300 hover:text-orange-500 transition-colors uppercase tracking-tighter">Bank Muamalat</span>
                    <span class="text-xl md:text-2xl font-black text-slate-300 hover:text-orange-500 transition-colors uppercase tracking-tighter">Muhammadiyah</span>
                    <span class="text-xl md:text-2xl font-black text-slate-300 hover:text-orange-500 transition-colors uppercase tracking-tighter">Kementerian Agama</span>
                    <span class="text-xl md:text-2xl font-black text-slate-300 hover:text-orange-500 transition-colors uppercase tracking-tighter">BAZNAS RI</span>
                </div>
                
                <div class="flex animate-loop-scroll gap-12 md:gap-24 items-center px-6 md:px-12" aria-hidden="true">
                    <span class="text-xl md:text-2xl font-black text-slate-300 hover:text-orange-500 transition-colors uppercase tracking-tighter">Bank Syariah Indonesia</span>
                    <span class="text-xl md:text-2xl font-black text-slate-300 hover:text-orange-500 transition-colors uppercase tracking-tighter">Bank Muamalat</span>
                    <span class="text-xl md:text-2xl font-black text-slate-300 hover:text-orange-500 transition-colors uppercase tracking-tighter">Muhammadiyah</span>
                    <span class="text-xl md:text-2xl font-black text-slate-300 hover:text-orange-500 transition-colors uppercase tracking-tighter">Kementerian Agama</span>
                    <span class="text-xl md:text-2xl font-black text-slate-300 hover:text-orange-500 transition-colors uppercase tracking-tighter">BAZNAS RI</span>
                </div>
            </div>
        </div>

        <style>
            @keyframes loop-scroll {
                from { transform: translateX(0); }
                to { transform: translateX(-100%); }
            }
            .animate-loop-scroll {
                display: flex;
                animation: loop-scroll 40s linear infinite;
            }
            /* Paused saat hover agar user bisa baca */
            .group:hover .animate-loop-scroll {
                animation-play-state: paused;
            }
        </style>
    </mitra>

    <fitur id="fitur" class="block py-20 bg-[#FFF9F5] overflow-hidden relative">
        <div class="absolute top-0 right-0 w-64 h-64 bg-orange-100/40 rounded-full blur-[80px] -z-10"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14">
                <div class="max-w-xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-orange-50 text-orange-600 text-[8px] font-black rounded-full mb-3 uppercase tracking-widest border border-orange-100">
                        Pusat Bantuan
                    </div>
                    <h2 class="text-3xl md:text-4xl font-black text-slate-900 leading-none uppercase tracking-tighter">
                        Masih Bingung <span class="text-orange-500">Berzakat?</span>
                    </h2>
                </div>
                <p class="text-slate-500 text-xs md:text-sm font-medium max-w-xs md:text-right italic">
                    "Mudahkan langkah kebaikan Anda bersama layanan profesional kami."
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                
                <div class="group relative bg-white rounded-[2.5rem] p-8 transition-all duration-500 hover:-translate-y-3 hover:shadow-[0_30px_60px_-15px_rgba(249,115,22,0.2)] border border-slate-100 overflow-hidden cursor-pointer">
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-orange-50 text-orange-500 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-orange-500 group-hover:text-white group-hover:rotate-[10deg] transition-all duration-500 shadow-sm">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                        </div>
                        <h3 class="text-xl font-black text-slate-900 uppercase mb-3 tracking-tight group-hover:text-orange-600 transition-colors">Konsultasi</h3>
                        <p class="text-slate-400 text-[11px] leading-relaxed mb-6">Tanyakan hukum zakat langsung kepada tim ahli syariah kami.</p>
                        <div class="flex items-center gap-2 text-[9px] font-black text-orange-500 uppercase tracking-widest">
                            <span>Hubungi Kami</span>
                            <span class="group-hover:translate-x-2 transition-transform duration-300">→</span>
                        </div>
                    </div>
                </div>

                <div class="group relative bg-white rounded-[2.5rem] p-8 transition-all duration-500 hover:-translate-y-3 hover:shadow-[0_30px_60px_-15px_rgba(249,115,22,0.2)] border border-slate-100 overflow-hidden cursor-pointer">
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-orange-50 text-orange-500 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-orange-500 group-hover:text-white group-hover:scale-110 transition-all duration-500 shadow-sm">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
                        </div>
                        <h3 class="text-xl font-black text-slate-900 uppercase mb-3 tracking-tight group-hover:text-orange-600 transition-colors">Kalkulator</h3>
                        <p class="text-slate-400 text-[11px] leading-relaxed mb-6">Hitung zakat profesi dan harta secara akurat dan otomatis.</p>
                        <div class="flex items-center gap-2 text-[9px] font-black text-orange-500 uppercase tracking-widest">
                            <span>Mulai Hitung</span>
                            <span class="group-hover:translate-x-2 transition-transform duration-300">→</span>
                        </div>
                    </div>
                </div>

                <div class="group relative bg-white rounded-[2.5rem] p-8 transition-all duration-500 hover:-translate-y-3 hover:shadow-[0_30px_60px_-15px_rgba(249,115,22,0.2)] border border-slate-100 overflow-hidden cursor-pointer">
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-orange-50 text-orange-500 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-orange-500 group-hover:text-white group-hover:translate-y-[-4px] transition-all duration-500 shadow-sm">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" /></svg>
                        </div>
                        <h3 class="text-xl font-black text-slate-900 uppercase mb-3 tracking-tight group-hover:text-orange-600 transition-colors">Laman Donasi</h3>
                        <p class="text-slate-400 text-[11px] leading-relaxed mb-6">Pilih berbagai program kemanusiaan untuk disalurkan.</p>
                        <div class="flex items-center gap-2 text-[9px] font-black text-orange-500 uppercase tracking-widest">
                            <span>Donasi Sekarang</span>
                            <span class="group-hover:translate-x-2 transition-transform duration-300">→</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button class="group/btn relative inline-flex items-center gap-4 px-10 py-5 bg-slate-900 text-white rounded-2xl font-black uppercase tracking-[0.2em] text-[9px] overflow-hidden transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-orange-500/20">
                    <span class="relative z-10">Kunjungi Pusat Layanan</span>
                    <svg class="w-4 h-4 relative z-10 group-hover/btn:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                    <div class="absolute inset-0 bg-orange-500 translate-y-full group-hover/btn:translate-y-0 transition-transform duration-500"></div>
                </button>
            </div>

        </div>
    </fitur>

    <article id="article" class="block py-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-16">
                <div class="max-w-xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-orange-50 text-orange-600 text-[9px] font-black rounded-full mb-4 uppercase tracking-widest border border-orange-100">
                        Warta Terkini
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight uppercase tracking-tighter">
                        Kabar <span class="text-orange-500">Kebaikan</span>
                    </h2>
                </div>
                <button class="px-6 py-3 border-2 border-slate-100 rounded-xl text-[10px] font-black uppercase tracking-widest text-slate-400 hover:border-orange-500 hover:text-orange-500 transition-all duration-300">
                    Lihat Semua Artikel
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                
                <article class="group cursor-pointer">
                    <div class="relative aspect-[16/10] rounded-[2.5rem] overflow-hidden mb-8 shadow-sm">
                        <img src="https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/19105953/Kado-Ramadan-Lansia-Laz-BanyumasOK.jpg" 
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-700" 
                             alt="Penyaluran Zakat">
                        <div class="absolute top-6 left-6">
                            <span class="px-4 py-2 bg-white/90 backdrop-blur-md text-slate-900 text-[9px] font-black uppercase rounded-xl">Pilar Sosial</span>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="flex items-center gap-3 mb-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                            <time>15 Mei 2026</time>
                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                            <span>Oleh Admin</span>
                        </div>
                        <h3 class="text-xl font-black text-slate-900 group-hover:text-orange-500 transition-colors leading-tight uppercase mb-4 tracking-tight">
                            Lazismu Cirebon Salurkan Paket Sembako Untuk Lansia Dhuafa
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed line-clamp-2 mb-6">
                            Program rutin bulanan kembali dilaksanakan dengan menyasar ratusan penerima manfaat di wilayah pelosok Cirebon...
                        </p>
                        <div class="w-10 h-1 bg-slate-100 group-hover:w-20 group-hover:bg-orange-500 transition-all duration-500"></div>
                    </div>
                </article>

                <article class="group cursor-pointer">
                    <div class="relative aspect-[16/10] rounded-[2.5rem] overflow-hidden mb-8 shadow-sm">
                        <img src="https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/23112002/Lazismu-Buton-Seminar-Kepedulian-Sosial.jpg" 
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-700" 
                             alt="Pendidikan">
                        <div class="absolute top-6 left-6">
                            <span class="px-4 py-2 bg-white/90 backdrop-blur-md text-slate-900 text-[9px] font-black uppercase rounded-xl">Pilar Pendidikan</span>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="flex items-center gap-3 mb-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                            <time>12 Mei 2026</time>
                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                            <span>Oleh Admin</span>
                        </div>
                        <h3 class="text-xl font-black text-slate-900 group-hover:text-orange-500 transition-colors leading-tight uppercase mb-4 tracking-tight">
                            Membuka Jendela Dunia Melalui Program Beasiswa Sang Surya
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed line-clamp-2 mb-6">
                            Pendaftaran beasiswa tingkat perguruan tinggi resmi dibuka untuk mendukung mahasiswa berprestasi...
                        </p>
                        <div class="w-10 h-1 bg-slate-100 group-hover:w-20 group-hover:bg-orange-500 transition-all duration-500"></div>
                    </div>
                </article>

                <article class="group cursor-pointer">
                    <div class="relative aspect-[16/10] rounded-[2.5rem] overflow-hidden mb-8 shadow-sm">
                        <img src="https://lazismuorg.sgp1.digitaloceanspaces.com/wp-content/uploads/2026/02/23104057/Tebar-Takjil-Pulang-Pisau-ok.jpg" 
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-700" 
                             alt="Kemanusiaan">
                        <div class="absolute top-6 left-6">
                            <span class="px-4 py-2 bg-white/90 backdrop-blur-md text-slate-900 text-[9px] font-black uppercase rounded-xl">Kemanusiaan</span>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="flex items-center gap-3 mb-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                            <time>10 Mei 2026</time>
                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                            <span>Oleh Admin</span>
                        </div>
                        <h3 class="text-xl font-black text-slate-900 group-hover:text-orange-500 transition-colors leading-tight uppercase mb-4 tracking-tight">
                            Aksi Cepat Tanggap: Lazismu Kirim Bantuan Logistik Bencana
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed line-clamp-2 mb-6">
                            Tim relawan dikerahkan menuju lokasi terdampak untuk mendistribusikan paket pangan dan obat-obatan...
                        </p>
                        <div class="w-10 h-1 bg-slate-100 group-hover:w-20 group-hover:bg-orange-500 transition-all duration-500"></div>
                    </div>
                </article>

            </div>
        </div>
    </article>

    <footer class="block bg-white pt-28 pb-10 relative overflow-hidden">
        <div class="absolute bottom-0 left-0 w-64 md:w-[480px] pointer-events-none opacity-90 translate-y-12 -translate-x-12">
            <img src="https://lazismu.org/images/kelopak-footer.png" alt="decor" class="w-full h-auto">
        </div>

        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 mb-24">
                
                <div class="lg:col-span-5 pr-0 lg:pr-12">
                    <div class="mb-10">
                        <img src="https://lazismu.org/wp-content/uploads/2025/04/logo-lazismu.png" alt="Lazismu Logo" class="h-16 w-auto object-contain">
                    </div>
                    <p class="text-slate-500 text-[11px] leading-[1.8] text-justify font-medium mb-6 italic">
                        LAZISMU adalah lembaga zakat nasional dengan SK Menag No. 90 Tahun 2022, yang berkhidmat dalam pemberdayaan masyarakat melalui pendayagunaan dana zakat, infaq, wakaf dan dana kedermawanan lainnya. Lazismu tidak menerima segala bentuk dana yang bersumber dari kejahatan.
                    </p>
                </div>

                <div class="lg:col-span-3">
                    <h4 class="text-slate-900 text-xs font-black uppercase tracking-[0.2em] mb-10 relative inline-block">
                        Alamat
                        <span class="absolute -bottom-2 left-0 w-8 h-1 bg-orange-500 rounded-full"></span>
                    </h4>
                    <ul class="space-y-6">
                        <li class="flex gap-4 items-start group">
                            <div class="w-9 h-9 rounded-xl bg-orange-50 text-orange-500 flex items-center justify-center shrink-0 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                                <i class="fa-solid fa-location-dot text-sm"></i>
                            </div>
                            <span class="text-slate-500 text-[11px] leading-relaxed pt-1">Jl. Jambru No.5, Kenari, Kec. Senen, Jakarta Pusat 10430</span>
                        </li>
                        <li class="flex gap-4 items-center group">
                            <div class="w-9 h-9 rounded-xl bg-orange-50 text-orange-500 flex items-center justify-center shrink-0 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                                <i class="fa-solid fa-envelope text-sm"></i>
                            </div>
                            <span class="text-slate-500 text-[11px] font-bold">info@lazismu.org</span>
                        </li>
                        <li class="flex gap-4 items-center group">
                            <div class="w-9 h-9 rounded-xl bg-orange-50 text-orange-500 flex items-center justify-center shrink-0 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                                <i class="fa-solid fa-phone text-sm"></i>
                            </div>
                            <span class="text-slate-500 text-[11px] font-bold">0856-1626-222</span>
                        </li>
                    </ul>
                </div>

                <div class="lg:col-span-2">
                    <h4 class="text-slate-900 text-xs font-black uppercase tracking-[0.2em] mb-10 relative inline-block">
                        Menu
                        <span class="absolute -bottom-2 left-0 w-8 h-1 bg-orange-500 rounded-full"></span>
                    </h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-slate-400 hover:text-orange-600 text-[10px] font-black uppercase tracking-widest transition-all block">FAQ</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-orange-600 text-[10px] font-black uppercase tracking-widest transition-all block">Laman Donasi</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-orange-600 text-[10px] font-black uppercase tracking-widest transition-all block">Publikasi</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-orange-600 text-[10px] font-black uppercase tracking-widest transition-all block">Kebijakan Privasi</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-2">
                    <h4 class="text-slate-900 text-xs font-black uppercase tracking-[0.2em] mb-10 relative inline-block">
                        Media Sosial
                        <span class="absolute -bottom-2 left-0 w-8 h-1 bg-orange-500 rounded-full"></span>
                    </h4>
                    <div class="grid grid-cols-3 gap-2">
                        <a href="#" class="w-10 h-10 rounded-lg bg-slate-100 text-slate-600 flex items-center justify-center hover:bg-[#E1306C] hover:text-white transition-all duration-300"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-slate-100 text-slate-600 flex items-center justify-center hover:bg-[#000000] hover:text-white transition-all duration-300"><i class="fab fa-tiktok"></i></a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-slate-100 text-slate-600 flex items-center justify-center hover:bg-[#FF0000] hover:text-white transition-all duration-300"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-slate-100 text-slate-600 flex items-center justify-center hover:bg-[#1877F2] hover:text-white transition-all duration-300"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-slate-100 text-slate-600 flex items-center justify-center hover:bg-[#25D366] hover:text-white transition-all duration-300"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-slate-100 text-slate-600 flex items-center justify-center hover:bg-[#0077B5] hover:text-white transition-all duration-300"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="pt-10 border-t border-slate-50 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-300 text-[9px] font-black uppercase tracking-[0.2em]">
                    © 2026 LAZISMU CIREBON <span class="mx-2 text-slate-200">|</span> MEMBER OF MUHAMMADIYAH
                </p>
                <p class="text-slate-300 text-[9px] font-black uppercase tracking-[0.2em]">
                    Crafted by <span class="text-orange-500 hover:text-slate-900 transition-colors cursor-pointer">Dede Hermawan</span>
                </p>
            </div>
        </div>
    </footer>

    <button 
        x-data="{ show: false }" 
        x-on:scroll.window="show = window.pageYOffset > 500"
        x-show="show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-10 scale-50"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        @click="window.scrollTo({top: 0, behavior: 'smooth'})"
        class="fixed bottom-8 right-8 z-50 w-12 h-12 bg-orange-500 text-white rounded-xl shadow-2xl shadow-orange-500/30 flex items-center justify-center hover:bg-slate-900 hover:-translate-y-2 transition-all duration-500 group">
        <i class="fa-solid fa-chevron-up text-lg group-hover:animate-bounce"></i>
    </button>

    @stack('scripts')
</body>
</html>