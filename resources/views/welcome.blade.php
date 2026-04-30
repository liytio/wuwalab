<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WuwaLab - Wuthering Waves Wiki & Guides</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#11131a] text-white font-sans antialiased">

    <nav class="bg-[#1A1D2A] p-4 shadow-lg border-b border-gray-800 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-black text-blue-400 tracking-wider">WuwaLab</h1>
            <ul class="flex space-x-8 text-sm font-semibold text-gray-300">
                <li><a href="/" class="text-blue-400">Karakter</a></li>
                <li><a href="#" class="hover:text-white transition">Senjata</a></li>
                <li><a href="#" class="hover:text-white transition">Kalkulator</a></li>
            </ul>
        </div>
    </nav>

    <div class="bg-[#1A1D2A] border-b border-gray-800 py-16">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4">WuwaLab - Wuthering Waves Wiki & Guide</h2>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">
                WuwaLab adalah pusat informasi untuk Wuthering Waves. Temukan panduan lengkap, tier list, build karakter terbaik, dan kalkulator material dalam satu tempat.
            </p>
        </div>
    </div>

    <div class="container mx-auto mt-10 px-4 mb-20">

        <div class="mb-12">
            <div class="flex items-center space-x-2 mb-4 border-b-2 border-blue-500 pb-2">
                <div class="w-3 h-3 bg-blue-500"></div>
                <h3 class="text-xl font-bold text-white uppercase tracking-wider">Panduan Utama</h3>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                
                <a href="/tier-list" class="flex items-center bg-[#1A1D2A] hover:bg-[#242736] border border-gray-800 p-3 rounded-md transition group">
                    <div class="w-12 h-12 bg-purple-900/50 rounded flex items-center justify-center text-purple-400 group-hover:bg-purple-500 group-hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                    </div>
                    <span class="ml-4 font-semibold text-gray-200">Tier List Karakter</span>
                    <span class="ml-auto text-gray-600 group-hover:text-white transition">→</span>
                </a>

                <a href="/beginner-guide" class="flex items-center bg-[#1A1D2A] hover:bg-[#242736] border border-gray-800 p-3 rounded-md transition group">
                    <div class="w-12 h-12 bg-blue-900/50 rounded flex items-center justify-center text-blue-400 group-hover:bg-blue-500 group-hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                    </div>
                    <span class="ml-4 font-semibold text-gray-200">Beginner Guide</span>
                    <span class="ml-auto text-gray-600 group-hover:text-white transition">→</span>
                </a>

                <a href="https://mapgenie.io/wuthering-waves" target="_blank" rel="noopener noreferrer" class="flex items-center bg-[#1A1D2A] hover:bg-[#242736] border border-gray-800 p-3 rounded-md transition group">
                    <div class="w-12 h-12 bg-green-900/50 rounded flex items-center justify-center text-green-400 group-hover:bg-green-500 group-hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" /></svg>
                    </div>
                    <span class="ml-4 font-semibold text-gray-200">Interactive Map</span>
                    <span class="ml-auto text-gray-600 group-hover:text-white transition">↗</span>
                </a>

                <a href="/echo-system" class="flex items-center bg-[#1A1D2A] hover:bg-[#242736] border border-gray-800 p-3 rounded-md transition group">
                    <div class="w-12 h-12 bg-yellow-900/50 rounded flex items-center justify-center text-yellow-400 group-hover:bg-yellow-500 group-hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" /></svg>
                    </div>
                    <span class="ml-4 font-semibold text-gray-200">Echo System & Stats</span>
                    <span class="ml-auto text-gray-600 group-hover:text-white transition">→</span>
                </a>

                <a href="/daftar-senjata" class="flex items-center bg-[#1A1D2A] hover:bg-[#242736] border border-gray-800 p-3 rounded-md transition group">
                    <div class="w-12 h-12 bg-red-900/50 rounded flex items-center justify-center text-red-400 group-hover:bg-red-500 group-hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <span class="ml-4 font-semibold text-gray-200">Daftar Senjata</span>
                    <span class="ml-auto text-gray-600 group-hover:text-white transition">→</span>
                </a>

                <a href="/team-tier-list" class="flex items-center bg-[#1A1D2A] hover:bg-[#242736] border border-gray-800 p-3 rounded-md transition group">
                    <div class="w-12 h-12 bg-teal-900/50 rounded flex items-center justify-center text-teal-400 group-hover:bg-teal-500 group-hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                    </div>
                    <span class="ml-4 font-semibold text-gray-200">Team Tier List</span>
                    <span class="ml-auto text-gray-600 group-hover:text-white transition">→</span>
                </a>
            </div>
        </div>

        <div>
            <div class="flex items-center space-x-2 mb-6 border-b-2 border-blue-500 pb-2 mt-10">
                <div class="w-3 h-3 bg-blue-500"></div>
                <h3 class="text-xl font-bold text-white uppercase tracking-wider">Daftar Resonator</h3>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                @foreach ($resonators as $resonator)
                <div class="bg-[#1A1D2A] rounded-xl overflow-hidden shadow-lg border border-gray-800 hover:border-blue-500 transition-colors duration-300 flex flex-col">
                    
                    <div class="pt-8 pb-4 flex justify-center bg-gray-900/50">
                        <div class="w-32 h-32 rounded-full border-4 border-gray-400 overflow-hidden shadow-xl">
                            <img src="{{ asset('images/' . $resonator->image) }}" alt="{{ $resonator->name }}" class="w-full h-full object-cover">
                        </div>
                    </div>

                    <div class="p-5 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-blue-300 mb-4">{{ $resonator->name }}</h3>
                        
                        <div class="space-y-2 text-xs text-gray-300 flex-grow">
                            <p><span class="font-semibold text-gray-500">Elemen:</span> {{ $resonator->element }}</p>
                            <p><span class="font-semibold text-gray-500">Senjata:</span> {{ $resonator->weapon_type }}</p>
                            <p><span class="font-semibold text-gray-500">Rarity:</span> {{ $resonator->rarity }} Bintang</p>
                            <p><span class="font-semibold text-gray-500">Echo Terbaik:</span> {{ $resonator->best_echoes }}</p>
                        </div>
                        
                        <a href="/resonator/{{ $resonator->id }}" class="block mt-6 w-full bg-blue-600 hover:bg-blue-500 text-white text-center font-bold py-2 px-4 rounded transition shadow-lg">
                            Lihat Build
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>

</body>
</html>