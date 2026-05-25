@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto">

    <!-- JUDUL -->
    <div class="mb-10">

        <h1 class="text-4xl font-bold text-gray-800">
            Visualisasi Tanda Tangan Elektronik
        </h1>

        <p class="text-gray-600 mt-2">
            Generate visualisasi TTE ASN dalam format PNG
        </p>

    </div>

    <!-- GRID -->
    <div class="grid lg:grid-cols-2 gap-10">

        <!-- FORM INPUT -->
        <div class="bg-white rounded-2xl shadow-xl p-8">

            <h2 class="text-2xl font-bold mb-8 text-purple-700">
                Input Data ASN
            </h2>

            <!-- NAMA -->
            <div class="mb-5">

                <label class="block mb-2 font-semibold text-gray-700">
                    Nama ASN
                </label>

                <input
                    type="text"
                    id="nama"
                    placeholder="Masukkan Nama ASN"
                    class="w-full border border-gray-300 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-purple-600">

            </div>

            <!-- JABATAN -->
            <div class="mb-5">

                <label class="block mb-2 font-semibold text-gray-700">
                    Jabatan
                </label>

                <textarea
                    id="jabatan"
                    rows="3"
                    placeholder="Masukkan Jabatan"
                    class="w-full border border-gray-300 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-purple-600"></textarea>

            </div>

            <!-- PANGKAT -->
            <div class="mb-5">

                <label class="block mb-2 font-semibold text-gray-700">
                    Pangkat
                </label>

                <input
                    type="text"
                    id="pangkat"
                    placeholder="Contoh: Pembina Utama Muda"
                    class="w-full border border-gray-300 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-purple-600">

            </div>

            <!-- GOLONGAN -->
            <div class="mb-5">

                <label class="block mb-2 font-semibold text-gray-700">
                    Golongan
                </label>

                <input
                    type="text"
                    id="golongan"
                    placeholder="Contoh: IV/c"
                    class="w-full border border-gray-300 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-purple-600">

            </div>

            
            <!-- BUTTON -->
            <button
                onclick="updatePreview()"
                class="bg-purple-700 hover:bg-purple-800 transition text-white font-semibold px-8 py-4 rounded-xl w-full">

                Generate Preview

            </button>

        </div>

        <!-- PREVIEW -->
        <div>

            <div class="flex items-center justify-between mb-6">

                <h2 class="text-2xl font-bold text-gray-800">
                    Preview TTE
                </h2>

                <button
                    onclick="downloadPNG()"
                    class="bg-green-600 hover:bg-green-700 transition text-white font-semibold px-6 py-3 rounded-xl">

                    Download PNG

                </button>

            </div>

            <!-- AREA PREVIEW -->
            <div class="bg-gray-200 p-4 rounded-2xl overflow-auto">

                <!-- CARD TTE -->
                <div id="tte-card"
                class="bg-white border-[5px] border-black p-3 w-full max-w-[650px] mx-auto">

                    <!-- BORDER DALAM -->
                    <div class="border-[3px] border-black p-5">

                        <div class="flex items-center justify-between gap-4">

                            <!-- LOGO KIRI -->
                            <div class="w-20 flex-shrink-0">

                                <img
                                src="{{ asset('images/disko.jpeg') }}"
                                alt="Logo Diskominfo"
                                class="w-full">

                            </div>

                            <!-- TEKS -->
                            <div class="flex-1">

                                <p class="text-[14px] leading-snug">

                                    Dokumen ini ditandatangani secara elektronik oleh :

                                </p>

                                <p id="preview-jabatan"
                                class="text-[16px] leading-snug mt-1 font-semibold">

                                    JABATAN

                                </p>

                                <h1 id="preview-nama"
                                class="text-[28px] font-bold underline mt-5 uppercase">

                                    NAMA ASN

                                </h1>

                                <p id="preview-pangkat"
                                class="text-[18px] mt-2">

                                    Pangkat

                                </p>


                            </div>

                            <!-- LOGO KANAN -->
                            <div class="w-24 flex-shrink-0">

                                <img
                                src="{{ asset('images/logoBSrE.png') }}"
                                alt="Logo BSrE"
                                class="w-full">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- HTML2CANVAS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>

    // UPDATE PREVIEW
    function updatePreview() {

        let nama = document.getElementById('nama').value;
        let jabatan = document.getElementById('jabatan').value;
        let pangkat = document.getElementById('pangkat').value;
        let golongan = document.getElementById('golongan').value;

        document.getElementById('preview-nama').innerText = nama;

        document.getElementById('preview-jabatan').innerText = jabatan;

        document.getElementById('preview-pangkat').innerText =
            pangkat + ' (' + golongan + ')';

    }

    // DOWNLOAD PNG
    function downloadPNG() {

        html2canvas(document.querySelector("#tte-card"), {
            scale: 2
        }).then(canvas => {

            let link = document.createElement('a');

            link.download = 'visualisasi-tte.png';

            link.href = canvas.toDataURL('image/png');

            link.click();

        });

    }

</script>

@endsection