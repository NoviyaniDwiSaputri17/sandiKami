<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KontakController extends Controller
{
    public function kirim(Request $request)
    {
        // VALIDASI
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pesan' => 'required',
        ]);

        // KIRIM EMAIL
        Mail::raw(

            "Nama: {$request->nama}\n\n" .

            "Email: {$request->email}\n\n" .

            "Pesan:\n{$request->pesan}",

            function ($message) {

                $message->to('noviyanidwisaputri@gmail.com')

                        ->subject('Pesan dari Website Persandian');

            }

        );

        // KEMBALI KE HALAMAN
        return back()->with(
            'success',
            'Pesan berhasil dikirim!'
        );
    }
}