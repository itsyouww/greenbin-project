<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami - GreenBin</title>
    @vite('resources/css/app.css')

    <!-- Alpine.js + x-cloak style -->
    <style>[x-cloak] { display: none !important; }</style>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white font-sans text-gray-800">

<!-- Navbar -->
<nav class="absolute top-0 left-0 w-full p-4 z-30 flex justify-between items-center bg-transparent border-b border-transparent" x-data="{ openFitur: false }">

    <div class="text-xl font-bold text-green-600 ml-4">GreenBin</div>

    <div class="flex space-x-8 mr-4 text-gray-700 font-medium items-center relative">
        <a href="{{ url('/') }}" class="text-green-600 hover:text-green-600 transition">Beranda</a>
        <a href="{{ url('/tentang') }}" class="text-white hover:text-green-600 font-semibold">Tentang Kami</a>

        <!-- Dropdown Fitur -->
        <div class="relative">
            <button @click="openFitur = !openFitur" class="flex items-center space-x-1 focus:outline-none transition text-white hover:text-green-600">
                <span class="text-white hover:text-green-600">Fitur</span>
                <svg class="w-4 h-4 transform" :class="{ 'rotate-180': openFitur }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <!-- Dropdown Content -->
            <div x-show="openFitur"
                 x-cloak
                 @click.outside="openFitur = false"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 transform -translate-y-2"
                 x-transition:enter-end="opacity-100 transform translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 transform translate-y-0"
                 x-transition:leave-end="opacity-0 transform -translate-y-2"
                 class="absolute top-8 left-0 mt-2 bg-white shadow-md rounded-md border border-gray-200 w-42 z-[1000] overflow-hidden">
                <a href="{{ url('/fitur/pemetaan') }}" class="block px-4 py-2 hover:bg-green-100 hover:text-green-700 text-sm transition-all">Pemetaan Lokasi</a>
                <a href="{{ url('/fitur/klasifikasi-ai') }}" class="block px-4 py-2 hover:bg-green-100 hover:text-green-700 text-sm transition-all">AI Klasifikasi</a>
                <a href="{{ url('/fitur/penjadwalan') }}" class="block px-4 py-2 hover:bg-green-100 hover:text-green-700 text-sm transition-all">Penjadwalan</a>
                <a href="{{ url('/fitur/daur-ulang') }}" class="block px-4 py-2 hover:bg-green-100 hover:text-green-700 text-sm transition-all">Panduan Daur Ulang</a>
            </div>
        </div>

        <a href="{{ route('kontak') }}" class="text-white hover:text-green-600 transition">Kontak</a>
    </div>
</nav>

    

    <!-- Fullscreen Background Hero -->
    <section class="relative h-screen w-full">
        <img src="{{ asset('images/bghome.jpg') }}" alt="GreenBin Background" class="absolute inset-0 w-full h-full object-cover z-0">
        <div class="absolute inset-0 bg-black opacity-40 z-10"></div>

        <!-- Hero Text -->
        <div class="relative z-20 flex flex-col items-center justify-center h-full text-center text-white px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Revolutionizing Waste Management</h1>
            <p class="text-lg md:text-xl max-w-2xl">
                GreenBin connects you with collectors and waste banks, offering AI-powered waste classification, pickup scheduling, and recycling education.
            </p>
        </div>
    </section>
</body>
</html>