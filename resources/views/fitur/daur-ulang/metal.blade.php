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
    <h1 class="text-4xl font-bold text-green-700 mb-4">Panduan Daur Ulang Logam (Metal)</h1>
    <p class="text-lg text-gray-700 mb-8">
        Logam adalah bahan yang sangat berharga dalam industri daur ulang karena dapat didaur ulang berulang kali tanpa kehilangan kualitas. Dengan mendaur ulang logam, kita bisa menghemat energi dan sumber daya alam.
    </p>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">🔍 Jenis Logam yang Umum Didaur Ulang</h2>
    <ul class="list-disc list-inside space-y-2 text-gray-800 mb-6">
        <li><strong>Aluminium:</strong> Kaleng minuman, foil aluminium, dan beberapa bagian kendaraan.</li>
        <li><strong>Besi (Steel):</strong> Kaleng makanan, peralatan rumah tangga, dan material konstruksi.</li>
        <li><strong>Tembaga:</strong> Kabel listrik, pipa air, dan elektronik bekas.</li>
    </ul>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">🧼 Cara Mendaur Ulang Logam</h2>
    <ol class="list-decimal list-inside space-y-2 text-gray-800 mb-6">
        <li>Bersihkan logam dari kotoran dan sisa makanan.</li>
        <li>Kelompokkan berdasarkan jenis (aluminium, besi, tembaga, dll).</li>
        <li>Kirim ke tempat daur ulang logam atau bank sampah terdekat.</li>
    </ol>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">🚫 Logam yang Sulit Didaur Ulang</h2>
    <ul class="list-disc list-inside space-y-2 text-red-700 mb-6">
        <li>Logam berkarat atau tercampur dengan bahan lain seperti plastik atau kaca.</li>
        <li>Kaleng cat, oli, atau bahan kimia karena bersifat berbahaya.</li>
    </ul>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">💡 Tips Mengurangi Sampah Logam</h2>
    <ul class="list-disc list-inside space-y-2 text-gray-800 mb-8">
        <li>Gunakan ulang kaleng dan wadah logam sebagai tempat penyimpanan.</li>
        <li>Beli produk dalam kemasan besar untuk mengurangi jumlah kaleng.</li>
        <li>Gunakan peralatan masak dan makan dari bahan tahan lama, bukan sekali pakai.</li>
    </ul>

    <a href="{{ url('/fitur/daur-ulang') }}" class="inline-block bg-green-600 text-white px-5 py-3 rounded hover:bg-green-700 transition">
        ← Kembali ke Panduan Daur Ulang
    </a>
</div>

</body>
</html>
