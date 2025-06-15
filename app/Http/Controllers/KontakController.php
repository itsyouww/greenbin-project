<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak');
    }

    public function kirim(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'pesan' => 'required|string|max:1000',
        ]);

        // Di sini kamu bisa simpan ke database atau kirim email
        // Contoh sederhana:
        // Mail::to('admin@greenbin.com')->send(new KontakBaru($request->all()));

        return redirect()->route('kontak')->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
