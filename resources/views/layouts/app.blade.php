<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Mapbox -->
    <!-- <script src='https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css' rel='stylesheet' /> -->
    <title>GreenBin</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-white text-gray-800">

   <!-- Navbar -->
<nav class="absolute top-0 left-0 w-full p-4 z-30 flex justify-between items-center">
    <div class="text-white text-xl font-bold ml-4">GreenBin</div>
    <div class="flex space-x-8 text-white font-medium mr-4">
        <a href="{{ url('/') }}" class="text-green-600" font-semibold>Beranda</a>
        <a href="{{ url('/tentang') }}" class="hover:text-green-600">Tentang Kami</a>
        <a href="{{url('/fitur')}}" class="hover:text-green-600">Fitur</a>
        <a href="{{ route('kontak') }}" class="hover:text-green-600">Kontak</a>

    </div>
</nav>


    <!-- Konten Halaman -->
    <main class="pt-24">
        @yield('content')
    </main>

</body>
</html>
