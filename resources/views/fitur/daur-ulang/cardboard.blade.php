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
    <h1 class="text-4xl font-bold text-green-700 mb-4">Panduan Daur Ulang Kardus (Cardboard)</h1>
    <p class="text-lg text-gray-700 mb-8">
        Kardus merupakan limbah rumah tangga yang paling umum dan mudah didaur ulang. Dengan mendaur ulang kardus, kita dapat mengurangi volume sampah dan membantu menghemat pohon yang digunakan untuk membuat kertas baru.
    </p>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">📦 Jenis Kardus yang Dapat Didaur Ulang</h2>
    <ul class="list-disc list-inside space-y-2 text-gray-800 mb-6">
        <li><strong>Kardus Bergelombang (Corrugated):</strong> Biasanya digunakan untuk kemasan pengiriman.</li>
        <li><strong>Kardus Tipis (Paperboard):</strong> Seperti kotak sereal, pasta gigi, dan kemasan makanan ringan.</li>
    </ul>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">🔄 Langkah-Langkah Daur Ulang Kardus</h2>
    <ol class="list-decimal list-inside space-y-2 text-gray-800 mb-6">
        <li>Buang isi dan perekat dari kardus.</li>
        <li>Lipat dan potong kardus agar tidak memakan tempat.</li>
        <li>Pastikan kardus dalam keadaan kering dan bersih dari minyak atau makanan.</li>
        <li>Kirim ke tempat daur ulang atau bank sampah terdekat.</li>
    </ol>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">🚫 Kardus yang Tidak Bisa Didaur Ulang</h2>
    <ul class="list-disc list-inside space-y-2 text-red-700 mb-6">
        <li>Kardus yang berminyak atau basah (seperti bekas pizza).</li>
        <li>Kardus dengan lapisan plastik atau logam yang tidak bisa dipisahkan.</li>
    </ul>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">💡 Tips Mengurangi Sampah Kardus</h2>
    <ul class="list-disc list-inside space-y-2 text-gray-800 mb-8">
        <li>Gunakan kardus bekas untuk penyimpanan barang di rumah.</li>
        <li>Belanja dalam jumlah besar agar mengurangi kemasan berlebihan.</li>
        <li>Gunakan kembali kotak pengiriman saat mengirim paket.</li>
    </ul>

    <a href="{{ url('/fitur/daur-ulang') }}" class="inline-block bg-green-600 text-white px-5 py-3 rounded hover:bg-green-700 transition">
        ← Kembali ke Panduan Daur Ulang
    </a>
</div>
</body>
</html>
