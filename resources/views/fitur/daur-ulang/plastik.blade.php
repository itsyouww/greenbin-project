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
    <h1 class="text-4xl font-bold text-green-700 mb-4">Panduan Daur Ulang Plastik</h1>
    <p class="text-lg text-gray-700 mb-8">
        Plastik merupakan bahan sintetis yang sangat umum digunakan dalam kehidupan sehari-hari, mulai dari kemasan makanan, botol minuman, peralatan rumah tangga, hingga barang elektronik. Meskipun berguna, plastik membutuhkan waktu ratusan tahun untuk terurai di alam. Oleh karena itu, mendaur ulang plastik menjadi langkah penting untuk mengurangi dampaknya terhadap lingkungan.
    </p>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">✅ Jenis Plastik yang Bisa Didaur Ulang</h2>
    <ul class="list-disc list-inside space-y-2 text-gray-800 mb-6">
        <li><strong>PET (Polyethylene Terephthalate):</strong> Umumnya ditemukan pada botol air mineral dan botol soda. Mudah didaur ulang dan banyak diterima di fasilitas daur ulang.</li>
        <li><strong>HDPE (High-Density Polyethylene):</strong> Digunakan untuk botol susu, galon air, dan wadah sabun cuci. Tahan terhadap bahan kimia dan mudah didaur ulang.</li>
        <li><strong>PP (Polypropylene):</strong> Banyak digunakan dalam wadah makanan, sedotan, dan tutup botol. Memiliki titik leleh tinggi dan cukup aman untuk diproses ulang.</li>
    </ul>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">🧼 Langkah-Langkah Daur Ulang Plastik</h2>
    <ol class="list-decimal list-inside space-y-2 text-gray-800 mb-6">
        <li><strong>Bersihkan sampah plastik</strong> dari sisa makanan, minyak, atau cairan lain yang menempel agar tidak mencemari jenis plastik lainnya.</li>
        <li><strong>Sortir berdasarkan jenis plastik</strong> (lihat tanda segitiga daur ulang pada kemasan).</li>
        <li><strong>Keringkan</strong> plastik setelah dicuci agar tidak menimbulkan bau atau jamur.</li>
        <li><strong>Gunakan tempat penyimpanan terpisah</strong> atau kantong khusus plastik sebelum dibawa ke tempat daur ulang.</li>
        <li><strong>Serahkan ke bank sampah atau TPS 3R</strong> (Tempat Pengelolaan Sampah Reduce-Reuse-Recycle) terdekat.</li>
    </ol>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">🚫 Plastik yang Tidak Bisa Didaur Ulang</h2>
    <ul class="list-disc list-inside space-y-2 text-red-700 mb-6">
        <li><strong>Styrofoam (PS – Polystyrene):</strong> Ringan tapi berbahaya bagi lingkungan karena sulit didaur ulang dan sering berakhir sebagai mikroplastik.</li>
        <li><strong>PVC (Polyvinyl Chloride):</strong> Digunakan pada pipa, tirai mandi, dan pembungkus makanan. Mengandung zat kimia berbahaya.</li>
        <li><strong>Plastik multilayer atau campuran:</strong> Seperti kemasan makanan ringan yang menggabungkan beberapa lapisan plastik dan aluminium foil.</li>
        <li><strong>Plastik yang terkontaminasi:</strong> Sudah rusak, terkena minyak, atau mengandung zat berbahaya lainnya.</li>
    </ul>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">♻️ Tips Mengurangi Sampah Plastik</h2>
    <ul class="list-disc list-inside space-y-2 text-gray-800 mb-8">
        <li><strong>Gunakan produk reusable:</strong> Botol minum, sedotan stainless, dan tas belanja kain adalah alternatif ramah lingkungan.</li>
        <li><strong>Beli produk dalam kemasan besar:</strong> Mengurangi penggunaan kemasan plastik kecil yang lebih sulit didaur ulang.</li>
        <li><strong>Pilih barang dengan kemasan daur ulang:</strong> Beberapa merek kini mulai menggunakan botol atau plastik hasil daur ulang.</li>
        <li><strong>Jangan mudah tergiur plastik sekali pakai:</strong> Hindari penggunaan sendok plastik, bungkus bubble, atau plastik pembungkus makanan berlebihan.</li>
        <li><strong>Ikut serta dalam program daur ulang:</strong> Seperti penukaran sampah plastik dengan poin, barang, atau diskon dari komunitas atau brand.</li>
    </ul>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">📍 Dimana Bisa Mendaur Ulang Plastik?</h2>
    <p class="text-gray-800 mb-6">
        Kamu bisa mencari bank sampah atau tempat daur ulang plastik melalui aplikasi <strong>GreenBin</strong> di fitur <em>Pemetaan Lokasi</em>. Pastikan kamu menghubungi terlebih dahulu untuk mengetahui jenis plastik apa saja yang diterima.
    </p>

    <h2 class="text-2xl font-semibold text-green-600 mb-3">🌍 Manfaat Daur Ulang Plastik</h2>
    <ul class="list-disc list-inside space-y-2 text-gray-800 mb-8">
        <li>Mengurangi penumpukan sampah di TPA.</li>
        <li>Menghemat energi dan sumber daya alam.</li>
        <li>Menjaga kebersihan lingkungan dan ekosistem laut.</li>
        <li>Menumbuhkan kesadaran dan ekonomi sirkular di masyarakat.</li>
    </ul>

    <a href="{{ url('/fitur/daur-ulang') }}" class="inline-block bg-green-600 text-white px-5 py-3 rounded hover:bg-green-700 transition">
        ← Kembali ke Panduan Daur Ulang
    </a>
</div>

</body>
</html>
