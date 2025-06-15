<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Message; // pastikan sudah punya model
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'pesan' => 'required|string|max:1000',
        ]);

        // Simpan ke database
        Message::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        // Kirim email seperti sebelumnya
        Mail::to('greenbin370@gmail.com')->send(
        new ContactMessageMail($request->nama, $request->email, $request->pesan)
        );

        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
