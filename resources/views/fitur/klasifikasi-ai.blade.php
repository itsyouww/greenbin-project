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



    <!-- Judul -->
    <h1 class="text-4xl font-bold text-gray-800 text-center mt-8 mb-4">Classify Your Waste</h1>
    <p class="text-center text-green-600 mb-8">
        Upload an image or take a photo to classify your waste using <span class="text-green-800 font-semibold">AI</span>.
    </p>

    <!-- Fitur Klasifikasi Realtime -->
<div class="max-w-4xl mx-auto mb-8 px-4">
    <div class="flex justify-center">
        <a href="{{ route('klasifikasi.realtime') }}"
           class="flex items-center space-x-4 bg-white border border-blue-100 hover:border-blue-300 shadow-md hover:shadow-lg rounded-xl p-4 transition-all duration-200">
            <div class="bg-blue-100 text-blue-700 p-3 rounded-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15 10l4.553-2.276A2 2 0 0122 9.618V14.38a2 2 0 01-2.447 1.894L15 14M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
            </div>
            <div>
                <p class="text-lg font-semibold text-blue-700">Klasifikasi Realtime</p>
                <p class="text-sm text-gray-500">Gunakan kamera untuk klasifikasi langsung</p>
            </div>
        </a>
    </div>
</div>


    <!-- Kotak Upload -->
    <div class="border-2 border-dashed border-green-300 rounded-lg p-8 text-center mb-6 bg-white mx-auto" style="max-width: 20cm;">
        <p class="text-lg font-semibold text-gray-800 mb-2">Upload Image or Take Photo</p>
        <p class="text-sm text-gray-500 mb-4">
            Click here to upload an image from your device or take a photo using your camera.
        </p>
        <input type="file" id="gambar" accept="image/*" class="hidden" />
        <label for="gambar" class="cursor-pointer bg-green-100 text-green-800 py-2 px-4 rounded-md font-semibold hover:bg-green-200 inline-block">
            Choose File
        </label>

        <!-- Pratinjau Gambar -->
        <div class="mt-4" id="previewBox" style="display:none;">
            <img id="previewImage" class="mx-auto max-h-60 rounded-md border border-gray-300" />
        </div>
    </div>

    <!-- Tombol Klasifikasi -->
    <div class="text-center">
        <button id="klasifikasiBtn"
            class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-md transition disabled:opacity-50"
            disabled>
            Classify Waste
        </button>
    </div>

    <!-- Hasil Klasifikasi -->
    <div class="mt-12 hidden" id="hasilBox">
        <h2 class="text-xl font-bold text-gray-800 mb-2 text-center">Classification Result</h2>
        <p class="text-center text-gray-700">The AI has classified the waste as:</p>
        <p id="hasilTeks" class="text-center text-green-700 text-2xl font-bold mt-2"></p>
        <p class="text-center text-sm text-green-600 mt-2">
            Please provide feedback on the classification accuracy.
        </p>

        <!-- Feedback -->
        <div class="flex justify-center items-center space-x-12 mt-4">
            <button class="flex items-center text-green-700 hover:underline text-sm">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round"
                        d="M14 9l-3 3m0 0l-3-3m3 3V4m0 16v-4m-7 0a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
                Accurate
            </button>
            <button class="flex items-center text-red-500 hover:underline text-sm">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round"
                        d="M10 14l2-2m0 0l2-2m-2 2l2 2m-2-2l-2 2m0-8a9 9 0 110 18 9 9 0 010-18z" /></svg>
                Inaccurate
            </button>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        const gambarInput = document.getElementById('gambar');
        const klasifikasiBtn = document.getElementById('klasifikasiBtn');
        const hasilBox = document.getElementById('hasilBox');
        const hasilTeks = document.getElementById('hasilTeks');
        const previewBox = document.getElementById('previewBox');
        const previewImage = document.getElementById('previewImage');

        let selectedFile = null;

        gambarInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                selectedFile = file;
                klasifikasiBtn.disabled = false;

                // Pratinjau gambar
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewBox.style.display = 'block';
                    previewImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        klasifikasiBtn.addEventListener('click', function () {
            if (!selectedFile) return;

            const formData = new FormData();
            formData.append('gambar', selectedFile);

            fetch("{{ route('klasifikasi') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                hasilTeks.innerText = data.hasil || "Unknown";
                hasilBox.classList.remove('hidden');
            })
            .catch(error => {
                console.error('Error:', error);
                hasilTeks.innerText = "Terjadi kesalahan.";
                hasilBox.classList.remove('hidden');
            });
        });

    </script>

</body>
</html>
