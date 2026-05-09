<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Menyimpan data registrasi pasien
     */
    public function storeRegistration(Request $request)
    {
        $validated = $request->validate([
            'ownerName' => 'required|string',
            'petName' => 'required|string',
            'petType' => 'required|string',
            'phoneNumber' => 'required|string',
            'email' => 'nullable|email',
            'notes' => 'nullable|string',
        ]);

        // Di sini Anda dapat menyimpan ke database jika diperlukan
        // Untuk sekarang, hanya mengembalikan respons sukses
        return response()->json([
            'success' => true,
            'message' => 'Registrasi berhasil disimpan',
            'data' => $validated
        ]);
    }
}
