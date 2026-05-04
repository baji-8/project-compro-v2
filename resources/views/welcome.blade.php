<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] antialiased">

        <nav class="sticky top-0 z-50 w-full bg-white/80 dark:bg-[#161615]/80 backdrop-blur-md border-b border-[#19140015] dark:border-[#ffffff15]">
            <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
                <a href="/" class="flex items-center gap-3 font-bold text-lg tracking-tight dark:text-white">
                    <img src="{{ asset('images/logp dgp.png') }}" alt="Logo DGP" class="h-10 w-auto object-contain">
                    <span class="hidden sm:inline">PT DWIDAYA GUNA PRAKARSA</span>
                </a>

                <div class="hidden md:flex items-center gap-8 text-sm font-medium text-[#706f6c] dark:text-[#A1A09A]">
                    <a href="#" class="hover:text-black dark:hover:text-white transition-colors">Beranda</a>
                    <a href="#layanan" class="hover:text-black dark:hover:text-white transition-colors">Layanan</a>
                    <a href="#gallery" class="hover:text-black dark:hover:text-white transition-colors">Gallery Project</a>
                    <a href="#tentang" class="hover:text-black dark:hover:text-white transition-colors">Tentang</a>
                </div>

                <div class="flex items-center gap-4">
                    @auth
                        <a href="{{ url('/admin') }}" class="text-sm font-medium underline underline-offset-4 dark:text-white">Dashboard Admin</a>
                    @endauth

                    <a href="https://wa.me/628111664849" class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-full text-xs font-semibold hover:bg-green-700 transition-all shadow-sm">
                        <i class="fab fa-whatsapp mr-2 text-sm"></i> Konsultasi
                    </a>
                </div>
            </div>
        </nav>

        <div class="flex flex-col items-center min-h-screen">
            
            <!-- Hero Section -->
            <main class="relative w-full min-h-[600px] flex items-center justify-center overflow-hidden bg-[#0a0a0a]">
                <div class="absolute inset-0 z-0">
                    <img src="{{ asset('images/hero-machine.jpg') }}" alt="Industrial Machine" class="w-full h-full object-cover opacity-40">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#0a0a0a] via-[#0a0a0a]/60 to-transparent"></div>
                </div>

                <div class="relative z-10 max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center w-full">
                    <div class="text-white">
                        <div class="inline-block px-3 py-1 rounded-md bg-blue-600 text-[10px] font-bold uppercase tracking-widest mb-4">
                            General Contractor & Engineering
                        </div>
                        <h1 class="text-4xl lg:text-6xl font-extrabold leading-tight mb-6">
                            Solusi Profesional <br>
                            <span class="text-blue-500">Perbaikan Mesin Industri</span>
                        </h1>
                        <p class="text-lg text-gray-300 mb-8 max-w-lg leading-relaxed">
                            Spesialis jasa rewinding dan overhaul elektro motor (Low & High Voltage), generator, transformator, hingga berbagai macam pompa dengan tenaga ahli profesional.
                        </p>
                        
                        <div class="flex flex-wrap gap-4">
                            <a href="https://wa.me/628111664849" class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg transition-all shadow-lg shadow-blue-900/20">
                                Hubungi Kami
                            </a>
                            <div class="flex items-center gap-3 px-6 py-4 border border-white/20 rounded-lg backdrop-blur-sm">
                                <i class="fa-solid fa-shield-halved text-blue-500 text-xl"></i>
                                <span class="text-sm font-medium">Garansi & Tepat Waktu</span>
                            </div>
                        </div>
                    </div>

                    <div class="hidden lg:block">
                        <div class="bg-white/5 border border-white/10 backdrop-blur-md p-8 rounded-2xl shadow-2xl">
                            <h3 class="text-xl font-bold text-white mb-6 border-b border-white/10 pb-4">Spesialis Kami:</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3 text-gray-300">
                                    <i class="fa-solid fa-check-circle text-blue-500 mt-1"></i>
                                    <span>Rewinding Rotor & Stator (AC/DC)</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-300">
                                    <i class="fa-solid fa-check-circle text-blue-500 mt-1"></i>
                                    <span>Overhaul Diesel & Gas Engine</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-300">
                                    <i class="fa-solid fa-check-circle text-blue-500 mt-1"></i>
                                    <span>Service Exhaust-gas Turbocharger</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-300">
                                    <i class="fa-solid fa-check-circle text-blue-500 mt-1"></i>
                                    <span>Maintenance Power Transformer</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Section Layanan -->
            <section id="layanan" class="py-20 bg-white dark:bg-[#0a0a0a] w-full">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="mb-16">
                        <h2 class="text-3xl font-extrabold dark:text-white mb-4">Layanan Unggulan Kami</h2>
                        <p class="text-gray-600 dark:text-gray-400 max-w-2xl">
                            Kami berkomitmen mendukung efisiensi produksi industri Anda melalui jasa perbaikan mesin yang profesional dan bergaransi.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">
                        @foreach($services as $service)
                        <div class="group p-8 rounded-3xl border border-[#19140015] dark:border-[#ffffff15] bg-white dark:bg-[#161615] hover:border-blue-500/50 transition-all duration-300">
                            <div class="flex items-start justify-between mb-8">
                                <div class="w-14 h-14 rounded-2xl bg-blue-600/10 flex items-center justify-center group-hover:bg-blue-600 transition-colors duration-500">
                                    <i class="fa-solid {{ $service->icon }} text-blue-600 group-hover:text-white text-2xl"></i>
                                </div>
                            </div>
                            
                            <h3 class="text-2xl font-bold dark:text-white mb-4">{{ $service->title }}</h3>

                            @php
                                // Logika Baru: Mencari posisi angka "1." pertama kali muncul
                                $pos = strpos($service->description, '1.');
                                
                                // Jika ada angka 1, kita pisahkan intro dan list-nya
                                if ($pos !== false) {
                                    $intro = substr($service->description, 0, $pos);
                                    $listContent = substr($service->description, $pos);
                                    $listItems = preg_split('/(?=\d\.)/', $listContent, -1, PREG_SPLIT_NO_EMPTY);
                                } else {
                                    // Jika tidak ada format angka, anggap semua adalah deskripsi biasa
                                    $intro = $service->description;
                                    $listItems = [];
                                }
                            @endphp

                            <!-- Teks Deskripsi (Muncul tanpa icon bullet) -->
                            <p class="text-gray-600 dark:text-[#A1A09A] leading-relaxed mb-6">
                                {{ trim($intro) }}
                            </p>

                            <!-- List Item (Hanya muncul jika ada format 1., 2., dst) -->
                            @if(count($listItems) > 0)
                            <ul class="space-y-3 mb-8">
                                @foreach($listItems as $item)
                                    <li class="flex items-start gap-3 text-gray-600 dark:text-[#A1A09A] leading-relaxed">
                                        <span class="text-blue-500 mt-1.5">
                                            <i class="fa-solid fa-circle-check text-[10px]"></i>
                                        </span>
                                        <span>{{ trim($item) }}</span>
                                    </li>
                                @endforeach
                            </ul>
                            @endif
                            
                            <a href="https://wa.me/628111664849" class="text-sm font-bold text-blue-600 hover:underline uppercase tracking-wider">Konsultasi Sekarang &rarr;</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- Section Gallery -->
            <section id="gallery" class="py-20 w-full bg-[#FDFDFC] dark:bg-[#0a0a0a]">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="flex items-center justify-between mb-12">
                        <div>
                            <h2 class="text-3xl font-bold dark:text-white mb-2">Gallery Project</h2>
                            <p class="text-gray-500 dark:text-gray-400">Dokumentasi pengerjaan terbaru di lapangan.</p>
                        </div>
                        <a href="{{ route('gallery.all') }}" class="text-sm font-medium text-blue-600 hover:underline">Lihat Semua &rarr;</a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @forelse($galleries as $item)
                            <div class="group relative aspect-square bg-gray-100 rounded-2xl overflow-hidden border border-[#19140015] dark:border-[#ffffff15]">
                                <img src="{{ asset('storage/' . $item->image) }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="{{ $item->title }}">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-6 flex flex-col justify-end">
                                    <h5 class="text-white font-bold text-lg">{{ $item->title }}</h5>
                                    <p class="text-gray-300 text-sm line-clamp-2">{{ $item->description }}</p>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full py-20 text-center border-2 border-dashed border-gray-200 dark:border-gray-800 rounded-3xl">
                                <i class="fa-solid fa-images text-4xl text-gray-300 mb-4"></i>
                                <p class="text-gray-500">Belum ada dokumentasi proyek saat ini.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </section>

            <!-- Section Tentang Kami -->
            <section id="tentang" class="py-24 bg-white dark:bg-[#0a0a0a] border-t border-[#19140015] dark:border-[#ffffff15]">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid lg:grid-cols-2 gap-16 items-center">
                        <div>
                            <h2 class="text-3xl font-extrabold dark:text-white mb-6">Tentang Kami</h2>
                            <p class="text-gray-600 dark:text-[#A1A09A] leading-relaxed mb-8">
                                PT DWIDAYA GUNA PRAKARSA adalah perusahaan General Contractor & Engineering yang berfokus pada kualitas dan ketepatan waktu. Kami hadir sebagai solusi terpercaya untuk kebutuhan perbaikan mesin industri di seluruh Indonesia.
                            </p>
                            
                            <div class="space-y-6">
                                <div class="flex gap-4">
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-600/10 flex items-center justify-center text-blue-600 font-bold">V</div>
                                    <div>
                                        <h4 class="font-bold dark:text-white">Visi</h4>
                                        <p class="text-sm text-gray-500">Menjadi mitra teknik industri terbaik dengan standar profesionalisme tinggi.</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-green-600/10 flex items-center justify-center text-green-600 font-bold">M</div>
                                    <div>
                                        <h4 class="font-bold dark:text-white">Misi</h4>
                                        <p class="text-sm text-gray-500">Memberikan pelayanan prima melalui tenaga ahli kompeten dan peralatan modern.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-[#161615] rounded-3xl p-8 border border-white/5 relative overflow-hidden">
                            <div class="relative z-10">
                                <h3 class="text-xl font-bold text-white mb-4">Workshop Utama</h3>
                                <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                                    Jl. Kramat Pulo Gundul Gg. K No. 34, RT 012 RW 010,<br>
                                    Kel. Tanah Tinggi, Kec. Johar Baru,<br>
                                    Jakarta Pusat 10540[cite: 1].
                                </p>
                                    <div class="flex flex-col gap-3">
                                        <!-- Link Telepon Kantor -->
                                        <a href="tel:02121473468" class="flex items-center gap-3 text-sm text-gray-300 hover:text-blue-500 transition-colors">
                                            <i class="fa-solid fa-phone text-blue-500"></i>
                                            021-21473468
                                        </a>
                                        <!-- Link Email -->
                                        <a href="mailto:dwidayagunaprakarsa@gmail.com" class="flex items-center gap-3 text-sm text-gray-300 hover:text-blue-500 transition-colors">
                                            <i class="fa-solid fa-envelope text-blue-500"></i>
                                            dwidayagunaprakarsa@gmail.com
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Dekorasi -->
                            <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-blue-600/20 blur-3xl rounded-full"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer class="bg-[#FDFDFC] dark:bg-[#0a0a0a] border-t border-[#19140015] dark:border-[#ffffff15] pt-16 pb-8">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid md:grid-cols-4 gap-12 mb-16">
                        <div class="col-span-2">
                            <a href="/" class="flex items-center gap-3 font-bold text-lg tracking-tight dark:text-white mb-6">
                                <img src="{{ asset('images/logp dgp.png') }}" alt="Logo DGP" class="h-10 w-auto object-contain">
                                <span>PT DWIDAYA GUNA PRAKARSA</span>
                            </a>
                            <p class="text-gray-500 text-sm max-w-sm leading-relaxed">
                                Spesialis Jasa Rewinding & Overhaul Elektro Motor, Generator, dan Transformator. Berpengalaman melayani industri besar dengan standar mutu tinggi[cite: 1].
                            </p>
                        </div>
                        
                        <div>
                            <h4 class="font-bold dark:text-white mb-6">Navigasi</h4>
                            <ul class="space-y-4 text-sm text-gray-500">
                                <li><a href="#beranda" class="hover:text-blue-600 transition-colors">Beranda</a></li>
                                <li><a href="#layanan" class="hover:text-blue-600 transition-colors">Layanan Kami</a></li>
                                <li><a href="#gallery" class="hover:text-blue-600 transition-colors">Gallery Project</a></li>
                                <li><a href="#tentang" class="hover:text-blue-600 transition-colors">Tentang Kami</a></li>
                            </ul>
                        </div>

                        <div>
                            <h4 class="font-bold dark:text-white mb-6">Hubungi Kami</h4>
                            <ul class="space-y-4 text-sm text-gray-500">
                                <li class="flex items-center gap-3">
                                    <i class="fab fa-whatsapp text-green-600 text-lg"></i>
                                    <!-- Link Chat WhatsApp Langsung -->
                                    <a href="https://wa.me/628111664849" target="_blank" class="hover:text-green-600 transition-colors">
                                        0811-166-4849
                                    </a>
                                </li>
                                <li class="flex items-center gap-3">
                                    <i class="fa-solid fa-clock text-blue-500"></i>
                                    <span>Senin - Sabtu (08:00 - 17:00)[cite: 1]</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="border-t border-[#19140010] pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                        <p class="text-xs text-gray-400">
                            &copy; {{ date('Y') }} PT DWIDAYA GUNA PRAKARSA. All rights reserved.
                        </p>
                        <div class="flex gap-6 text-xs text-gray-400">
                            <a href="#" class="hover:text-gray-600">Privacy Policy</a>
                            <a href="#" class="hover:text-gray-600">Terms of Service</a>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </body>
</html>