<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $resonator->name }} - WuwaLab Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans antialiased">

    <nav class="bg-gray-800 p-4 shadow-lg border-b border-gray-700">
        <div class="container mx-auto">
            <a href="/" class="text-blue-400 font-bold">← Kembali ke Daftar</a>
        </div>
    </nav>

    <div class="container mx-auto mt-10 p-6">
        <div class="bg-gray-800 rounded-xl shadow-2xl overflow-hidden border border-gray-700">
            <div class="md:flex">
                <div class="md:w-1/3 bg-gray-800">
                    <img src="{{ asset('images/' . $resonator->detail_image) }}" alt="{{ $resonator->name }}" class="w-full h-full object-cover object-center min-h-full">
                </div>
                
                <div class="p-8 md:w-2/3">
                    <div class="flex items-center space-x-3">
                        <h1 class="text-4xl font-extrabold text-blue-300">{{ $resonator->name }}</h1>
                        <span class="px-3 py-1 bg-yellow-600 text-xs font-bold rounded-full">
                            {{ $resonator->rarity }} Bintang
                        </span>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-6 mt-8">
                        <div class="bg-gray-900 p-4 rounded-lg">
                            <p class="text-gray-400 text-sm">Elemen</p>
                            <p class="text-xl font-semibold">{{ $resonator->element }}</p>
                        </div>
                        <div class="bg-gray-900 p-4 rounded-lg">
                            <p class="text-gray-400 text-sm">Tipe Senjata</p>
                            <p class="text-xl font-semibold">{{ $resonator->weapon_type }}</p>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h2 class="text-2xl font-bold border-b border-gray-700 pb-2 mb-4">Rekomendasi Echoes</h2>
                        
                        <div class="bg-gray-800 border border-gray-700 rounded-xl overflow-hidden shadow-sm mb-6">
                            <div class="bg-[#1A1D2A] p-4 flex justify-between items-center">
                                
                                <div class="flex items-center space-x-4">
                                    <div>
                                        <p class="text-sm text-gray-400 font-semibold mb-1">Main Echo</p>
                                        <div class="flex items-center space-x-3">
                                            <p class="text-2xl font-bold text-white">{{ $resonator->best_echoes }}</p>
                                            
                                            <img src="{{ asset('images/' . $resonator->echo_image) }}" alt="{{ $resonator->best_echoes }}" class="w-12 h-12 object-contain rounded-md bg-gray-800 p-1 border border-gray-700 shadow-sm">
                                        </div>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <p class="text-sm text-gray-400 font-semibold mb-1">Sonata Effect</p>
                                    <p class="text-lg font-bold text-purple-400">{{ $resonator->sonata_effect }}</p>
                                </div>
                                
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="flex items-center space-x-2 mb-3 border-b-2 border-purple-500 pb-2">
                                <div class="w-4 h-4 bg-purple-500 rounded-sm"></div>
                                <h3 class="text-lg font-bold uppercase tracking-wider text-white">Best Echo Stats</h3>
                            </div>

                            @php
                                // Memecah string main_stats menjadi array berdasarkan simbol '|'
                                $stats = explode('|', $resonator->main_stats);
                            @endphp

                            <div class="grid grid-cols-5 gap-[2px] bg-gray-700 border border-gray-700 rounded-t-md overflow-hidden">
                                
                                <div class="bg-[#242632] p-4 text-center">
                                    <p class="text-yellow-400 text-sm font-bold mb-3">4 cost</p>
                                    <p class="text-white text-sm font-semibold">{{ $stats[0] ?? '-' }}</p>
                                </div>
                                
                                <div class="bg-[#242632] p-4 text-center">
                                    <p class="text-yellow-400 text-sm font-bold mb-3">3 cost</p>
                                    <p class="text-white text-sm font-semibold">{{ $stats[1] ?? '-' }}</p>
                                </div>
                                
                                <div class="bg-[#242632] p-4 text-center">
                                    <p class="text-yellow-400 text-sm font-bold mb-3">3 cost</p>
                                    <p class="text-white text-sm font-semibold">{{ $stats[2] ?? '-' }}</p>
                                </div>
                                
                                <div class="bg-[#242632] p-4 text-center">
                                    <p class="text-orange-300 text-sm font-bold mb-3">1 cost</p>
                                    <p class="text-white text-sm font-semibold">{{ $stats[3] ?? '-' }}</p>
                                </div>
                                
                                <div class="bg-[#242632] p-4 text-center">
                                    <p class="text-orange-300 text-sm font-bold mb-3">1 cost</p>
                                    <p class="text-white text-sm font-semibold">{{ $stats[4] ?? '-' }}</p>
                                </div>

                            </div>

                            <div class="bg-[#242632] border-x border-b border-gray-700 rounded-b-md p-4 text-center mt-[2px]">
                                <p class="text-sm text-white">
                                    <span class="text-gray-400 font-medium">Substats:</span> 
                                    {{ $resonator->substats }}
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="mt-8 mb-10">
                        <div class="flex items-center space-x-2 mb-4 border-b-2 border-purple-500 pb-2">
                            <div class="w-4 h-4 bg-purple-500 rounded-sm"></div>
                            <h2 class="text-2xl font-bold text-white uppercase tracking-wider">Rekomendasi Senjata</h2>
                        </div>

                        <div class="flex flex-col gap-4">
                            @if($resonator->recommended_weapons)
                                @php
                                    // Mengubah JSON menjadi Array
                                    $weapons = json_decode($resonator->recommended_weapons);
                                @endphp

                                @foreach($weapons as $weapon)
                                <div class="bg-[#242632] border border-gray-700 rounded-md overflow-hidden shadow-sm">
                                    
                                    <div class="flex items-center bg-[#2b2d3a] border-b border-gray-700 p-2">
                                        <div class="{{ $weapon->color }} text-white font-bold text-sm py-2 px-3 rounded w-24 text-center flex-shrink-0">
                                            {{ $weapon->percentage }}
                                        </div>
                                        
                                        <div class="ml-3 bg-gray-800 p-1 rounded border border-gray-600 flex-shrink-0">
                                            <img src="{{ asset('images/' . $weapon->image) }}" alt="{{ $weapon->name }}" class="w-10 h-10 object-contain">
                                        </div>
                                        
                                        <h3 class="ml-4 text-yellow-400 font-bold text-lg">{{ $weapon->name }}</h3>
                                    </div>
                                    
                                    <div class="p-4">
                                        <p class="text-sm text-gray-300 leading-relaxed">
                                            {{ $weapon->desc }}
                                        </p>
                                    </div>
                                    
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
            </div>
        </div>


        @if($resonator->recommended_teams)
        <div class="mt-12 mb-20 px-4 md:px-8">
            <div class="flex items-center space-x-3 mb-6 border-b-2 border-blue-500 pb-2">
                <div class="w-4 h-4 bg-blue-500 rounded-sm transform rotate-45"></div>
                <h2 class="text-2xl md:text-3xl font-extrabold text-white uppercase tracking-widest">Rekomendasi Tim</h2>
            </div>

            @php
                $teams = json_decode($resonator->recommended_teams);
            @endphp

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach($teams as $team)
                <div class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 shadow-lg">
                    <div class="bg-gray-900 p-4 border-b border-gray-700">
                        <h3 class="text-xl font-bold text-blue-300">{{ $team->team_name }}</h3>
                    </div>

                    <div class="flex justify-around items-center p-6 bg-[#1A1D2A]">
                        @foreach($team->members as $index => $member)
                            <div class="flex flex-col items-center z-10">
                                <div class="w-20 h-20 md:w-24 md:h-24 rounded-full border-4 border-gray-700 overflow-hidden shadow-lg mb-3">
                                    <img src="{{ asset('images/' . $member->image) }}" alt="{{ $member->name }}" class="w-full h-full object-cover">
                                </div>
                                <span class="bg-gray-900 text-[10px] md:text-xs text-gray-300 px-2 py-1 rounded-full mb-1 border border-gray-700">{{ $member->role }}</span>
                                <h4 class="font-bold text-white text-sm md:text-base">{{ $member->name }}</h4>
                            </div>
                            
                            @if($index < 2)
                                <div class="text-gray-600 font-bold text-xl md:text-2xl z-10">+</div>
                            @endif
                        @endforeach
                    </div>

                    <div class="p-4 bg-gray-900 border-t border-gray-700">
                        <p class="text-sm text-gray-400 leading-relaxed">{{ $team->desc }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        
</body>
</html>