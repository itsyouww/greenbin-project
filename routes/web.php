<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\KlasifikasiController;


// Route halaman utama
Route::get('/', function () {
    return view('welcome'); // pastikan view welcome.blade.php ada
});

// Route halaman tentang
Route::get('/tentang', function () {
    return view('tentang'); // pastikan view tentang.blade.php ada
});
// Tampilkan halaman kontak
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/fitur', function () {
    return view('fitur');
});
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::post('/kontak', [MessageController::class, 'store'])->name('message.store');

Route::get('/fitur/pemetaan', function () {
    return view('fitur.pemetaan');
});
Route::get('/fitur/klasifikasi-ai', function () {
    return view('fitur.klasifikasi-ai');
});

Route::get('/klasifikasi-ai', [KlasifikasiController::class, 'index'])->name('klasifikasi-ai');
Route::post('/klasifikasi-ai/analyze', [KlasifikasiController::class, 'analyze'])->name('klasifikasi');

Route::get('/fitur/klasifikasi-realtime', [KlasifikasiController::class, 'realtime'])->name('klasifikasi.realtime');


Route::get('/fitur/penjadwalan', function () {
    return view('fitur.penjadwalan');
});

Route::get('/fitur/daur-ulang', function () {
    return view('fitur.daur-ulang');
});


Route::view('/fitur/daur-ulang/plastik', 'fitur.daur-ulang.plastik')->name('panduan.plastik');

Route::get('/fitur/daur-ulang/paper', function () {
    return view('fitur.daur-ulang.paper');
});

Route::get('/fitur/daur-ulang/metal', function () {
    return view('fitur.daur-ulang.metal');
});

Route::get('/fitur/daur-ulang/cardboard', function () {
    return view('fitur.daur-ulang.cardboard');
});
Route::get('/fitur/daur-ulang/trash', function () {
    return view('fitur.daur-ulang.trash');
});

// // Proses kirim pesan
// Route::post('/kontak', function (Request $request) {
//     $validated = $request->validate([
//         'nama' => 'required|string|max:255',
//         'email' => 'required|email',
//         'pesan' => 'required|string',
//     ]);

//     // Simpan atau kirim email
//     return back()->with('success', 'Pesan Anda telah dikirim!');
// })->name('kontak.kirim');