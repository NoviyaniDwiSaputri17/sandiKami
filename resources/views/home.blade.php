@extends('layouts.app')

@section('content')

<!-- HERO -->
<section
    class="bg-gradient-to-r from-green-950 via-teal-900 to-cyan-900 text-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-8 py-28">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- TEXT -->
            <div>

                <h1 class="text-6xl md:text-7xl font-extrabold leading-tight mb-8">

                    Persandian dan <br>
                    Keamanan <br>
                    Informasi

                </h1>

                <p class="text-xl text-gray-200 leading-relaxed mb-10">

                    Portal layanan keamanan informasi,
                    sertifikat elektronik, insiden siber,
                    pengamanan sinyal, dan visualisasi
                    tanda tangan elektronik untuk OPD
                    dan ASN Kabupaten Pamekasan.

                </p>

                <!-- BUTTON -->
                <div class="flex flex-wrap gap-4">

                    <a href="/layanan"
                        class="bg-emerald-500 hover:bg-emerald-600 transition px-8 py-4 rounded-2xl font-bold text-lg shadow-lg">

                        Lihat Layanan

                    </a>

                    <a href="/visualisasi"
                        class="bg-white text-teal-900 hover:bg-gray-200 transition px-8 py-4 rounded-2xl font-bold text-lg shadow-lg">

                        Buat Visualisasi TTE

                    </a>

                </div>

            </div>

            <!-- CARD INFO -->
            <div class="grid grid-cols-2 gap-6">

                <!-- CARD -->
                <div
                    class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl p-8 hover:scale-105 transition duration-300">

                    <h2 class="text-5xl font-bold mb-4">
                        4
                    </h2>

                    <p class="text-xl">
                        Layanan utama
                    </p>

                </div>

                <!-- CARD -->
                <div
                    class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl p-8 hover:scale-105 transition duration-300">

                    <h2 class="text-5xl font-bold mb-4">
                        OPD
                    </h2>

                    <p class="text-xl">
                        Target pengguna
                    </p>

                </div>

                <!-- CARD -->
                <div
                    class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl p-8 hover:scale-105 transition duration-300">

                    <h2 class="text-5xl font-bold mb-4">
                        ASN
                    </h2>

                    <p class="text-xl">
                        Berbasis kebutuhan dinas
                    </p>

                </div>

                <!-- CARD -->
                <div
                    class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl p-8 hover:scale-105 transition duration-300">

                    <h2 class="text-5xl font-bold mb-4">
                        TTE
                    </h2>

                    <p class="text-xl">
                        Visualisasi elektronik
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- LAYANAN -->
<section class="py-24">

    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center mb-16">

            <h2 class="text-5xl font-bold text-gray-800 mb-4">

                Layanan Utama

            </h2>

            <p class="text-gray-500 text-xl">

                Layanan keamanan informasi dan persandian

            </p>

        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- CARD -->
            <div
                class="bg-white rounded-3xl shadow-lg p-8 hover:-translate-y-2 transition duration-300">

                <div
                    class="w-16 h-16 rounded-2xl bg-emerald-100 flex items-center justify-center text-3xl mb-6">

                    🔐

                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Sertifikat Elektronik
                </h3>

                <p class="text-gray-600 leading-relaxed">

                    Layanan pengajuan dan informasi sertifikat elektronik ASN.

                </p>

            </div>

            <!-- CARD -->
            <div
                class="bg-white rounded-3xl shadow-lg p-8 hover:-translate-y-2 transition duration-300">

                <div
                    class="w-16 h-16 rounded-2xl bg-cyan-100 flex items-center justify-center text-3xl mb-6">

                    🛡️

                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Insiden Siber
                </h3>

                <p class="text-gray-600 leading-relaxed">

                    Penanganan dan pelaporan keamanan siber pemerintah daerah.

                </p>

            </div>

            <!-- CARD -->
            <div
                class="bg-white rounded-3xl shadow-lg p-8 hover:-translate-y-2 transition duration-300">

                <div
                    class="w-16 h-16 rounded-2xl bg-purple-100 flex items-center justify-center text-3xl mb-6">

                    📡

                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Pengamanan Sinyal
                </h3>

                <p class="text-gray-600 leading-relaxed">

                    Pengamanan informasi komunikasi dan persandian digital.

                </p>

            </div>

            <!-- CARD -->
            <div
                class="bg-white rounded-3xl shadow-lg p-8 hover:-translate-y-2 transition duration-300">

                <div
                    class="w-16 h-16 rounded-2xl bg-yellow-100 flex items-center justify-center text-3xl mb-6">

                    🖥️

                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Visualisasi TTE
                </h3>

                <p class="text-gray-600 leading-relaxed">

                    Visualisasi tanda tangan elektronik berbasis web.

                </p>

            </div>

        </div>

    </div>

</section>

@endsection