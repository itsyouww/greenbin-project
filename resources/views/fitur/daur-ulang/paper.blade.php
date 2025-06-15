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
    <h1 class="text-4xl font-bold text-green-700 mb-4">Panduan Daur Ulang Kertas</h1>
    <p class="text-lg text-gray-700 mb-8">
        Kertas adalah salah satu jenis limbah yang paling mudah didaur ulang. Sebagian besar jenis kertas dapat diproses ulang menjadi produk baru seperti kertas tisu, karton, hingga bahan kemasan ramah lingkungan. Namun, penting untuk mengetahui jenis-jenis kertas yang bisa dan tidak bisa didaur ulang agar prosesnya lebih efektif.
    </p>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">📄 Jenis Kertas yang Bisa Didaur Ulang</h2>
    <ul class="list-disc list-inside space-y-2 text-gray-800 mb-6">
        <li><strong>Kertas HVS dan kertas tulis:</strong> Umumnya digunakan di perkantoran atau sekolah.</li>
        <li><strong>Koran dan majalah:</strong> Meski mengandung tinta, masih bisa diproses ulang.</li>
        <li><strong>Karton dan kardus:</strong> Harus dalam kondisi kering dan bersih dari minyak atau makanan.</li>
        <li><strong>Buku bekas dan brosur:</strong> Asalkan tidak dilapisi plastik atau kertas glossy berlebihan.</li>
    </ul>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">🚫 Jenis Kertas yang Tidak Bisa Didaur Ulang</h2>
    <ul class="list-disc list-inside space-y-2 text-red-700 mb-6">
        <li><strong>Kertas karbon:</strong> Digunakan untuk nota atau kwitansi, mengandung zat kimia berbahaya.</li>
        <li><strong>Kertas berlapis plastik atau lilin:</strong> Seperti cup kopi take-away, bungkus nasi padang, dan kertas minyak.</li>
        <li><strong>Kertas basah atau kotor:</strong> Tercemar makanan, minyak, atau bahan berbahaya.</li>
        <li><strong>Tisu bekas pakai:</strong> Karena tidak higienis dan seratnya terlalu pendek untuk didaur ulang.</li>
    </ul>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">♻️ Cara Mendaur Ulang Kertas dengan Benar</h2>
    <ol class="list-decimal list-inside space-y-2 text-gray-800 mb-6">
        <li>Pisahkan kertas dari sampah lainnya sejak awal (organik, plastik, logam, dll).</li>
        <li>Pastikan kertas dalam kondisi kering dan bersih.</li>
        <li>Potong atau lipat agar tidak memakan tempat penyimpanan.</li>
        <li>Simpan di tempat kering agar tidak berjamur.</li>
        <li>Serahkan ke bank sampah, komunitas daur ulang, atau tempat penampungan limbah kertas.</li>
    </ol>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">🌱 Manfaat Mendaur Ulang Kertas</h2>
    <ul class="list-disc list-inside space-y-2 text-gray-800 mb-6">
        <li>Mengurangi jumlah pohon yang ditebang untuk produksi kertas baru.</li>
        <li>Menghemat energi dan air dalam proses produksi kertas.</li>
        <li>Mengurangi volume sampah di tempat pembuangan akhir (TPA).</li>
        <li>Menurunkan emisi karbon dan gas rumah kaca dari pembakaran sampah kertas.</li>
    </ul>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">📌 Tips Ramah Lingkungan Terkait Kertas</h2>
    <ul class="list-disc list-inside space-y-2 text-gray-800 mb-8">
        <li>Gunakan kedua sisi kertas sebelum dibuang.</li>
        <li>Pilih produk dengan label “100% recycled paper”.</li>
        <li>Gunakan kertas digital atau file elektronik untuk catatan, tugas, dan laporan.</li>
        <li>Gunakan kembali amplop, map, atau kardus untuk keperluan lain.</li>
        <li>Dukung produk daur ulang dengan membelinya secara sadar.</li>
    </ul>

    <a href="{{ url('/fitur/daur-ulang') }}" class="inline-block bg-green-600 text-white px-5 py-3 rounded hover:bg-green-700 transition">
        ← Kembali ke Panduan Daur Ulang
    </a>
</div>

</body>
</html>
