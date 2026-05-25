@extends('layouts.app')

@section('content')

<section class="min-h-screen bg-gray-100 py-20">

    <div class="max-w-5xl mx-auto px-6">

        <!-- HEADER -->
        <div class="text-center mb-14">

            <h1 class="text-5xl font-extrabold text-emerald-700 mb-5">

                Hubungi Kami

            </h1>

            <p class="text-gray-600 text-lg leading-relaxed max-w-3xl mx-auto">

                Punya pertanyaan terkait layanan persandian,
                keamanan informasi, sertifikat elektronik,
                atau visualisasi tanda tangan elektronik?
                Tim Diskominfo Kabupaten Pamekasan siap membantu.

            </p>

        </div>

        <!-- FORM STYLE SEPERTI GAMBAR -->
        <div class="max-w-2xl mx-auto">
            
            @if(session('success'))

            <div
            class="bg-emerald-100
            text-emerald-700
            px-4 py-3
            rounded-lg mb-6">

                {{ session('success')}}

            </div>

            @endif
            
            <form action="/kirim-pesan"
            method="POST"
            class="space-y-6">

                @csrf

                <!-- NAMA -->
                <div>

                    <label class="block text-gray-700 font-semibold mb-2">

                        Nama

                    </label>

                    <input
                        type="text"
                        name="nama"
                        placeholder="Masukkan nama lengkap"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-emerald-500">

                </div>

                <!-- EMAIL -->
                <div>

                    <label class="block text-gray-700 font-semibold mb-2">

                        Email

                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="contoh@email.com"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-emerald-500">

                </div>

                <!-- PESAN -->
                <div>

                    <label class="block text-gray-700 font-semibold mb-2">

                        Pesan

                    </label>

                    <textarea
                        name="pesan"
                        rows="6"
                        placeholder="Tulis pesan atau pertanyaan..."
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-emerald-500"></textarea>

                </div>

                <!-- BUTTON -->
                <div class="text-center">

                    <button
                        type="submit"
                        class="bg-emerald-600 hover:bg-emerald-700 text-white px-10 py-3 rounded-xl font-semibold transition duration-300 shadow-lg">

                        Kirim Pesan

                    </button>

                </div>

            </form>

            <!-- KONTAK -->
            <div class="text-center mt-14">

                <h2 class="text-2xl font-bold text-emerald-700 mb-6">

                    Kontak Langsung

                </h2>

                <div class="space-y-3 text-gray-700">

                    <p>

                        <span class="font-semibold">
                            Email:
                        </span>

                        diskominfo@pamekasankab.go.id

                    </p>

                    <p>

                        <span class="font-semibold">
                            Telepon:
                        </span>

                        (0324) 322551

                    </p>

                    <p>

                        <span class="font-semibold">
                            Alamat:
                        </span>

                        Diskominfo Kabupaten Pamekasan

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection