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
<nav class="w-full p-4 shadow-md border-b border-gray-200 flex justify-between items-center bg-white z-[1000]" x-data="{ openFitur: false }">
    <div class="text-xl font-bold text-green-600 ml-4">GreenBin</div>

    <div class="flex space-x-8 mr-4 text-gray-700 font-medium items-center relative">
        <a href="{{ url('/') }}" class="hover:text-green-600 transition">Beranda</a>
        <a href="{{ url('/tentang') }}" class="text-green-600 font-semibold">Tentang Kami</a>

        <!-- Dropdown Fitur -->
        <div class="relative">
            <button @click="openFitur = !openFitur" class="flex items-center space-x-1 focus:outline-none transition hover:text-green-600">
                <span class="hover:text-green-600">Fitur</span>
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

        <a href="{{ route('kontak') }}" class="hover:text-green-600 transition">Kontak</a>
    </div>
</nav>

<!-- Content -->
<section class="py-12 px-6 md:px-16 bg-white">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Konten Kiri -->
        <div class="text-justify">
            <h2 class="text-3xl font-bold mb-6">Tentang Kami</h2>
            <p class="mb-4">
                <strong>GreenBin</strong> adalah platform web inovatif yang menghubungkan masyarakat dengan pengumpul sampah dan bank sampah. Menggunakan teknologi AI, aplikasi ini mempermudah klasifikasi sampah, menjadwalkan penjemputan, serta menyediakan edukasi daur ulang secara digital.
            </p>
            <p class="mb-4">
                <strong>Manfaat GreenBin</strong> antara lain meningkatkan kesadaran lingkungan, membantu pengelolaan sampah secara efisien, dan mendukung ekonomi sirkular lokal.
            </p>
            <p class="mb-8">
                <strong>Tujuan kami</strong> adalah menjadi solusi digital terdepan untuk pengelolaan sampah berkelanjutan melalui teknologi dan kolaborasi komunitas.
            </p>
        </div>

        <!-- Gambar Kanan -->
        <div>
            <img src="{{ asset('images/sampah.jpg') }}" alt="Gambar Sampah" class="w-full h-auto rounded-lg">
        </div>
    </div>

    <!-- Tim Kami -->
    <div class="max-w-5xl mx-auto mt-20">
        <h3 class="text-3xl font-bold mb-6 text-center">Tim Kami</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Frontend -->
            <div class="text-center">
                <img src="{{ asset('images/team/frontend.jpg') }}" alt="Frontend" class="mx-auto rounded-full w-40 h-40 object-cover shadow-lg mb-4">
                <h4 class="text-xl font-bold">Qonita Fatimatuzzahra</h4>
                <p class="text-green-600">FrontEnd Engineer</p>
            </div>
            <!-- Backend -->
            <div class="text-center">
                <img src="{{ asset('images/team/backend.jpg') }}" alt="Backend" class="mx-auto rounded-full w-40 h-40 object-cover shadow-lg mb-4">
                <h4 class="text-xl font-bold">Yudhoyono Pambudi</h4>
                <p class="text-green-600">BackEnd Engineer</p>
            </div>
            <!-- UI/UX -->
            <div class="text-center">
                <img src="{{ asset('images/team/uiux.jpg') }}" alt="UI/UX" class="mx-auto rounded-full w-40 h-40 object-cover shadow-lg mb-4">
                <h4 class="text-xl font-bold">Alifa Antyashani</h4>
                <p class="text-green-600">UI/UX Designer</p>
            </div>
        </div>
    </div>
</section>

</body>
</html>
