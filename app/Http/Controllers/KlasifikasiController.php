<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KlasifikasiController extends Controller
{
    public function index()
    {
        return view('klasifikasi-ai');
    }

    public function realtime()
    {
        return view('fitur.klasifikasi-realtime');
    }


    public function analyze(Request $request)
    {
        if (!$request->hasFile('gambar')) {
            return response()->json(['error' => 'No image uploaded'], 400);
        }

        $image = $request->file('gambar');

        try {
            $response = Http::attach(
                'image', // harus sesuai dengan `request.files['image']` di Flask
                file_get_contents($image),
                $image->getClientOriginalName()
            )->post('http://127.0.0.1:5000/predict');

            if ($response->successful()) {
                $json = $response->json();
                return response()->json([
                    'hasil' => $json['hasil'] ?? 'Tidak diketahui'
                ]);
            } else {
                return response()->json(['error' => 'Flask gagal memproses gambar'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Server error: ' . $e->getMessage()], 500);
        }
    }
}
