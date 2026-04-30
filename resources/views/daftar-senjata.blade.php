<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Senjata - WuwaLab</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#11131a] text-gray-300 font-sans antialiased leading-relaxed">

    <!-- NAVBAR -->
    <nav class="bg-[#1A1D2A] p-4 shadow-lg border-b border-gray-800 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-black text-blue-400 tracking-wider">WuwaLab</a>
            <ul class="flex space-x-8 text-sm font-semibold text-gray-300">
                <li><a href="/" class="hover:text-white transition">← Kembali ke Beranda</a></li>
            </ul>
        </div>
    </nav>

    <!-- HEADER -->
    <div class="bg-[url('https://cdn.kurogame.com/step_202405/bg.jpg')] bg-cover bg-center border-b border-gray-800 relative">
        <div class="absolute inset-0 bg-[#11131a]/85 backdrop-blur-sm"></div>
        <div class="container mx-auto px-4 py-16 relative z-10 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-yellow-500">Persenjataan Solaris-3</h1>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                Katalog lengkap senjata (Weapons) yang tersedia di Wuthering Waves untuk memaksimalkan potensi Resonator Anda.
            </p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container mx-auto px-4 py-12 max-w-6xl">

        <!-- KATEGORI BINTANG 5 -->
        <div class="mb-12">
            <div class="flex items-center space-x-2 mb-6 border-b-2 border-yellow-500 pb-2">
                <div class="w-3 h-3 bg-yellow-500 transform rotate-45"></div>
                <h2 class="text-2xl font-bold text-white uppercase tracking-wider">Senjata 5 Bintang (SSR)</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Verdant Summit -->
                <div class="bg-[#1A1D2A] rounded-xl border border-gray-800 overflow-hidden shadow-lg hover:border-yellow-500 transition-colors group cursor-pointer">
                    <div class="bg-gradient-to-b from-yellow-900/30 to-transparent p-6 flex justify-center border-b border-gray-800">
                        <img src="{{ asset('images/weapon_verdant.png') }}" alt="Verdant Summit" class="h-32 object-contain filter drop-shadow-xl group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-bold text-yellow-400">Verdant Summit</h3>
                            <span class="bg-yellow-600/20 text-yellow-500 text-xs px-2 py-1 rounded font-bold">5★</span>
                        </div>
                        <p class="text-xs text-gray-400 mb-3">Broadblade</p>
                        <div class="flex gap-2 text-xs mb-3">
                            <span class="bg-gray-800 px-2 py-1 rounded text-gray-300">ATK</span>
                            <span class="bg-gray-800 px-2 py-1 rounded text-red-300">CRIT DMG</span>
                        </div>
                    </div>
                </div>

                <!-- Stringmaster -->
                <div class="bg-[#1A1D2A] rounded-xl border border-gray-800 overflow-hidden shadow-lg hover:border-yellow-500 transition-colors group cursor-pointer">
                    <div class="bg-gradient-to-b from-yellow-900/30 to-transparent p-6 flex justify-center border-b border-gray-800">
                        <img src="{{ asset('images/weapon_stringmaster.png') }}" alt="Stringmaster" class="h-32 object-contain filter drop-shadow-xl group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-bold text-yellow-400">Stringmaster</h3>
                            <span class="bg-yellow-600/20 text-yellow-500 text-xs px-2 py-1 rounded font-bold">5★</span>
                        </div>
                        <p class="text-xs text-gray-400 mb-3">Rectifier</p>
                        <div class="flex gap-2 text-xs mb-3">
                            <span class="bg-gray-800 px-2 py-1 rounded text-gray-300">ATK</span>
                            <span class="bg-gray-800 px-2 py-1 rounded text-red-300">CRIT Rate</span>
                        </div>
                    </div>
                </div>

                <!-- Emerald of Genesis -->
                <div class="bg-[#1A1D2A] rounded-xl border border-gray-800 overflow-hidden shadow-lg hover:border-yellow-500 transition-colors group cursor-pointer">
                    <div class="bg-gradient-to-b from-yellow-900/30 to-transparent p-6 flex justify-center border-b border-gray-800">
                        <img src="{{ asset('images/weapon_emerald.png') }}" alt="Emerald of Genesis" class="h-32 object-contain filter drop-shadow-xl group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-bold text-yellow-400">Emerald of Genesis</h3>
                            <span class="bg-yellow-600/20 text-yellow-500 text-xs px-2 py-1 rounded font-bold">5★</span>
                        </div>
                        <p class="text-xs text-gray-400 mb-3">Sword</p>
                        <div class="flex gap-2 text-xs mb-3">
                            <span class="bg-gray-800 px-2 py-1 rounded text-gray-300">ATK</span>
                            <span class="bg-gray-800 px-2 py-1 rounded text-red-300">CRIT Rate</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- KATEGORI BINTANG 4 -->
        <div>
            <div class="flex items-center space-x-2 mb-6 border-b-2 border-purple-500 pb-2">
                <div class="w-3 h-3 bg-purple-500 transform rotate-45"></div>
                <h2 class="text-2xl font-bold text-white uppercase tracking-wider">Senjata 4 Bintang (SR)</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Autumntrace -->
                <div class="bg-[#1A1D2A] rounded-xl border border-gray-800 overflow-hidden shadow-lg hover:border-purple-500 transition-colors group cursor-pointer">
                    <div class="bg-gradient-to-b from-purple-900/20 to-transparent p-6 flex justify-center border-b border-gray-800">
                        <img src="{{ asset('images/weapon_autumntrace.png') }}" alt="Autumntrace" class="h-32 object-contain filter drop-shadow-xl group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-bold text-purple-400">Autumntrace</h3>
                            <span class="bg-purple-600/20 text-purple-400 text-xs px-2 py-1 rounded font-bold">4★</span>
                        </div>
                        <p class="text-xs text-gray-400 mb-3">Broadblade</p>
                        <div class="flex gap-2 text-xs mb-3">
                            <span class="bg-gray-800 px-2 py-1 rounded text-gray-300">ATK</span>
                            <span class="bg-gray-800 px-2 py-1 rounded text-red-300">CRIT Rate</span>
                        </div>
                    </div>
                </div>

                <!-- Augment -->
                <div class="bg-[#1A1D2A] rounded-xl border border-gray-800 overflow-hidden shadow-lg hover:border-purple-500 transition-colors group cursor-pointer">
                    <div class="bg-gradient-to-b from-purple-900/20 to-transparent p-6 flex justify-center border-b border-gray-800">
                        <img src="{{ asset('images/weapon_augment.png') }}" alt="Augment" class="h-32 object-contain filter drop-shadow-xl group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-bold text-purple-400">Augment</h3>
                            <span class="bg-purple-600/20 text-purple-400 text-xs px-2 py-1 rounded font-bold">4★</span>
                        </div>
                        <p class="text-xs text-gray-400 mb-3">Rectifier</p>
                        <div class="flex gap-2 text-xs mb-3">
                            <span class="bg-gray-800 px-2 py-1 rounded text-gray-300">ATK</span>
                            <span class="bg-gray-800 px-2 py-1 rounded text-red-300">CRIT Rate</span>
                        </div>
                    </div>
                </div>

                <!-- Commando of Conviction -->
                <div class="bg-[#1A1D2A] rounded-xl border border-gray-800 overflow-hidden shadow-lg hover:border-purple-500 transition-colors group cursor-pointer">
                    <div class="bg-gradient-to-b from-purple-900/20 to-transparent p-6 flex justify-center border-b border-gray-800">
                        <img src="{{ asset('images/weapon_commando.png') }}" alt="Commando of Conviction" class="h-32 object-contain filter drop-shadow-xl group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-bold text-purple-400">Commando</h3>
                            <span class="bg-purple-600/20 text-purple-400 text-xs px-2 py-1 rounded font-bold">4★</span>
                        </div>
                        <p class="text-xs text-gray-400 mb-3">Sword</p>
                        <div class="flex gap-2 text-xs mb-3">
                            <span class="bg-gray-800 px-2 py-1 rounded text-gray-300">ATK</span>
                            <span class="bg-gray-800 px-2 py-1 rounded text-blue-300">ATK%</span>
                        </div>
                    </div>
                </div>

                <!-- Variation -->
                <div class="bg-[#1A1D2A] rounded-xl border border-gray-800 overflow-hidden shadow-lg hover:border-purple-500 transition-colors group cursor-pointer">
                    <div class="bg-gradient-to-b from-purple-900/20 to-transparent p-6 flex justify-center border-b border-gray-800">
                        <img src="{{ asset('images/weapon_variation.png') }}" alt="Variation" class="h-32 object-contain filter drop-shadow-xl group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-bold text-purple-400">Variation</h3>
                            <span class="bg-purple-600/20 text-purple-400 text-xs px-2 py-1 rounded font-bold">4★</span>
                        </div>
                        <p class="text-xs text-gray-400 mb-3">Rectifier</p>
                        <div class="flex gap-2 text-xs mb-3">
                            <span class="bg-gray-800 px-2 py-1 rounded text-gray-300">ATK</span>
                            <span class="bg-gray-800 px-2 py-1 rounded text-green-300">Energy Regen</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</body>
</html>