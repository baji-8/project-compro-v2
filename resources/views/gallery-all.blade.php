<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Semua Project - PT DWIDAYA GUNA PRAKARSA</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] antialiased">

        <!-- Navbar Mini -->
        <nav class="sticky top-0 z-50 w-full bg-white/80 dark:bg-[#161615]/80 backdrop-blur-md border-b border-[#19140015] dark:border-[#ffffff15]">
            <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
                <a href="/" class="flex items-center gap-3 font-bold text-lg dark:text-white">
                    <i class="fa-solid fa-arrow-left text-sm text-blue-600"></i>
                    <span>Kembali ke Beranda</span>
                </a>
            </div>
        </nav>

        <main class="py-20">
            <div class="max-w-7xl mx-auto px-6">
                <div class="mb-12">
                    <h1 class="text-4xl font-extrabold dark:text-white mb-4">Semua Dokumentasi Proyek</h1>
                    <p class="text-gray-500 dark:text-gray-400">Daftar lengkap pengerjaan unit industri oleh tim teknisi kami.</p>
                </div>

                <!-- Grid Galeri -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse($galleries as $item)
                        <div class="group bg-white dark:bg-[#161615] rounded-3xl overflow-hidden border border-[#19140015] dark:border-[#ffffff15] shadow-sm hover:shadow-xl transition-all duration-500">
                            <div class="aspect-video overflow-hidden">
                                <img src="{{ asset('storage/' . $item->image) }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="{{ $item->title }}">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold dark:text-white mb-2">{{ $item->title }}</h3>
                                <p class="text-gray-500 dark:text-[#A1A09A] text-sm leading-relaxed">
                                    {{ $item->description }}
                                </p>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full py-20 text-center">
                            <p class="text-gray-500">Belum ada foto proyek yang diunggah.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </main>

        <!-- Footer Sederhana -->
        <footer class="py-10 border-t border-[#19140015] dark:border-[#ffffff15] text-center">
            <p class="text-xs text-gray-400">
                &copy; {{ date('Y') }} PT DWIDAYA GUNA PRAKARSA.
            </p>
        </footer>
    </body>
</html>