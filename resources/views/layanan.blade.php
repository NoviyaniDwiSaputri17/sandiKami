@extends('layouts.app')

@section('content')

<section class="bg-gradient-to-r from-cyan-900 to-teal-900 text-white py-28">

    <div class="max-w-7xl mx-auto px-8">

        <h1 class="text-6xl font-extrabold mb-6">

            Layanan

        </h1>

        <p class="text-2xl text-gray-200 max-w-3xl">

            Informasi layanan persandian dan keamanan informasi
            Diskominfo Kabupaten Pamekasan.

        </p>

    </div>

</section>

<!-- GRID -->
<section class="py-24 bg-gray-100">

    <div class="max-w-7xl mx-auto px-8">

        <div class="grid lg:grid-cols-2 gap-10">

            <!-- CARD -->
            <div class="bg-white rounded-3xl shadow-lg p-10">

                <div class="text-6xl mb-6">🔐</div>

                <h2 class="text-3xl font-bold mb-6">

                    Sertifikat Elektronik

                </h2>

                <p class="text-gray-600 leading-relaxed mb-6">

                    Layanan sertifikat elektronik digunakan
                    untuk mendukung autentikasi dan keamanan
                    dokumen digital ASN dan OPD.

                </p>

                <h3 class="font-bold text-xl mb-4">
                    Manfaat
                </h3>

                <ul class="space-y-3 text-gray-600">

                    <li>• Keamanan dokumen digital</li>
                    <li>• Validasi identitas elektronik</li>
                    <li>• Mendukung implementasi SPBE</li>

                </ul>

            </div>

            <!-- CARD -->
            <div class="bg-white rounded-3xl shadow-lg p-10">

                <div class="text-6xl mb-6">🛡️</div>

                <h2 class="text-3xl font-bold mb-6">

                    Insiden Siber

                </h2>

                <p class="text-gray-600 leading-relaxed mb-6">

                    Layanan penanganan insiden siber untuk
                    mendukung keamanan sistem informasi
                    pemerintah daerah.

                </p>

                <h3 class="font-bold text-xl mb-4">
                    Penanganan
                </h3>

                <ul class="space-y-3 text-gray-600">

                    <li>• Malware</li>
                    <li>• Phishing</li>
                    <li>• Peretasan sistem</li>

                </ul>

            </div>

            <!-- CARD -->
            <div class="bg-white rounded-3xl shadow-lg p-10">

                <div class="text-6xl mb-6">📡</div>

                <h2 class="text-3xl font-bold mb-6">

                    Pengamanan Sinyal

                </h2>

                <p class="text-gray-600 leading-relaxed mb-6">

                    Pengamanan komunikasi dan informasi strategis
                    pemerintah daerah melalui sistem persandian.

                </p>

                <h3 class="font-bold text-xl mb-4">
                    Fokus Layanan
                </h3>

                <ul class="space-y-3 text-gray-600">

                    <li>• Keamanan komunikasi</li>
                    <li>• Persandian informasi</li>
                    <li>• Monitoring sinyal</li>

                </ul>

            </div>

            <!-- CARD -->
            <div class="bg-white rounded-3xl shadow-lg p-10">

                <div class="text-6xl mb-6">🖥️</div>

                <h2 class="text-3xl font-bold mb-6">

                    Visualisasi TTE

                </h2>

                <p class="text-gray-600 leading-relaxed mb-6">

                    Fitur visualisasi tanda tangan elektronik
                    berbasis web untuk simulasi dokumen digital.

                </p>

                <h3 class="font-bold text-xl mb-4">
                    Fitur
                </h3>

                <ul class="space-y-3 text-gray-600">

                    <li>• Generate preview TTE</li>
                    <li>• Download PNG</li>
                    <li>• Tanpa penyimpanan data</li>

                </ul>

            </div>

        </div>

    </div>

</section>

@endsection