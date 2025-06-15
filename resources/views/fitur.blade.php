<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Fitur - GreenBin</title>
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body class="bg-white font-sans text-gray-800">
<!-- Navbar -->
<nav class="w-full p-4 shadow-md border-b border-gray-200 flex justify-between items-center bg-white" x-data="{ openFitur: false }">
    <div class="text-xl font-bold text-green-600 ml-4">GreenBin</div>

    <div class="flex space-x-8 mr-4 text-gray-700 font-medium items-center relative">

        <a href="{{ url('/') }}" class="hover:text-green-600 transition">Beranda</a>
        <a href="{{ url('/tentang') }}" class="hover:text-green-600 transition">Tentang Kami</a>

        <!-- Dropdown Fitur Toggle by Click -->
        <div class="relative">
            <button @click="openFitur = !openFitur" class="text-green-600 font-semibold flex items-center space-x-1 focus:outline-none transition">
                <span>Fitur</span>
                <svg class="w-5 h-5 transform" :class="{ 'rotate-180': openFitur }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <!-- Dropdown Content -->
            <div x-show="openFitur"
                 @click.outside="openFitur = false"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 transform -translate-y-2"
                 x-transition:enter-end="opacity-100 transform translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 transform translate-y-0"
                 x-transition:leave-end="opacity-0 transform -translate-y-2"
                 class="absolute top-8 left-0 mt-2 bg-white shadow-md rounded-md border border-gray-200 w-46 z-50 overflow-hidden">
                <a href="{{ url('/fitur/pemetaan') }}" class="block px-4 py-2 hover:bg-green-100 hover:text-green-700 text-sm transition-all">Pemetaan Lokasi</a>
                <a href="{{ url('/fitur/klasifikasi-ai') }}" class="block px-4 py-2 hover:bg-green-100 hover:text-green-700 text-sm transition-all">AI Klasifikasi</a>
                <a href="{{ url('/fitur/penjadwalan') }}" class="block px-4 py-2 hover:bg-green-100 hover:text-green-700 text-sm transition-all">Penjadwalan</a>
                <a href="{{ url('/fitur/daur-ulang') }}" class="block px-4 py-2 hover:bg-green-100 hover:text-green-700 text-sm transition-all">Panduan Daur Ulang</a>
            </div>

        <a href="{{ route('kontak') }}" class="hover:text-green-600 transition">Kontak</a>
    </div>
</nav>

</body>
</html>
