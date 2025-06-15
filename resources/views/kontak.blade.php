<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kontak Kami - GreenBin</title>
    @vite('resources/css/app.css') {{-- Pastikan Tailwind CSS ter-load --}}

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
        <a href="{{ url('/tentang') }}" class=" hover:text-green-600 transition font-semibold">Tentang Kami</a>

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

        <a href="{{ route('kontak') }}" class="text-green-600 hover:text-green-600 transition">Kontak</a>
    </div>
</nav>

    <!-- Konten Kontak -->
<section class="py-4 px-6 md:px-20">
  <div class="max-w-[800px] mx-auto text-center">
    <h2 class="text-2xl md:text-2xl font-bold text-green-700 mt-2 mb-4">Kontak Kami</h2>
    <p class="text-gray-600 text-sm mb-6">Ada pertanyaan atau saran? Silakan kirimkan pesan Anda melalui form di bawah ini.</p>

      @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
          {{ session('success') }}
        </div>
      @endif

        <!-- Form -->
        <form action="{{ route('message.store') }}" method="POST" class="space-y-4 text-left mx-auto text-sm" style="max-width: 20cm;">
          @csrf
          <div>
            <label class="block font-medium text-gray-700 mb-1" for="nama">Nama</label>
            <input id="nama" type="text" name="nama" class="w-full p-2 border rounded-md placeholder:text-sm focus:ring-green-500 focus:outline-none" placeholder="Nama Lengkap" required>
          </div>
          <div>
            <label class="block font-medium text-gray-700 mb-1" for="email">Email</label>
            <input id="email" type="email" name="email" class="w-full p-2 border rounded-md placeholder:text-sm focus:ring-green-500 focus:outline-none" placeholder="alamat@email.com" required>
          </div>
          <div>
            <label class="block font-medium text-gray-700 mb-1" for="pesan">Pesan</label>
            <textarea id="pesan" name="pesan" rows="4" class="w-full p-2 border rounded-md placeholder:text-sm focus:ring-green-500 focus:outline-none" placeholder="Tulis pesan Anda..." required></textarea>
          </div>

          <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded transition duration-300">
              Kirim Pesan
          </button>
        </form>

        <!-- Info Kontak -->
        <div class="mt-8 flex justify-center items-center text-sm text-gray-700 space-x-10">
          <div class="flex items-center space-x-2">
            <img src="/images/icon/email.png" alt="Email Icon" class="h-5 w-5">
            <a href="mailto:greenbin@gmail.com" class="text-green-700 hover:underline">greenbin@gmail.com</a>
          </div>
          <div class="flex items-center space-x-2">
            <img src="/images/icon/website.png" alt="Website Icon" class="h-5 w-5">
            <a href="https://greenbin.com" class="text-green-700 hover:underline">greenbin.com</a>
          </div>
        </div>
      </div>
    </section>

</body>
</html>
