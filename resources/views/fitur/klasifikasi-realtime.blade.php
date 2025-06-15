<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Klasifikasi Sampah Realtime</title>
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
    <div class="max-w-3xl mx-auto mt-12 px-4">
        <h1 class="text-3xl font-bold text-green-700 text-center mb-6">Klasifikasi Sampah Realtime</h1>

        <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
            <video id="camera" autoplay playsinline width="300" height="225"
                   class="border border-gray-300 rounded-md mb-4 shadow-sm"></video>

            <canvas id="snapshot" width="150" height="150" class="hidden"></canvas>

            <div id="hasil"
                 class="text-xl font-semibold text-green-600 mt-4">
                Hasil: -
            </div>
        </div>
    </div>

    <!-- Script Kamera dan Klasifikasi -->
    <script>
        const video   = document.getElementById('camera');
        const canvas  = document.getElementById('snapshot');
        const hasilEl = document.getElementById('hasil');
        const ctx     = canvas.getContext('2d');

        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => {
                video.srcObject = stream;
            })
            .catch(err => {
                console.error("Gagal mengakses kamera:", err);
                hasilEl.textContent = "Gagal mengakses kamera";
            });

        setInterval(() => {
            if (video.readyState !== video.HAVE_ENOUGH_DATA) return;

            ctx.drawImage(video, 0, 0, canvas.width, canvas.height);

            canvas.toBlob(blob => {
                if (!blob) return;

                const formData = new FormData();
                formData.append("image", blob, "frame.jpg");

                fetch("http://127.0.0.1:5000/predict", {
                    method: "POST",
                    body: formData
                })
                .then(res => {
                    if (!res.ok) throw new Error(`Status: ${res.status}`);
                    return res.json();
                })
                .then(data => {
                    console.log("Respon Flask:", data);
                    hasilEl.textContent = "Hasil: " + (data.hasil ?? "Tidak diketahui");
                })
                .catch(err => {
                    console.error("Gagal kirim frame:", err);
                    hasilEl.textContent = "Error: Tidak dapat menghubungi server";
                });

            }, 'image/jpeg');
        }, 2000);
    </script>
</body>
</html>
