@php
    // Menu utama: label => [nama route, pola route yang dianggap aktif]
    $menu = [
        'Karakter' => ['home', ['home', 'resonators.show']],
        'Tier List' => ['tier-list', ['tier-list']],
        'Team Tier List' => ['team-tier-list', ['team-tier-list']],
        'Senjata' => ['daftar-senjata', ['daftar-senjata']],
        'Echo System' => ['echo-system', ['echo-system']],
        'Panduan Pemula' => ['beginner-guide', ['beginner-guide']],
        'Build Komunitas' => ['builds.community', ['builds.community']],
    ];

    $userMenu = [
        'Build Saya' => ['builds.index', ['builds.index', 'builds.create', 'builds.edit']],
        'Tim Saya' => ['teams.index', ['teams.*']],
    ];

    $linkClass = fn (array $patterns) => request()->routeIs(...$patterns)
        ? 'text-amber-400 border-amber-400'
        : 'text-gray-400 border-transparent hover:text-gray-100';
@endphp

<nav class="bg-[#16181d] border-b border-gray-800 sticky top-0 z-50">
    <div class="flex items-stretch h-14 px-4 md:px-6 gap-6">
        <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0 text-gray-100 hover:text-white">
            <span class="text-amber-400 text-xs">◆</span>
            <span class="font-black tracking-[0.2em] uppercase text-sm">WutheringWK</span>
        </a>

        <ul class="flex items-stretch gap-1 overflow-x-auto flex-1 [scrollbar-width:none]">
            @foreach ($menu as $label => [$route, $patterns])
                <li class="flex">
                    <a href="{{ route($route) }}"
                        class="flex items-center px-3 border-b-2 text-xs font-semibold uppercase tracking-widest whitespace-nowrap transition {{ $linkClass($patterns) }}">
                        {{ $label }}
                    </a>
                </li>
            @endforeach
            <li class="flex">
                <a href="https://mapgenie.io/wuthering-waves" target="_blank" rel="noopener noreferrer"
                    class="flex items-center px-3 border-b-2 border-transparent text-xs font-semibold uppercase tracking-widest whitespace-nowrap text-gray-400 hover:text-gray-100 transition">
                    Peta ↗
                </a>
            </li>
            @auth
                {{-- Di layar kecil menu user ikut di daftar yang bisa di-scroll --}}
                @foreach ($userMenu as $label => [$route, $patterns])
                    <li class="flex md:hidden">
                        <a href="{{ route($route) }}"
                            class="flex items-center px-3 border-b-2 text-xs font-semibold uppercase tracking-widest whitespace-nowrap transition {{ $linkClass($patterns) }}">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
            @endauth
        </ul>

        <div class="flex items-stretch gap-1 shrink-0">
            @auth
                @foreach ($userMenu as $label => [$route, $patterns])
                    <a href="{{ route($route) }}"
                        class="hidden md:flex items-center px-3 border-b-2 text-xs font-semibold uppercase tracking-widest whitespace-nowrap transition {{ $linkClass($patterns) }}">
                        {{ $label }}
                    </a>
                @endforeach
                <span class="hidden lg:flex items-center px-3 text-xs text-gray-500 whitespace-nowrap">{{ auth()->user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" class="flex items-center">
                    @csrf
                    <button type="submit" class="px-3 py-1 text-xs font-bold uppercase tracking-widest text-red-400 border border-red-500/60 rounded hover:bg-red-500/10 transition">Logout</button>
                </form>
            @else
                <div class="flex items-center gap-2">
                    <a href="{{ route('register') }}" class="px-3 py-1 text-xs font-bold uppercase tracking-widest text-amber-400 border border-amber-500/60 rounded hover:bg-amber-500/10 transition">Register</a>
                    <a href="{{ route('login') }}" class="px-3 py-1 text-xs font-bold uppercase tracking-widest text-amber-400 hover:text-amber-300 transition">Sign In</a>
                </div>
            @endauth
        </div>
    </div>
</nav>
