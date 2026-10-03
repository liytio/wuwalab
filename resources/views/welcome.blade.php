<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WutheringWK - Wuthering Waves Wiki & Guides</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#11131a] text-white font-sans antialiased">

    @include('partials.nav')

    <div class="bg-[#1A1D2A] border-b border-gray-800 py-16">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4">WutheringWK - Wuthering Waves Wiki & Guide</h2>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">
                WutheringWK adalah pusat informasi untuk Wuthering Waves. Temukan panduan lengkap, tier list, build karakter terbaik, dan kalkulator material dalam satu tempat.
            </p>
        </div>
    </div>

    <div class="container mx-auto mt-10 px-4 mb-20">

        <div>
            <div class="flex items-center space-x-2 mb-6 border-b-2 border-blue-500 pb-2">
                <div class="w-3 h-3 bg-blue-500"></div>
                <h3 class="text-xl font-bold text-white uppercase tracking-wider">Daftar Resonator</h3>
            </div>

            <form method="GET" action="{{ route('home') }}" class="grid grid-cols-1 md:grid-cols-5 gap-3 mb-6" data-test="resonator-filter">
                <div class="md:col-span-2">
                    <input type="text" name="q" value="{{ $filters['q'] ?? '' }}" placeholder="Cari nama resonator..." aria-label="Cari nama resonator"
                        class="w-full bg-[#1A1D2A] border border-gray-700 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
                    @error('q') <p class="mt-1 text-sm text-red-400">{{ $message }}</p> @enderror
                </div>
                <select name="element" aria-label="Elemen" class="bg-[#1A1D2A] border border-gray-700 rounded px-3 py-2">
                    <option value="">Semua elemen</option>
                    @foreach ($elements as $element)
                        <option value="{{ $element }}" @selected(($filters['element'] ?? '') === $element)>{{ $element }}</option>
                    @endforeach
                </select>
                <select name="weapon_type" aria-label="Tipe senjata" class="bg-[#1A1D2A] border border-gray-700 rounded px-3 py-2">
                    <option value="">Semua senjata</option>
                    @foreach ($weaponTypes as $weaponType)
                        <option value="{{ $weaponType }}" @selected(($filters['weapon_type'] ?? '') === $weaponType)>{{ $weaponType }}</option>
                    @endforeach
                </select>
                <div class="flex gap-2">
                    <select name="rarity" aria-label="Rarity" class="flex-1 bg-[#1A1D2A] border border-gray-700 rounded px-3 py-2">
                        <option value="">Semua rarity</option>
                        <option value="5" @selected(($filters['rarity'] ?? '') == 5)>5 Bintang</option>
                        <option value="4" @selected(($filters['rarity'] ?? '') == 4)>4 Bintang</option>
                    </select>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-500 font-bold px-4 rounded transition">Cari</button>
                </div>
            </form>

            @if ($resonators->isEmpty())
                <p class="text-gray-400" data-test="empty-resonators">
                    Tidak ada resonator yang cocok dengan pencarian. <a href="{{ route('home') }}" class="text-blue-400">Reset filter</a>
                </p>
            @endif

            @php
                // Warna teks per elemen, mengikuti warna elemen di dalam game
                $elementColors = [
                    'Aero' => 'text-emerald-300',
                    'Electro' => 'text-violet-400',
                    'Fusion' => 'text-orange-400',
                    'Glacio' => 'text-sky-300',
                    'Havoc' => 'text-fuchsia-400',
                    'Spectro' => 'text-yellow-200',
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">

                @foreach ($resonators as $resonator)
                <div class="group relative h-52 overflow-hidden bg-[#16181d] border border-gray-800 hover:border-gray-500 transition-colors duration-300" data-test="resonator-card">

                    {{-- Splash art di sisi kanan, memudar ke kiri --}}
                    <img src="{{ asset('images/' . ($resonator->detail_image ?: $resonator->image)) }}" alt="{{ $resonator->name }}"
                        class="absolute inset-y-0 right-0 w-3/4 h-full object-cover object-[50%_15%] opacity-80 group-hover:opacity-100 group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#16181d] via-[#16181d]/85 to-transparent"></div>

                    <div class="relative h-full p-5 flex flex-col justify-between pointer-events-none">
                        <div>
                            <p class="font-mono text-[11px] font-bold uppercase tracking-widest {{ $elementColors[$resonator->element] ?? 'text-gray-300' }}">
                                {{ $resonator->element }} · {{ $resonator->weapon_type }}
                            </p>
                            <h3 class="text-2xl font-bold text-white mt-1">{{ $resonator->name }}</h3>
                            <p class="text-amber-400 text-xs tracking-wider mt-1" aria-label="{{ $resonator->rarity }} bintang">{{ str_repeat('★', $resonator->rarity) }}</p>
                        </div>

                        <div class="flex gap-6 font-mono">
                            <div class="max-w-[45%]">
                                <p class="text-sm font-bold text-gray-100 truncate">{{ $resonator->best_echoes ?: '-' }}</p>
                                <p class="text-[10px] uppercase tracking-wider text-gray-500">Echo Terbaik</p>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-100">{{ $resonator->published_builds_count }}</p>
                                <p class="text-[10px] uppercase tracking-wider text-gray-500">Build Komunitas</p>
                            </div>
                        </div>
                    </div>

                    {{-- Seluruh kartu bisa diklik menuju halaman detail --}}
                    <a href="{{ route('resonators.show', $resonator->id) }}" class="absolute inset-0" aria-label="Lihat build {{ $resonator->name }}"></a>

                    @auth
                        <a href="{{ route('builds.create', ['resonator_id' => $resonator->id]) }}"
                            class="absolute bottom-4 right-4 z-10 px-3 py-1 font-mono text-[11px] font-bold uppercase tracking-widest text-amber-400 bg-[#16181d]/80 border border-amber-500/60 rounded md:opacity-0 md:group-hover:opacity-100 focus:opacity-100 hover:bg-amber-500/10 transition">
                            + Buat Build
                        </a>
                    @endauth
                </div>
                @endforeach

            </div>
        </div>

    </div>

</body>
</html>