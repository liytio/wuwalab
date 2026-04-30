<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beginner Guide - WuwaLab</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#11131a] text-gray-300 font-sans antialiased leading-relaxed">

    <nav class="bg-[#1A1D2A] p-4 shadow-lg border-b border-gray-800 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-black text-blue-400 tracking-wider">WuwaLab</a>
            <ul class="flex space-x-8 text-sm font-semibold text-gray-300">
                <li><a href="/" class="hover:text-white transition">← Kembali ke Beranda</a></li>
            </ul>
        </div>
    </nav>

    <div class="bg-[url('https://cdn.kurogame.com/step_202405/bg.jpg')] bg-cover bg-center border-b border-gray-800 relative">
        <div class="absolute inset-0 bg-[#11131a]/80 backdrop-blur-sm"></div>
        
        <div class="container mx-auto px-4 py-20 relative z-10 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Panduan Lengkap Pemula</h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Segala hal yang perlu kamu ketahui sebelum memulai petualangan di dunia Solaris-3.
            </p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12 max-w-5xl">

        <section class="mb-12 bg-[#1A1D2A] p-8 rounded-xl border border-gray-800 shadow-lg">
            <h2 class="text-3xl font-bold text-white mb-4 border-b border-gray-700 pb-2 flex items-center">
                <span class="w-2 h-8 bg-blue-500 mr-3 rounded"></span> Pengenalan Wuthering Waves
            </h2>
            <p class="mb-4">
                <strong class="text-blue-400">Wuthering Waves</strong> adalah game Action RPG open-world yang dikembangkan oleh Kuro Games. Kamu akan bermain sebagai <em>Rover</em>, yang terbangun dari tidur panjang di dunia pasca-apokaliptik yang disebut <strong>Solaris-3</strong>.
            </p>
            <p>
                Dunia ini sedang memulihkan diri dari bencana misterius bernama "The Lament". Kamu akan merekrut berbagai karakter yang disebut <em>Resonator</em>, mengumpulkan monster (Echoes), dan mengungkap rahasia masa lalumu.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-white mb-6 flex items-center">
                <span class="w-2 h-8 bg-green-500 mr-3 rounded"></span> Spesifikasi Perangkat
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-[#1A1D2A] p-6 rounded-xl border border-gray-800">
                    <h3 class="text-xl font-bold text-white mb-4 border-b border-gray-700 pb-2">💻 Spesifikasi PC</h3>
                    <div class="space-y-4">
                        <div>
                            <span class="text-xs text-gray-500 uppercase font-bold tracking-wider">Minimum</span>
                            <p class="text-sm">OS: Windows 10/11 64-bit<br>CPU: Intel Core i5 (Gen 9) / Ryzen 2700<br>RAM: 16 GB<br>GPU: GTX 1060 / RX 570<br>Storage: 30 GB</p>
                        </div>
                        <div>
                            <span class="text-xs text-green-500 uppercase font-bold tracking-wider">Rekomendasi</span>
                            <p class="text-sm text-white">OS: Windows 10/11 64-bit<br>CPU: Intel Core i7 (Gen 9) / Ryzen 3700<br>RAM: 16 GB ke atas<br>GPU: RTX 2060 / RX 5700 XT ke atas<br>Storage: 30 GB (Disarankan SSD)</p>
                        </div>
                    </div>
                </div>

                <div class="bg-[#1A1D2A] p-6 rounded-xl border border-gray-800">
                    <h3 class="text-xl font-bold text-white mb-4 border-b border-gray-700 pb-2">📱 Spesifikasi Mobile</h3>
                    <div class="space-y-4">
                        <div>
                            <span class="text-xs text-gray-500 uppercase font-bold tracking-wider">Android Minimum</span>
                            <p class="text-sm">OS: Android 7.0<br>Prosesor: Snapdragon 835 / Dimensity G71/72<br>RAM: 4 GB</p>
                        </div>
                        <div>
                            <span class="text-xs text-gray-500 uppercase font-bold tracking-wider">iOS Minimum</span>
                            <p class="text-sm">Model: iPhone 11 ke atas<br>OS: iOS 14.0</p>
                        </div>
                        <div>
                            <span class="text-xs text-green-500 uppercase font-bold tracking-wider">Mobile Rekomendasi</span>
                            <p class="text-sm text-white">Prosesor: Snapdragon 8 Gen 1 / Dimensity 9000 atau A13 Bionic ke atas. RAM 6GB+.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<section class="mb-12 bg-[#1A1D2A] p-8 rounded-xl border border-gray-800 shadow-lg">
            
            <h2 class="text-3xl font-bold text-white mb-4 border-b border-gray-700 pb-4 flex items-center justify-center text-center">
                <span class="w-2 h-8 bg-yellow-500 mr-3 rounded"></span> Sistem Eksplorasi
            </h2>
            
            <p class="mb-8 text-center text-gray-300 md:text-lg max-w-3xl mx-auto leading-relaxed">
                Wuthering Waves menawarkan mobilitas yang sangat tinggi dan mengalir. Eksplorasi di Solaris-3 tidak akan terasa lambat berkat fitur-fitur berikut:
            </p>
            
            <div class="flex justify-center mb-10">
                <img src="{{ asset('images/guide_explore.jpg') }}" alt="Sistem Eksplorasi" class="w-full md:w-4/5 lg:w-3/4 rounded-xl border-2 border-gray-700 shadow-2xl object-cover hover:border-yellow-500 transition duration-300">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-4xl mx-auto text-gray-300">
                <div class="bg-gray-900 p-5 rounded-lg border border-gray-800 text-center hover:bg-gray-800 transition">
                    <strong class="text-yellow-400 block mb-2 text-lg">🏃‍♂️ Parkour Lari di Dinding</strong>
                    <p class="text-sm">Kamu bisa berlari ke atas dinding lurus tanpa batas hingga staminamu habis.</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg border border-gray-800 text-center hover:bg-gray-800 transition">
                    <strong class="text-yellow-400 block mb-2 text-lg">🪝 Grapple Hook</strong>
                    <p class="text-sm">Item ini bisa digunakan untuk berayun atau menarik tubuh karaktermu ke depan saat berada di udara.</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg border border-gray-800 text-center hover:bg-gray-800 transition">
                    <strong class="text-yellow-400 block mb-2 text-lg">💨 Lompatan Udara</strong>
                    <p class="text-sm">Setelah melompat, kamu bisa melakukan <em>dash</em> (menghindar) di udara untuk mencapai pijakan yang lebih jauh.</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg border border-gray-800 text-center hover:bg-gray-800 transition">
                    <strong class="text-yellow-400 block mb-2 text-lg">🦅 Glider</strong>
                    <p class="text-sm">Seperti game open-world pada umumnya, kamu dilengkapi dengan glider untuk terbang meluncur dari tempat tinggi.</p>
                </div>
            </div>

        </section>

        <section class="mb-12 bg-[#1A1D2A] p-8 rounded-xl border border-gray-800 shadow-lg">
            <h2 class="text-3xl font-bold text-white mb-4 border-b border-gray-700 pb-2 flex items-center">
                <span class="w-2 h-8 bg-red-500 mr-3 rounded"></span> Mekanik Pertarungan (Combat)
            </h2>
            <p class="mb-6 text-gray-300">
                Nilai jual utama game ini adalah sistem pertarungannya yang sangat *fast-paced* (cepat) dan responsif. Ini hal yang wajib kamu kuasai:
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-900 rounded-lg border border-gray-800 overflow-hidden flex flex-col shadow-md hover:border-red-500 transition duration-300">
                    <img src="{{ asset('images/guide_parry.jpg') }}" alt="Parry dan Dodge" class="w-full h-48 object-cover border-b border-gray-800">
                    <div class="p-5 flex-grow">
                        <h4 class="font-bold text-red-400 mb-2 text-lg">Parry (Menangkis) & Dodge</h4>
                        <p class="text-sm text-gray-300">Saat musuh memiliki indikator lingkaran bercahaya (halo) sebelum menyerang, serang tepat waktu untuk melakukan <strong>Parry</strong>. Jika musuh bersinar merah, kamu harus <strong>Dodge</strong> (menghindar).</p>
                    </div>
                </div>

                <div class="bg-gray-900 rounded-lg border border-gray-800 overflow-hidden flex flex-col shadow-md hover:border-red-500 transition duration-300">
                    <img src="{{ asset('images/guide_intro.jpg') }}" alt="Intro dan Outro Skill" class="w-full h-48 object-cover border-b border-gray-800">
                    <div class="p-5 flex-grow">
                        <h4 class="font-bold text-red-400 mb-2 text-lg">Intro & Outro Skill</h4>
                        <p class="text-sm text-gray-300">Saat bertarung, cincin di pinggir layar (Concerto Energy) akan terisi. Jika penuh, menukar (swap) karakter akan memicu serangan masuk (Intro) dan efek keluar (Outro) yang sangat kuat.</p>
                    </div>
                </div>

                <div class="bg-gray-900 rounded-lg border border-gray-800 overflow-hidden flex flex-col shadow-md hover:border-red-500 transition duration-300">
                    <img src="{{ asset('images/guide_echoes.jpg') }}" alt="Sistem Echoes" class="w-full h-48 object-cover border-b border-gray-800">
                    <div class="p-5 flex-grow">
                        <h4 class="font-bold text-red-400 mb-2 text-lg">Sistem Echoes</h4>
                        <p class="text-sm text-gray-300">Setiap monster yang kamu kalahkan bisa ditangkap (diubah menjadi Echo). Kamu bisa menggunakan Echo utamamu (Cost 4) untuk memanggil monster tersebut di pertarungan.</p>
                    </div>
                </div>

                <div class="bg-gray-900 rounded-lg border border-gray-800 overflow-hidden flex flex-col shadow-md hover:border-red-500 transition duration-300">
                    <img src="{{ asset('images/guide_ultimate.jpg') }}" alt="Resonance Liberation" class="w-full h-48 object-cover border-b border-gray-800">
                    <div class="p-5 flex-grow">
                        <h4 class="font-bold text-red-400 mb-2 text-lg">Resonance Liberation (Ultimate)</h4>
                        <p class="text-sm text-gray-300">Serangan pamungkas karaktermu. Mengumpulkan energi perlahan dengan melukai musuh. Gunakan pada momen yang tepat, misalnya saat bos sedang lumpuh (Staggered).</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-12 bg-[#1A1D2A] p-8 rounded-xl border border-gray-800 shadow-lg">
            <h2 class="text-3xl font-bold text-white mb-4 border-b border-gray-700 pb-2 flex items-center">
                <span class="w-2 h-8 bg-purple-500 mr-3 rounded"></span> Sistem Gacha (Convene)
            </h2>
            <p class="mb-6 text-gray-300">
                Untuk mendapatkan karakter dan senjata bintang 5 baru, kamu menggunakan fitur yang disebut <strong>Convene</strong> menggunakan mata uang <em>Astrite</em>.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-900 rounded-lg border border-gray-800 overflow-hidden flex flex-col shadow-md hover:border-purple-500 transition duration-300">
                    <img src="{{ asset('images/guide_gacha_char.png') }}" alt="Character Event Convene" class="w-full h-48 object-cover border-b border-gray-800">
                    <div class="p-5 flex-grow">
                        <div class="flex items-center mb-3">
                            <span class="bg-purple-900 text-purple-300 font-bold text-xs px-2 py-1 rounded mr-3">80 Pity</span>
                            <h4 class="font-bold text-purple-400 text-lg">Character Event Convene</h4>
                        </div>
                        <p class="text-sm text-gray-300">Garansi mendapatkan karakter bintang 5 pada tarikan (pull) ke-80. Jika bintang 5 pertama yang didapat bukan karakter edisi terbatas (kalah 50/50), maka bintang 5 berikutnya 100% adalah karakter terbatas tersebut.</p>
                    </div>
                </div>

                <div class="bg-gray-900 rounded-lg border border-gray-800 overflow-hidden flex flex-col shadow-md hover:border-purple-500 transition duration-300">
                    <img src="{{ asset('images/guide_gacha_weapon.png') }}" alt="Weapon Event Convene" class="w-full h-48 object-cover border-b border-gray-800">
                    <div class="p-5 flex-grow">
                        <div class="flex items-center mb-3">
                            <span class="bg-purple-900 text-purple-300 font-bold text-xs px-2 py-1 rounded mr-3">80 Pity</span>
                            <h4 class="font-bold text-purple-400 text-lg">Weapon Event Convene</h4>
                        </div>
                        <p class="text-sm text-gray-300">Garansi senjata bintang 5 pada pull ke-80. Berbeda dengan game lain, di Wuthering Waves, banner senjata terbatas adalah <strong>100% garansi</strong> (tidak ada sistem kalah 50/50 untuk senjata limit).</p>
                    </div>
                </div>
            </div>
        </section>

    </div>

</body>
</html>