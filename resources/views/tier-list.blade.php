<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tier List - WuwaLab</title>
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
        <div class="absolute inset-0 bg-[#11131a]/85 backdrop-blur-sm"></div>
        <div class="container mx-auto px-4 py-16 relative z-10 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-blue-500">Tier List Resonator</h1>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                Peringkat karakter terbaik berdasarkan performa mereka di *end-game* konten.
            </p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8 max-w-6xl">

        <div class="flex flex-col sm:flex-row justify-center space-y-3 sm:space-y-0 sm:space-x-4 mb-10">
            <button id="btn-toa" onclick="switchTab('toa')" class="px-8 py-4 bg-purple-600 text-white font-bold rounded-xl shadow-lg border border-purple-500 transition-all">
                Tower of Adversity
            </button>
            <button id="btn-ww" onclick="switchTab('ww')" class="px-8 py-4 bg-[#1A1D2A] text-gray-400 font-bold rounded-xl border border-gray-800 hover:bg-gray-800 transition-all">
                Whimpering Wastes
            </button>
        </div>

        <div id="content-toa" class="block space-y-12">
            
            <div>
                <h3 class="text-2xl font-bold text-white mb-4 border-b-2 border-purple-500 pb-2 flex items-center">
                    ⚔️ Main DPS (ToA)
                </h3>
                
                <div class="flex bg-[#1A1D2A] border border-gray-800 rounded-lg mb-3 overflow-hidden shadow">
                    <div class="w-16 md:w-24 bg-red-900/40 text-red-400 font-black text-xl flex items-center justify-center border-r border-gray-800">T0</div>
                    <div class="p-3 flex flex-wrap gap-4 items-center">
                        <div class="flex flex-col items-center group cursor-pointer">
                            <img src="{{ asset('images/jiyan.jpg') }}" alt="Jiyan" class="w-14 h-14 md:w-16 md:h-16 rounded-full border-2 border-yellow-400 shadow-md group-hover:scale-110 transition">
                            <span class="text-xs text-gray-300 mt-1 font-semibold">Jiyan</span>
                        </div>
                    </div>
                </div>

                <div class="flex bg-[#1A1D2A] border border-gray-800 rounded-lg mb-3 overflow-hidden shadow">
                    <div class="w-16 md:w-24 bg-orange-900/40 text-orange-400 font-black text-xl flex items-center justify-center border-r border-gray-800">T1</div>
                    <div class="p-3 flex flex-wrap gap-4 items-center">
                        <div class="flex flex-col items-center group cursor-pointer">
                            <img src="{{ asset('images/rover.jpg') }}" alt="Rover" class="w-14 h-14 md:w-16 md:h-16 rounded-full border-2 border-yellow-400 shadow-md group-hover:scale-110 transition">
                            <span class="text-xs text-gray-300 mt-1 font-semibold">Rover</span>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-bold text-white mb-4 border-b-2 border-blue-500 pb-2 flex items-center">
                    ⚡ Hybrid / Sub-DPS (ToA)
                </h3>
                
                <div class="flex bg-[#1A1D2A] border border-gray-800 rounded-lg mb-3 overflow-hidden shadow">
                    <div class="w-16 md:w-24 bg-red-900/40 text-red-400 font-black text-xl flex items-center justify-center border-r border-gray-800">T0</div>
                    <div class="p-3 flex flex-wrap gap-4 items-center">
                        <div class="flex flex-col items-center group cursor-pointer">
                            <img src="{{ asset('images/yinlin.jpg') }}" alt="Yinlin" class="w-14 h-14 md:w-16 md:h-16 rounded-full border-2 border-yellow-400 shadow-md group-hover:scale-110 transition">
                            <span class="text-xs text-gray-300 mt-1 font-semibold">Yinlin</span>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-bold text-white mb-4 border-b-2 border-green-500 pb-2 flex items-center">
                    🌿 Support (ToA)
                </h3>
                
                <div class="flex bg-[#1A1D2A] border border-gray-800 rounded-lg mb-3 overflow-hidden shadow">
                    <div class="w-16 md:w-24 bg-orange-900/40 text-orange-400 font-black text-xl flex items-center justify-center border-r border-gray-800">T1</div>
                    <div class="p-3 flex flex-wrap gap-4 items-center">
                        <div class="flex flex-col items-center group cursor-pointer">
                            <img src="{{ asset('images/baizhi.jpg') }}" alt="Baizhi" class="w-14 h-14 md:w-16 md:h-16 rounded-full border-2 border-purple-400 shadow-md group-hover:scale-110 transition">
                            <span class="text-xs text-gray-300 mt-1 font-semibold">Baizhi</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div id="content-ww" class="hidden space-y-12">
            
            <div class="bg-blue-900/30 border border-blue-800 p-4 rounded-lg mb-6">
                <p class="text-blue-300 text-sm text-center">💡 Di Whimpering Wastes, karakter dengan area of effect (AoE) besar dan mobilitas tinggi mendapatkan prioritas lebih tinggi.</p>
            </div>

            <div>
                <h3 class="text-2xl font-bold text-white mb-4 border-b-2 border-purple-500 pb-2 flex items-center">
                    ⚔️ Main DPS (Wastes)
                </h3>
                <div class="flex bg-[#1A1D2A] border border-gray-800 rounded-lg mb-3 overflow-hidden shadow">
                    <div class="w-16 md:w-24 bg-red-900/40 text-red-400 font-black text-xl flex items-center justify-center border-r border-gray-800">T0</div>
                    <div class="p-3 flex flex-wrap gap-4 items-center">
                        <div class="flex flex-col items-center group cursor-pointer">
                            <img src="{{ asset('images/yinlin.jpg') }}" alt="Yinlin" class="w-14 h-14 md:w-16 md:h-16 rounded-full border-2 border-yellow-400 shadow-md group-hover:scale-110 transition">
                            <span class="text-xs text-gray-300 mt-1 font-semibold">Yinlin</span>
                        </div>
                        <div class="flex flex-col items-center group cursor-pointer">
                            <img src="{{ asset('images/jiyan.jpg') }}" alt="Jiyan" class="w-14 h-14 md:w-16 md:h-16 rounded-full border-2 border-yellow-400 shadow-md group-hover:scale-110 transition">
                            <span class="text-xs text-gray-300 mt-1 font-semibold">Jiyan</span>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-bold text-white mb-4 border-b-2 border-blue-500 pb-2 flex items-center">
                    ⚡ Hybrid / Sub-DPS (Wastes)
                </h3>
                <div class="flex bg-[#1A1D2A] border border-gray-800 rounded-lg mb-3 overflow-hidden shadow">
                    <div class="w-16 md:w-24 bg-orange-900/40 text-orange-400 font-black text-xl flex items-center justify-center border-r border-gray-800">T1</div>
                    <div class="p-3 flex flex-wrap gap-4 items-center">
                        <div class="flex flex-col items-center group cursor-pointer">
                            <img src="{{ asset('images/rover.jpg') }}" alt="Rover" class="w-14 h-14 md:w-16 md:h-16 rounded-full border-2 border-yellow-400 shadow-md group-hover:scale-110 transition">
                            <span class="text-xs text-gray-300 mt-1 font-semibold">Rover</span>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-bold text-white mb-4 border-b-2 border-green-500 pb-2 flex items-center">
                    🌿 Support (Wastes)
                </h3>
                <div class="flex bg-[#1A1D2A] border border-gray-800 rounded-lg mb-3 overflow-hidden shadow">
                    <div class="w-16 md:w-24 bg-red-900/40 text-red-400 font-black text-xl flex items-center justify-center border-r border-gray-800">T0</div>
                    <div class="p-3 flex flex-wrap gap-4 items-center">
                        <div class="flex flex-col items-center group cursor-pointer">
                            <img src="{{ asset('images/baizhi.jpg') }}" alt="Baizhi" class="w-14 h-14 md:w-16 md:h-16 rounded-full border-2 border-purple-400 shadow-md group-hover:scale-110 transition">
                            <span class="text-xs text-gray-300 mt-1 font-semibold">Baizhi</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script>
        function switchTab(tabName) {
            const btnToa = document.getElementById('btn-toa');
            const btnWw = document.getElementById('btn-ww');
            const contentToa = document.getElementById('content-toa');
            const contentWw = document.getElementById('content-ww');

            if (tabName === 'toa') {
                // Tampilkan Konten TOA
                contentToa.classList.remove('hidden');
                contentToa.classList.add('block');
                contentWw.classList.remove('block');
                contentWw.classList.add('hidden');

                // Styling Tombol TOA Aktif
                btnToa.className = "px-8 py-4 bg-purple-600 text-white font-bold rounded-xl shadow-lg border border-purple-500 transition-all";
                btnWw.className = "px-8 py-4 bg-[#1A1D2A] text-gray-400 font-bold rounded-xl border border-gray-800 hover:bg-gray-800 transition-all";
            } else {
                // Tampilkan Konten WW
                contentWw.classList.remove('hidden');
                contentWw.classList.add('block');
                contentToa.classList.remove('block');
                contentToa.classList.add('hidden');

                // Styling Tombol WW Aktif
                btnWw.className = "px-8 py-4 bg-purple-600 text-white font-bold rounded-xl shadow-lg border border-purple-500 transition-all";
                btnToa.className = "px-8 py-4 bg-[#1A1D2A] text-gray-400 font-bold rounded-xl border border-gray-800 hover:bg-gray-800 transition-all";
            }
        }
    </script>
</body>
</html>