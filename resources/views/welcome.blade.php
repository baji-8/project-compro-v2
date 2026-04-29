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
                <a href="/" class="font-bold text-lg tracking-tight dark:text-white">
                    CV SURYA FAJAR
                </a>

                <div class="hidden md:flex items-center gap-8 text-sm font-medium text-[#706f6c] dark:text-[#A1A09A]">
                    <a href="#" class="hover:text-black dark:hover:text-white transition-colors">Beranda</a>
                    <a href="#" class="hover:text-black dark:hover:text-white transition-colors">Layanan</a>
                    <a href="#gallery" class="hover:text-black dark:hover:text-white transition-colors">Gallery Project</a>
                    <a href="#" class="hover:text-black dark:hover:text-white transition-colors">Tentang</a>
                </div>

                <div class="flex items-center gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm font-medium underline underline-offset-4 dark:text-white">Dashboard</a>
                    @else
                        <a href="/admin/login" class="text-sm font-medium text-[#706f6c] hover:text-black dark:text-[#A1A09A] dark:hover:text-white transition-colors">Admin Login</a>
                        <a href="https://wa.me/628xxxxxxxx" class="hidden sm:inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-full text-xs font-semibold hover:bg-green-700 transition-all">
                            <i class="fab fa-whatsapp mr-2 text-sm"></i> Konsultasi
                        </a>
                    @endauth
                </div>
            </div>
        </nav>

        <div class="flex flex-col items-center p-6 lg:p-8 min-h-screen">
            
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row mt-10">
                <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                    <h1 class="mb-1 text-2xl font-semibold">Selamat Datang di Surya Fajar</h1>
                    <p class="mb-6 text-[#706f6c] dark:text-[#A1A09A]">Solusi terpercaya untuk jasa perbaikan dan gulung dinamo industri.</p>
                    
                    <div class="flex gap-3">
                        <div class="h-2 w-2 rounded-full bg-green-500"></div>
                        <p class="italic text-[#706f6c] dark:text-[#A1A09A]">Workshop aktif 24/7 untuk keadaan darurat.</p>
                    </div>
                </div>
                <div class="relative w-full lg:w-[448px] bg-[#f9f9f7] dark:bg-[#1b1b18] rounded-tr-lg rounded-tl-lg lg:rounded-tl-none lg:rounded-br-lg border border-[#19140015] dark:border-[#ffffff15] overflow-hidden min-h-[300px] flex items-center justify-center">
                    <i class="fa-solid fa-industry text-6xl text-gray-200 dark:text-gray-800"></i>
                </div>
            </main>

            <section id="gallery" class="w-full lg:max-w-4xl mt-20 pb-20">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h2 class="text-xl font-bold dark:text-white">Gallery Project</h2>
                        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Dokumentasi pengerjaan terbaru di lapangan.</p>
                    </div>
                    <a href="#" class="text-sm font-medium text-green-600 hover:underline">View All &rarr;</a>
                </div>

                    <div class="row">
                        @forelse($galleries as $item)
                            <div class="col-md-4">
                                <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="{{ $item->title }}">
                                <h5>{{ $item->title }}</h5>
                                <p>{{ $item->description }}</p>
                            </div>
                        @empty
                            <p>Belum ada dokumentasi proyek saat ini.</p>
                        @endforelse
                    </div>

                    <div class="flex justify-end mt-6">
                        <a href="{{ route('gallery.all') }}" class="text-sm font-medium text-green-600 hover:underline">
                            Lihat Semua Dokumentasi &rarr;
                        </a>
                    </div>
                    <div class="group relative aspect-square bg-gray-100 rounded-lg overflow-hidden border border-[#19140015] dark:border-[#ffffff15]">
                        <div class="absolute inset-0 flex items-center justify-center text-gray-400 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-image text-3xl"></i>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                            <p class="text-white text-xs font-medium">Overhaul Motor Listrik</p>
                        </div>
                    </div>

                    <div class="group relative aspect-square bg-gray-100 rounded-lg overflow-hidden border border-[#19140015] dark:border-[#ffffff15]">
                        <div class="absolute inset-0 flex items-center justify-center text-gray-400 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-image text-3xl"></i>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                            <p class="text-white text-xs font-medium">Maintenance Panel</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </body>
</html>