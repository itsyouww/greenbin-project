<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pemetaan Lokasi - GreenBin</title>
    @vite('resources/css/app.css')

    <!-- AlpineJS -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <style>
        #map {
            height: 500px;
        }
    </style>
</head>
<body class="bg-green-50 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="w-full p-4 shadow-md border-b border-gray-200 flex justify-between items-center bg-white" x-data="{ openFitur: false }">
        <div class="text-xl font-bold text-green-600 ml-4">GreenBin</div>

        <div class="flex space-x-8 mr-4 text-gray-700 font-medium items-center relative">
            <a href="{{ url('/') }}" class="hover:text-green-600 transition">Beranda</a>
            <a href="{{ url('/tentang') }}" class="hover:text-green-600 transition">Tentang Kami</a>

            <div class="relative">
                <button @click="openFitur = !openFitur" class="text-green-600 font-semibold flex items-center space-x-1 focus:outline-none transition">
                    <span>Fitur</span>
                    <svg class="w-4 h-4 transform" :class="{ 'rotate-180': openFitur }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="openFitur"
                     @click.outside="openFitur = false"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 transform -translate-y-2"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 transform translate-y-0"
                     x-transition:leave-end="opacity-0 transform -translate-y-2"
                     class="absolute top-8 left-0 mt-2 bg-white shadow-md rounded-md border border-gray-200 w-56 z-[1000] overflow-hidden">
                    <a href="{{ url('/fitur/pemetaan') }}" class="block px-4 py-2 hover:bg-green-100 hover:text-green-700 text-sm transition-all">Pemetaan Lokasi</a>
                    <a href="{{ url('/fitur/klasifikasi-ai') }}" class="block px-4 py-2 hover:bg-green-100 hover:text-green-700 text-sm transition-all">AI Klasifikasi</a>
                    <a href="{{ url('/fitur/penjadwalan') }}" class="block px-4 py-2 hover:bg-green-100 hover:text-green-700 text-sm transition-all">Penjadwalan</a>
                    <a href="{{ url('/fitur/daur-ulang') }}" class="block px-4 py-2 hover:bg-green-100 hover:text-green-700 text-sm transition-all">Panduan Daur Ulang</a>
                </div>
            </div>

            <a href="{{ route('kontak') }}" class="hover:text-green-600 transition">Kontak</a>
        </div>
    </nav>

    <main class="flex-grow container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-green-700 text-center">Pemetaan Lokasi Pengepul & Bank Sampah</h1>

        <div id="map" class="rounded-lg shadow-lg"></div>
    </main>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        // Pusat peta di UNNES Gunungpati
        var map = L.map('map').setView([-7.0565, 110.4158], 15);

        // Peta dasar
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Data lokasi contoh bank sampah/pengepul sekitar UNNES
        var lokasi = [
            { lat: -7.064117,  lng: 110.397261, nama: "Bank Sampah Eling Resik" },
            { lat: -7.075624,  lng: 110.389676, nama: "Bank Sampah Mawar" },
            { lat: -7.063478,  lng: 110.387503, nama: "Bank Sampah Melati Amanah" },
            { lat: -7.048132,  lng: 110.400557, nama: "Tempat Pembuangan Sampah Terpadu (TPST UNNES)" },
            { lat: -7.079823,  lng: 110.387576, nama: "Bank Sampah Semangat Sejahtera" },

            
            { lat: -7.0605, lng: 110.4098, nama: "Bank Sampah Ngaliyan Berseri" },
            { lat: -7.0631, lng: 110.4147, nama: "Bank Sampah Wonolopo" },
            { lat: -7.0552, lng: 110.4221, nama: "Bank Sampah Sekaran Hijau" }
        ];

        // Tambahkan marker untuk tiap lokasi
        lokasi.forEach(function(item) {
            L.marker([item.lat, item.lng])
                .addTo(map)
                .bindPopup(`<strong>${item.nama}</strong>`);
        });

        // Lokasi pengguna jika tersedia
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(pos) {
                const userLat = pos.coords.latitude;
                const userLng = pos.coords.longitude;

                L.marker([userLat, userLng], {
                    icon: L.icon({
                        iconUrl: 'https://cdn-icons-png.flaticon.com/512/684/684908.png',
                        iconSize: [30, 30],
                        iconAnchor: [15, 30]
                    })
                }).addTo(map).bindPopup("Lokasi Anda");
            });
        }
    </script>

</body>
</html>
