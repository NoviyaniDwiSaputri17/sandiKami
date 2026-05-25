@extends('layouts.app')

@section('content')

<!-- HERO -->
<section
    class="relative overflow-hidden bg-gradient-to-br from-emerald-950 via-teal-900 to-cyan-900 text-white py-32">

    <!-- BLUR -->
    <div
        class="absolute top-0 left-0 w-96 h-96 bg-emerald-500/20 rounded-full blur-3xl">
    </div>

    <div
        class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl">
    </div>

    <div class="max-w-7xl mx-auto px-8 relative z-10">

        <div class="max-w-4xl"
            data-aos="fade-up">

            <p
                class="uppercase tracking-[5px] text-emerald-300 font-semibold mb-5">

                Diskominfo Kabupaten Pamekasan

            </p>

            <h1
                class="text-6xl lg:text-7xl font-extrabold leading-tight mb-8">

                Bidang Persandian <br>
                dan Keamanan Informasi

            </h1>

            <p
                class="text-xl text-gray-200 leading-relaxed max-w-3xl">

                Bidang Persandian dan Keamanan Informasi
                merupakan bagian dari Dinas Komunikasi dan
                Informatika Kabupaten Pamekasan yang memiliki
                tugas dalam pengelolaan keamanan informasi,
                layanan sertifikat elektronik, persandian,
                dan pengamanan komunikasi digital pemerintah daerah.

            </p>

        </div>

    </div>

</section>

<!-- TENTANG -->
<section class="py-32 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-8">

        <div class="grid lg:grid-cols-2 gap-20 items-center">

            <!-- TEXT -->
            <div data-aos="fade-right">

                <p
                    class="text-emerald-600 font-semibold uppercase tracking-[4px] mb-4">

                    Tentang Bidang

                </p>

                <h2
                    class="text-5xl font-extrabold text-gray-800 leading-tight mb-8">

                    Menjaga Keamanan Informasi Pemerintah Daerah

                </h2>

                <p
                    class="text-lg text-gray-600 leading-relaxed mb-6">

                    Bidang Persandian dan Keamanan Informasi
                    memiliki peran penting dalam mendukung
                    transformasi digital pemerintah daerah melalui
                    penerapan keamanan informasi yang modern,
                    aman, dan terintegrasi.

                </p>

                <p
                    class="text-lg text-gray-600 leading-relaxed mb-6">

                    Bidang ini bertanggung jawab dalam pengelolaan
                    keamanan sistem informasi pemerintah daerah,
                    pengamanan komunikasi persandian, serta
                    pengembangan layanan sertifikat elektronik
                    untuk ASN dan perangkat daerah.

                </p>

                <p
                    class="text-lg text-gray-600 leading-relaxed">

                    Selain itu, bidang Persandian dan Keamanan
                    Informasi juga mendukung implementasi
                    Sistem Pemerintahan Berbasis Elektronik (SPBE)
                    melalui peningkatan keamanan digital
                    dan penguatan tata kelola informasi.

                </p>

            </div>

            <!-- IMAGE -->
            <div
                data-aos="fade-left"
                class="relative">

                <div
                    class="absolute -top-6 -left-6 w-full h-full border-4 border-emerald-500 rounded-[35px]">
                </div>

                <img
                    src="{{ asset('images/SANDI.jpg') }}"
                    class="relative rounded-[35px] shadow-2xl hover:scale-105 transition duration-500 w-full object-cover">

            </div>

        </div>

    </div>

</section>

<!-- VISI MISI -->
<section class="py-32 bg-gray-100">

    <div class="max-w-7xl mx-auto px-8">

        <!-- TITLE -->
        <div
            class="text-center mb-24"
            data-aos="fade-up">

            <p
                class="text-emerald-600 font-semibold uppercase tracking-[4px] mb-4">

                Arah dan Tujuan

            </p>

            <h2
                class="text-5xl font-extrabold text-gray-800 mb-6">

                Visi dan Misi

            </h2>

            <p
                class="text-xl text-gray-500 max-w-3xl mx-auto leading-relaxed">

                Komitmen dalam mewujudkan keamanan informasi
                pemerintah daerah yang aman, modern,
                dan terpercaya.

            </p>

        </div>

        <!-- CONTENT -->
        <div class="grid lg:grid-cols-2 gap-20">

            <!-- VISI -->
            <div data-aos="fade-right">

                <div class="flex items-center gap-5 mb-8">

                    <div
                        class="w-20 h-20 rounded-3xl bg-emerald-100 flex items-center justify-center text-4xl">

                        🎯

                    </div>

                    <h3
                        class="text-4xl font-bold text-gray-800">

                        Visi

                    </h3>

                </div>

                <p
                    class="text-lg text-gray-600 leading-relaxed">

                    Mewujudkan tata kelola keamanan informasi
                    pemerintah daerah yang modern, aman,
                    terintegrasi, dan mendukung transformasi
                    digital Kabupaten Pamekasan.

                </p>

            </div>

            <!-- MISI -->
            <div data-aos="fade-left">

                <div class="flex items-center gap-5 mb-8">

                    <div
                        class="w-20 h-20 rounded-3xl bg-cyan-100 flex items-center justify-center text-4xl">

                        🚀

                    </div>

                    <h3
                        class="text-4xl font-bold text-gray-800">

                        Misi

                    </h3>

                </div>

                <div class="space-y-6">

                    <!-- ITEM -->
                    <div
                        class="flex items-start gap-4">

                        <div
                            class="w-4 h-4 rounded-full bg-emerald-500 mt-3">
                        </div>

                        <p class="text-lg text-gray-600 leading-relaxed">

                            Meningkatkan keamanan informasi
                            pemerintah daerah.

                        </p>

                    </div>

                    <!-- ITEM -->
                    <div
                        class="flex items-start gap-4">

                        <div
                            class="w-4 h-4 rounded-full bg-emerald-500 mt-3">
                        </div>

                        <p class="text-lg text-gray-600 leading-relaxed">

                            Mendukung implementasi Sistem
                            Pemerintahan Berbasis Elektronik (SPBE).

                        </p>

                    </div>

                    <!-- ITEM -->
                    <div
                        class="flex items-start gap-4">

                        <div
                            class="w-4 h-4 rounded-full bg-emerald-500 mt-3">
                        </div>

                        <p class="text-lg text-gray-600 leading-relaxed">

                            Mengembangkan layanan sertifikat
                            elektronik dan keamanan digital.

                        </p>

                    </div>

                    <!-- ITEM -->
                    <div
                        class="flex items-start gap-4">

                        <div
                            class="w-4 h-4 rounded-full bg-emerald-500 mt-3">
                        </div>

                        <p class="text-lg text-gray-600 leading-relaxed">

                            Meningkatkan kesadaran keamanan
                            informasi bagi ASN dan perangkat daerah.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- TUGAS -->
<section class="py-32 bg-white">

    <div class="max-w-7xl mx-auto px-8">

        <!-- TITLE -->
        <div
            class="text-center mb-24"
            data-aos="fade-up">

            <p
                class="text-emerald-600 font-semibold uppercase tracking-[4px] mb-4">

                Peran Bidang

            </p>

            <h2
                class="text-5xl font-extrabold text-gray-800 mb-6">

                Tugas dan Fungsi

            </h2>

            <p
                class="text-xl text-gray-500 max-w-3xl mx-auto leading-relaxed">

                Mendukung keamanan informasi dan komunikasi
                digital pemerintah daerah Kabupaten Pamekasan.

            </p>

        </div>

        <!-- LIST -->
        <div class="space-y-12">

            <!-- ITEM -->
            <div
                data-aos="fade-up"
                class="flex flex-col lg:flex-row gap-10 border-b pb-10">

                <div
                    class="text-6xl">
                    🔐
                </div>

                <div>

                    <h3
                        class="text-3xl font-bold text-gray-800 mb-4">

                        Pengelolaan Keamanan Informasi

                    </h3>

                    <p
                        class="text-lg text-gray-600 leading-relaxed">

                        Melaksanakan pengelolaan dan pengamanan
                        informasi elektronik pemerintah daerah
                        guna menjaga kerahasiaan, integritas,
                        dan ketersediaan data digital.

                    </p>

                </div>

            </div>

            <!-- ITEM -->
            <div
                data-aos="fade-up"
                class="flex flex-col lg:flex-row gap-10 border-b pb-10">

                <div
                    class="text-6xl">
                    📡
                </div>

                <div>

                    <h3
                        class="text-3xl font-bold text-gray-800 mb-4">

                        Persandian dan Pengamanan Komunikasi

                    </h3>

                    <p
                        class="text-lg text-gray-600 leading-relaxed">

                        Mendukung pengamanan komunikasi strategis
                        pemerintah daerah melalui sistem persandian
                        dan pengamanan sinyal komunikasi.

                    </p>

                </div>

            </div>

            <!-- ITEM -->
            <div
                data-aos="fade-up"
                class="flex flex-col lg:flex-row gap-10">

                <div
                    class="text-6xl">
                    🖥️
                </div>

                <div>

                    <h3
                        class="text-3xl font-bold text-gray-800 mb-4">

                        Layanan Sertifikat Elektronik

                    </h3>

                    <p
                        class="text-lg text-gray-600 leading-relaxed">

                        Mendukung penggunaan tanda tangan
                        elektronik dan sertifikat elektronik
                        untuk ASN dan perangkat daerah
                        dalam mendukung layanan digital pemerintah.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection