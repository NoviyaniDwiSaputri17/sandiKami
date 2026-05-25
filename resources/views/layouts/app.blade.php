<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>SandiKami</title>

    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FONT -->
    <link rel="preconnect"
        href="https://fonts.googleapis.com">

    <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

</head>

<body class="bg-gray-100 pt-20"
    style="font-family: 'Poppins', sans-serif;">

    <!-- NAVBAR -->
    <nav
        class="fixed top-0 left-0 w-full bg-white/80 backdrop-blur-md shadow-md z-50 border-b border-gray-200">

        <div class="max-w-7xl mx-auto px-6">

            <div class="flex items-center justify-between h-20">

                <!-- LOGO -->
                <div class="flex items-center gap-4">

                    <img src="{{ asset('images/disko.jpeg') }}"
                        alt="Logo"
                        class="w-12 h-12 object-contain">

                    <div>

                        <h1 class="font-bold text-gray-800 text-lg">
                            SandiKami
                        </h1>

                        <p class="text-sm text-gray-500">
                            Persandian dan keamanan informasi
                        </p>

                    </div>

                </div>

                <!-- MENU -->
                 
                <div class="hidden md:flex items-center gap-8 font-semibold">

                    <a href="/"
                        class="{{ request()->is('/')
                        ? 'text-emerald-600' 
                        : 'text-gray-700' }}
                        
                        hover:text-emerald-500 transition duration-300">

                        Beranda

                    </a>

                    <a href="/profil"
                        class="{{ request()->is('profil')
                        ? 'text-emerald-600' 
                        : 'text-gray-700' }}
                        
                        hover:text-emerald-500 transition duration-300">
                        Profil

                    </a>

                    <a href="/layanan"
                        class="{{ request()->is('layanan')
                        ? 'text-emerald-600' 
                        : 'text-gray-700' }}
                        
                        hover:text-emerald-500 transition duration-300">
                        Layanan

                    </a>

                    <a href="/visualisasi"
                        class="{{ request()->is('visualisasi')
                        ? 'text-emerald-600' 
                        : 'text-gray-700' }}
                        
                        hover:text-emerald-500 transition duration-300">
                        Buat Visualisasi TTE

                    </a>

                    <a href="/kontak"
                        class="{{ request()->is('kontak')
                        ? 'text-emerald-600' 
                        : 'text-gray-700' }}
                        
                        hover:text-emerald-500 transition duration-300">
                        Kontak

                    </a>

                    <a href="/login"
                        class="bg-emerald-600 hover:bg-emerald-700 text-white px-5 py-2 rounded-xl transition">

                        Login

                    </a>

                </div>

            </div>

        </div>

    </nav>

    <!-- CONTENT -->
    @yield('content')

    <!-- FOOTER -->
    <footer class="bg-slate-950 text-white mt-20">

        <div class="max-w-7xl mx-auto px-8 py-16">

            <div class="grid md:grid-cols-3 gap-10">

                <!-- BRAND -->
                <div>

                    <h2 class="text-2xl font-bold mb-4">
                        SandiKami
                    </h2>

                    <p class="text-gray-400 leading-relaxed">

                        Portal layanan persandian dan keamanan
                        informasi Diskominfo Kabupaten Pamekasan.

                    </p>

                </div>

                <!-- MENU -->
                <div>

                    <h2 class="text-xl font-semibold mb-4">
                        Menu
                    </h2>

                    <div class="space-y-3 text-gray-400">

                        <p>Beranda</p>
                        <p>Profil</p>
                        <p>Layanan</p>
                        <p>Visualisasi TTE</p>

                    </div>

                </div>

                <!-- KONTAK -->
                <div>

                    <h2 class="text-xl font-semibold mb-4">
                        Kontak
                    </h2>

                    <div class="space-y-3 text-gray-400">

                        <p>Diskominfo Pamekasan</p>
                        <p>Jl. Kabupaten Pamekasan</p>
                        <p>Email: info@diskominfo.go.id</p>

                    </div>

                </div>

            </div>

            <div class="border-t border-gray-800 mt-10 pt-6 text-center text-gray-500">

                © 2026 SandiKami - Diskominfo Pamekasan

            </div>

        </div>

    </footer>

</body>

</html>