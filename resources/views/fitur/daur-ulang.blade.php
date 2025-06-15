<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>AI Klasifikasi - GreenBin</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100 min-h-screen font-sans text-gray-800">
    <!-- Navbar -->
    <nav class="w-full p-4 shadow-md border-b border-gray-200 flex justify-between items-center bg-white z-[1000]" x-data="{ openFitur: false }">
        <div class="text-xl font-bold text-green-600 ml-4">GreenBin</div>

        <div class="flex space-x-8 mr-4 text-gray-700 font-medium items-center relative">

            <a href="{{ url('/') }}" class="hover:text-green-600 transition">Beranda</a>
            <a href="{{ url('/tentang') }}" class="hover:text-green-600 transition">Tentang Kami</a>

            <!-- Dropdown Fitur Toggle by Click -->
            <div class="relative">
                <button @click="openFitur = !openFitur" class="text-green-600 font-semibold flex items-center space-x-1 focus:outline-none transition">
                    <span>Fitur</span>
                    <svg class="w-4 h-4 transform" :class="{ 'rotate-180': openFitur }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                    class="absolute top-8 left-0 mt-2 bg-white shadow-md rounded-md border border-gray-200 w-42 z-[1000] overflow-hidden">
                    <a href="{{ url('/fitur/pemetaan') }}" class="block px-4 py-2 hover:bg-green-100 hover:text-green-700 text-sm transition-all">Pemetaan Lokasi</a>
                    <a href="{{ url('/fitur/klasifikasi-ai') }}" class="block px-4 py-2 hover:bg-green-100 hover:text-green-700 text-sm transition-all">AI Klasifikasi</a>
                    <a href="{{ url('/fitur/penjadwalan') }}" class="block px-4 py-2 hover:bg-green-100 hover:text-green-700 text-sm transition-all">Penjadwalan</a>
                    <a href="{{ url('/fitur/daur-ulang') }}" class="block px-4 py-2 hover:bg-green-100 hover:text-green-700 text-sm transition-all">Panduan Daur Ulang</a>
                </div>
            </div>

            <a href="{{ route('kontak') }}" class="hover:text-green-600 transition">Kontak</a>
        </div>
    </nav>

<!-- Konten Utama -->
<div class="pt-20 px-8 max-w-7xl mx-auto text-center">
    <h1 class="text-4xl font-bold text-gray-900">Recycling Guides</h1>
    <p class="text-green-700 mb-6">Learn how to recycle different types of waste effectively.</p>

    <!-- Search Bar -->
    <div class="relative mb-6">
        <input type="text" placeholder="Search for recycling guides" class="w-full pl-12 pr-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-green-500">
        <svg class="absolute left-4 top-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
    </div>

    <!-- Filter Button -->
    <div class="flex flex-wrap gap-3 mb-8">
        <button class="px-4 py-2 bg-green-100 text-green-800 text-sm rounded-full hover:bg-green-200">Plastic</button>
        <button class="px-4 py-2 bg-green-100 text-green-800 text-sm rounded-full hover:bg-green-200">Paper</button>
        <button class="px-4 py-2 bg-green-100 text-green-800 text-sm rounded-full hover:bg-green-200">Trash</button>
        <button class="px-4 py-2 bg-green-100 text-green-800 text-sm rounded-full hover:bg-green-200">Metal</button>
        <button class="px-4 py-2 bg-green-100 text-green-800 text-sm rounded-full hover:bg-green-200">Cardboard</button>
    </div>

    <!-- Grid Panduan -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Card 1 -->
<a href="{{ url('/fitur/daur-ulang/plastik') }}" class="block">
    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition h-full">
        <img src="/images/panduan/plastic.jpg" alt="Recycling Plastic" class="w-full h-40 object-cover">
        <div class="p-4">
            <h2 class="font-semibold text-lg text-gray-800">Recycling Plastic</h2>
            <p class="text-sm text-green-700">Guide to recycling plastic materials</p>
        </div>
    </div>
</a>

        <!-- Card 2 -->
         <a href="{{ url('/fitur/daur-ulang/paper') }}" class="block">
    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition h-full">
        <img src="/images/panduan/paper.jpg" alt="Recycling Paper" class="w-full h-40 object-cover">
        <div class="p-4">
            <h2 class="font-semibold text-lg text-gray-800">Recycling Paper</h2>
            <p class="text-sm text-green-700">Guide to recycling paper materials</p>
        </div>
    </div>
</a>


        <!-- Tambahkan Card Lainnya sesuai kebutuhan -->
        <!-- Contoh 3 -->
         <a href="{{ url('/fitur/daur-ulang/metal') }}" class="block">
    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition h-full">
        <img src="/images/panduan/metal.jpg" alt="Recycling Metal" class="w-full h-40 object-cover">
        <div class="p-4">
            <h2 class="font-semibold text-lg text-gray-800">Recycling Metal</h2>
            <p class="text-sm text-green-700">Guide to recycling metal materials</p>
        </div>
    </div>
</a>

         <a href="{{ url('/fitur/daur-ulang/cardboard') }}" class="block">
    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition h-full">
        <img src="/images/panduan/cardboard.jpg" alt="Recycling Cardboard" class="w-full h-40 object-cover">
        <div class="p-4">
            <h2 class="font-semibold text-lg text-gray-800">Recycling Cardboard</h2>
            <p class="text-sm text-green-700">Guide to recycling Cardboard materials</p>
        </div>
    </div>
</a>

         <a href="{{ url('/fitur/daur-ulang/trash') }}" class="block">
    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition h-full">
        <img src="/images/panduan/trash.jpg" alt="Recycling Trash" class="w-full h-40 object-cover">
        <div class="p-4">
            <h2 class="font-semibold text-lg text-gray-800">Recycling Trash</h2>
            <p class="text-sm text-green-700">Guide to recycling Trash materials</p>
        </div>
    </div>
</a>
    </div>
</div>
</body>
</html>
