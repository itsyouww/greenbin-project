<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Panduan Daur Ulang Plastik - GreenBin</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- Navbar Minimal -->
    <nav class="w-full p-4 shadow-md border-b border-gray-200 flex justify-between items-center bg-white z-[1000]">
        <div class="text-xl font-bold text-green-600">GreenBin</div>
        <a href="{{ url('/fitur/daur-ulang') }}" class="text-sm text-green-700 hover:text-green-800 border border-green-600 px-3 py-1 rounded transition">
            ← Kembali
        </a>
    </nav>

<!-- Konten -->
<div class="max-w-5xl mx-auto px-6 py-12">
    <h1 class="text-4xl font-bold text-green-700 mb-4">Panduan Daur Ulang Bungkus Makanan & Minuman</h1>
    <p class="text-lg text-gray-700 mb-8">
        Bungkus makanan dan minuman merupakan jenis sampah yang paling sering ditemukan dalam kehidupan sehari-hari. Meskipun terlihat sepele, sampah ini memiliki dampak besar terhadap lingkungan jika tidak ditangani dengan benar.
    </p>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">📂 Jenis Bungkus yang Bisa Didaur Ulang</h2>
    <ul class="list-disc list-inside space-y-2 text-gray-800 mb-6">
        <li><strong>Botol plastik minuman:</strong> Misalnya air mineral, teh dalam kemasan, dan jus.</li>
        <li><strong>Kaleng minuman atau makanan:</strong> Seperti soda, susu, sarden, dll.</li>
        <li><strong>Kemasan karton berlapis (Tetra Pak):</strong> Seperti susu dan minuman kotak (jika fasilitas daur ulang tersedia).</li>
    </ul>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">🚮 Jenis Bungkus yang Sulit Didaur Ulang</h2>
    <ul class="list-disc list-inside space-y-2 text-red-700 mb-6">
        <li><strong>Plastik multilayer:</strong> Seperti bungkus keripik, mi instan, dan snack yang terdiri dari lapisan plastik + logam tipis (aluminium).</li>
        <li><strong>Bungkus makanan berminyak atau kotor:</strong> Seperti bungkus gorengan atau kertas nasi berminyak.</li>
        <li><strong>Styrofoam:</strong> Sulit terurai dan jarang diterima oleh tempat daur ulang.</li>
    </ul>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">🔄 Cara Menangani Sampah Bungkus</h2>
    <ol class="list-decimal list-inside space-y-2 text-gray-800 mb-6">
        <li>Periksa simbol daur ulang pada kemasan.</li>
        <li>Bersihkan sisa makanan/minuman dari bungkus yang akan didaur ulang.</li>
        <li>Pisahkan jenis sampah: plastik, logam, karton.</li>
        <li>Gunakan drop point atau bank sampah yang menerima jenis kemasan tersebut.</li>
    </ol>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">💡 Alternatif & Tips</h2>
    <ul class="list-disc list-inside space-y-2 text-gray-800 mb-8">
        <li>Pilih produk dengan kemasan ramah lingkungan atau isi ulang (refill).</li>
        <li>Bawa wadah sendiri saat membeli makanan/minuman di luar.</li>
        <li>Gunakan ulang kemasan jika memungkinkan, misalnya botol plastik untuk wadah tanaman.</li>
    </ul>

    <a href="{{ url('/fitur/daur-ulang') }}" class="inline-block bg-green-600 text-white px-5 py-3 rounded hover:bg-green-700 transition">
        ← Kembali ke Panduan Daur Ulang
    </a>
</div>
</body>
</html>
