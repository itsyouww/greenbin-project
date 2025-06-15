<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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

    <!-- Konten Penjadwalan -->
    <main class="max-w-2xl mx-auto mt-12 px-4">
        <h1 class="text-4xl font-bold text-gray-800 text-center mt-8 mb-4">Schedule Waste Collection</h1>

        <form id="scheduleForm" class="space-y-5">
            <select id="wasteType" class="w-full border border-green-200 rounded-md p-3 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-green-500">
                <option disabled selected value="">Select Waste Type</option>
                <option>Plastic</option>
                <option>Organic</option>
                <option>Paper</option>
                <option>Metal</option>
            </select>

            <input id="pickupDate" type="date" class="w-full border border-green-200 rounded-md p-3 text-sm focus:outline-none focus:ring-2 focus:ring-green-500" />

            <select id="pickupTime" class="w-full border border-green-200 rounded-md p-3 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-green-500">
                <option disabled selected value="">Select Pickup Time</option>
                <option>08:00 AM - 10:00 AM</option>
                <option>10:00 AM - 12:00 PM</option>
                <option>01:00 PM - 03:00 PM</option>
            </select>

            <input id="address" type="text" class="w-full border border-green-200 rounded-md p-3 text-sm focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Address" />
        </form>

        <section class="mt-10">
            <h2 class="font-semibold text-lg mb-2">Schedule Summary</h2>
            <div class="divide-y divide-green-100 border-t border-green-100 text-sm">
                <div class="flex justify-between py-3">
                    <span class="text-green-600 font-medium">Waste Type</span>
                    <span id="summaryWasteType" class="text-gray-700">-</span>
                </div>
                <div class="flex justify-between py-3">
                    <span class="text-green-600 font-medium">Pickup Date</span>
                    <span id="summaryPickupDate" class="text-gray-700">-</span>
                </div>
                <div class="flex justify-between py-3">
                    <span class="text-green-600 font-medium">Pickup Time</span>
                    <span id="summaryPickupTime" class="text-gray-700">-</span>
                </div>
                <div class="flex justify-between py-3">
                    <span class="text-green-600 font-medium">Address</span>
                    <span id="summaryAddress" class="text-gray-700">-</span>
                </div>
            </div>
        </section>

        <div class="mt-8">
            <button id="submitBtn" class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-md text-sm font-medium transition duration-200">
                Submit Schedule
            </button>
        </div>
    </main>

    <!-- JavaScript -->
    <script>
        const wasteTypeEl   = document.getElementById('wasteType');
        const pickupDateEl  = document.getElementById('pickupDate');
        const pickupTimeEl  = document.getElementById('pickupTime');
        const addressEl     = document.getElementById('address');

        const summaryWasteType  = document.getElementById('summaryWasteType');
        const summaryPickupDate = document.getElementById('summaryPickupDate');
        const summaryPickupTime = document.getElementById('summaryPickupTime');
        const summaryAddress    = document.getElementById('summaryAddress');

        function formatDate(dateStr) {
            if (!dateStr) return '-';
            const dateObj = new Date(dateStr + 'T00:00:00');
            return dateObj.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });
        }

        function updateSummary() {
            summaryWasteType.textContent  = wasteTypeEl.value !== '' ? wasteTypeEl.value : '-';
            summaryPickupDate.textContent = pickupDateEl.value ? formatDate(pickupDateEl.value) : '-';
            summaryPickupTime.textContent = pickupTimeEl.value !== '' ? pickupTimeEl.value : '-';
            summaryAddress.textContent    = addressEl.value.trim() !== '' ? addressEl.value.trim() : '-';
        }

        document.addEventListener('DOMContentLoaded', updateSummary);
        wasteTypeEl.addEventListener('change', updateSummary);
        pickupDateEl.addEventListener('change', updateSummary);
        pickupTimeEl.addEventListener('change', updateSummary);
        addressEl.addEventListener('input', updateSummary);

        // Submit to WhatsApp
        document.getElementById('submitBtn').addEventListener('click', function (e) {
            e.preventDefault();

            const wasteType = wasteTypeEl.value;
            const pickupDate = pickupDateEl.value;
            const pickupTime = pickupTimeEl.value;
            const address = addressEl.value;

            if (!wasteType || !pickupDate || !pickupTime || !address) {
                alert("Please complete all fields.");
                return;
            }

            const formattedDate = formatDate(pickupDate);
            const message = `Halo GreenBin,%0ASaya ingin menjadwalkan pengambilan sampah dengan detail berikut:%0A%0A• Jenis Sampah: ${wasteType}%0A• Tanggal: ${formattedDate}%0A• Waktu: ${pickupTime}%0A• Alamat: ${address}%0A%0ATerima kasih.`;

            const whatsappNumber = "6285175466960"; // ← GANTI dengan nomor WA GreenBin
            const url = `https://wa.me/${whatsappNumber}?text=${message}`;

            window.open(url, '_blank');
        });
    </script>
</body>
</html>
