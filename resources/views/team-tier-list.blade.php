<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Tier List - WuwaLab</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom scrollbar untuk container jika timnya terlalu banyak */
        .hide-scroll::-webkit-scrollbar { display: none; }
        .hide-scroll { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
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

    <!-- MAIN CONTENT -->
    <div class="container mx-auto px-4 py-8 max-w-7xl">

        <!-- TAB MENU (GAYA PRYDWEN) -->
        <div class="flex flex-col md:flex-row gap-2 mb-8">
            <button id="btn-toa" onclick="switchTab('toa')" class="flex-1 border-2 border-orange-500 bg-gradient-to-r from-orange-900/40 to-[#1A1D2A] p-6 relative overflow-hidden transition-all text-center">
                <h3 id="text-toa" class="relative z-10 text-2xl font-black text-white tracking-widest uppercase">Tower of Adversity</h3>
            </button>
            
            <button id="btn-ww" onclick="switchTab('ww')" class="flex-1 border-2 border-gray-800 bg-[#1A1D2A] p-6 relative overflow-hidden transition-all text-center hover:border-gray-600 opacity-60 hover:opacity-100">
                <h3 id="text-ww" class="relative z-10 text-2xl font-black text-gray-500 tracking-widest uppercase">Whimpering Wastes</h3>
            </button>
        </div>

        <div class="text-center mb-8">
            <h2 class="text-white font-bold text-xl uppercase tracking-[0.3em]">↓ Apex Teams ↓</h2>
        </div>

        <!-- ========================================== -->
        <!-- KONTEN: TOWER OF ADVERSITY -->
        <!-- ========================================== -->
        <div id="content-toa" class="block space-y-8">

            <!-- TIER 0 ROW -->
            <div class="flex flex-col md:flex-row border border-gray-800 bg-[#1A1D2A]">
                <!-- Tier Marker -->
                <div class="bg-red-500/90 text-white font-black text-3xl flex items-center justify-center p-4 md:w-16 flex-shrink-0 border-b md:border-b-0 md:border-r border-gray-800 shadow-[inset_0_0_15px_rgba(0,0,0,0.5)]">
                    T0
                </div>
                
                <!-- Teams Container -->
                <div class="p-4 flex-grow grid grid-cols-1 lg:grid-cols-2 gap-4">
                    
                    <!-- Team 1: Jiyan Hypercarry -->
                    <div class="flex flex-col border border-gray-700 bg-[#151822]">
                        <div class="bg-orange-500 py-1 text-center font-bold text-sm text-white uppercase tracking-wider shadow-md z-20 relative">
                            Jiyan Hypercarry
                        </div>
                        <div class="relative h-28 flex items-center justify-end p-3 overflow-hidden">
                            <!-- Background Diperbarui: Menggunakan jiyan.jpg dan object-center -->
                            <div class="absolute inset-0 w-2/3">
                                <img src="{{ asset('images/jiyan.jpg') }}" class="w-full h-full object-cover object-center opacity-40">
                                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-[#151822]/80 to-[#151822]"></div>
                            </div>

                            <!-- Avatars (Right Side) -->
                            <div class="relative z-10 flex gap-2 items-center">
                                <div class="w-14 h-14 border-2 border-yellow-500 shadow-lg"><img src="{{ asset('images/jiyan.jpg') }}" alt="Jiyan" class="w-full h-full object-cover"></div>
                                <div class="w-12 h-12 border-2 border-yellow-500 shadow-lg"><img src="{{ asset('images/mortefi.jpg') }}" alt="Mortefi" class="w-full h-full object-cover"></div>
                                <div class="flex flex-col gap-1">
                                    <div class="w-10 h-10 border border-yellow-500"><img src="{{ asset('images/verina.jpg') }}" alt="Verina" class="w-full h-full object-cover"></div>
                                    <div class="w-8 h-8 border border-purple-500 opacity-80 hover:opacity-100 transition cursor-pointer"><img src="{{ asset('images/baizhi.jpg') }}" alt="Baizhi" class="w-full h-full object-cover"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team 2: Yinlin Electro Quickswap -->
                    <div class="flex flex-col border border-gray-700 bg-[#151822]">
                        <div class="bg-purple-600 py-1 text-center font-bold text-sm text-white uppercase tracking-wider shadow-md z-20 relative">
                            Yinlin Electro Quickswap
                        </div>
                        <div class="relative h-28 flex items-center justify-end p-3 overflow-hidden">
                            <!-- Background Diperbarui: Menggunakan yinlin.jpg dan object-center -->
                            <div class="absolute inset-0 w-2/3">
                                <img src="{{ asset('images/yinlin.jpg') }}" class="w-full h-full object-cover object-center opacity-40">
                                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-[#151822]/80 to-[#151822]"></div>
                            </div>

                            <div class="relative z-10 flex gap-2 items-center">
                                <div class="w-14 h-14 border-2 border-yellow-500 shadow-lg"><img src="{{ asset('images/calcharo.jpg') }}" alt="Calcharo" class="w-full h-full object-cover"></div>
                                <div class="w-12 h-12 border-2 border-yellow-500 shadow-lg"><img src="{{ asset('images/yinlin.jpg') }}" alt="Yinlin" class="w-full h-full object-cover"></div>
                                <div class="flex flex-col gap-1">
                                    <div class="w-10 h-10 border border-yellow-500"><img src="{{ asset('images/verina.jpg') }}" alt="Verina" class="w-full h-full object-cover"></div>
                                    <div class="w-8 h-8 border border-purple-500 opacity-80 hover:opacity-100 transition cursor-pointer"><img src="{{ asset('images/baizhi.jpg') }}" alt="Baizhi" class="w-full h-full object-cover"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- TIER 1 ROW -->
            <div class="flex flex-col md:flex-row border border-gray-800 bg-[#1A1D2A]">
                <div class="bg-orange-500/90 text-white font-black text-3xl flex items-center justify-center p-4 md:w-16 flex-shrink-0 border-b md:border-b-0 md:border-r border-gray-800 shadow-[inset_0_0_15px_rgba(0,0,0,0.5)]">
                    T1
                </div>
                <div class="p-4 flex-grow grid grid-cols-1 lg:grid-cols-2 gap-4">
                    
                    <!-- Team 3: Rover Spectro Burst -->
                    <div class="flex flex-col border border-gray-700 bg-[#151822]">
                        <div class="bg-yellow-500 py-1 text-center font-bold text-sm text-gray-900 uppercase tracking-wider shadow-md z-20 relative">
                            Spectro Burst
                        </div>
                        <div class="relative h-28 flex items-center justify-end p-3 overflow-hidden">
                            <!-- Background Diperbarui: Menggunakan rover.jpg dan object-center -->
                            <div class="absolute inset-0 w-2/3">
                                <img src="{{ asset('images/rover.jpg') }}" class="w-full h-full object-cover object-center opacity-40">
                                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-[#151822]/80 to-[#151822]"></div>
                            </div>

                            <div class="relative z-10 flex gap-2 items-center">
                                <div class="w-14 h-14 border-2 border-yellow-500 shadow-lg"><img src="{{ asset('images/rover.jpg') }}" alt="Rover" class="w-full h-full object-cover"></div>
                                <div class="w-12 h-12 border-2 border-purple-500 shadow-lg"><img src="{{ asset('images/sanhua.jpg') }}" alt="Sanhua" class="w-full h-full object-cover"></div>
                                <div class="w-10 h-10 border border-purple-500"><img src="{{ asset('images/baizhi.jpg') }}" alt="Baizhi" class="w-full h-full object-cover"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- ========================================== -->
        <!-- KONTEN: WHIMPERING WASTES (Default Hidden) -->
        <!-- ========================================== -->
        <div id="content-ww" class="hidden space-y-8">
            <!-- TIER 0 ROW -->
            <div class="flex flex-col md:flex-row border border-gray-800 bg-[#1A1D2A]">
                <div class="bg-red-500/90 text-white font-black text-3xl flex items-center justify-center p-4 md:w-16 flex-shrink-0 border-b md:border-b-0 md:border-r border-gray-800 shadow-[inset_0_0_15px_rgba(0,0,0,0.5)]">
                    T0
                </div>
                <div class="p-4 flex-grow grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <!-- Whimpering Wastes specific teams can be placed here -->
                    <div class="flex flex-col border border-gray-700 bg-[#151822] opacity-50 flex items-center justify-center h-32">
                        <p class="text-gray-500 font-bold uppercase tracking-widest">Coming Soon / Meta Adjustments</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- JAVASCRIPT UNTUK PINDAH TAB -->
    <script>
        function switchTab(tabName) {
            const btnToa = document.getElementById('btn-toa');
            const btnWw = document.getElementById('btn-ww');
            const textToa = document.getElementById('text-toa');
            const textWw = document.getElementById('text-ww');
            const contentToa = document.getElementById('content-toa');
            const contentWw = document.getElementById('content-ww');

            if (tabName === 'toa') {
                // Tampilkan ToA
                contentToa.classList.remove('hidden');
                contentToa.classList.add('block');
                contentWw.classList.remove('block');
                contentWw.classList.add('hidden');

                // Styling Tab ToA Aktif
                btnToa.className = "flex-1 border-2 border-orange-500 bg-gradient-to-r from-orange-900/40 to-[#1A1D2A] p-6 relative overflow-hidden transition-all text-center";
                textToa.className = "relative z-10 text-2xl font-black text-white tracking-widest uppercase";
                
                // Styling Tab WW Pasif
                btnWw.className = "flex-1 border-2 border-gray-800 bg-[#1A1D2A] p-6 relative overflow-hidden transition-all text-center hover:border-gray-600 opacity-60 hover:opacity-100";
                textWw.className = "relative z-10 text-2xl font-black text-gray-500 tracking-widest uppercase";
            } else {
                // Tampilkan WW
                contentWw.classList.remove('hidden');
                contentWw.classList.add('block');
                contentToa.classList.remove('block');
                contentToa.classList.add('hidden');

                // Styling Tab WW Aktif (Warna biru muda/teal khas Wastes)
                btnWw.className = "flex-1 border-2 border-cyan-500 bg-gradient-to-r from-cyan-900/40 to-[#1A1D2A] p-6 relative overflow-hidden transition-all text-center";
                textWw.className = "relative z-10 text-2xl font-black text-white tracking-widest uppercase";
                
                // Styling Tab ToA Pasif
                btnToa.className = "flex-1 border-2 border-gray-800 bg-[#1A1D2A] p-6 relative overflow-hidden transition-all text-center hover:border-gray-600 opacity-60 hover:opacity-100";
                textToa.className = "relative z-10 text-2xl font-black text-gray-500 tracking-widest uppercase";
            }
        }
    </script>
</body>
</html>