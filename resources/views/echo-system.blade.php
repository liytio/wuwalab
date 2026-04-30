<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo System & Stats - WuwaLab</title>
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
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-500">Echo System & Stats</h1>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                Panduan mendalam mengenai sistem Gear di Wuthering Waves. Pahami cara kerja Echo, Stats, dan set bonus.
            </p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12 max-w-5xl">

        <section class="mb-12 bg-[#1A1D2A] p-8 rounded-xl border border-gray-800 shadow-lg">
            <h2 class="text-3xl font-bold text-white mb-6 border-b border-gray-700 pb-2 flex items-center">
                <span class="w-2 h-8 bg-yellow-500 mr-3 rounded"></span> Apa itu Echo?
            </h2>
            <div class="flex flex-col md:flex-row gap-8">
                <div class="md:w-3/5">
                    <p class="mb-4">
                        Di Wuthering Waves, monster yang kamu kalahkan dapat menjatuhkan **Echo**. Echo berfungsi sebagai "Gear" atau "Armor" yang memberikan status tambahan kepada Resonator milikmu.
                    </p>
                    <p class="mb-4">
                        Setiap Resonator dapat menggunakan hingga **5 Echo**. Echo yang diletakkan di slot pertama (Slot Utama) memungkinkanmu untuk berubah atau memanggil monster tersebut saat bertarung.
                    </p>
                    <div class="bg-yellow-900/20 border border-yellow-800 p-4 rounded-lg">
                        <p class="text-sm text-yellow-400 font-bold">💡 Tip: Naikkan Data Bank level kamu untuk meningkatkan peluang mendapatkan Echo dengan rarity yang lebih tinggi (Gold/Bintang 5).</p>
                    </div>
                </div>
                <div class="md:w-2/5">
                    <img src="{{ asset('images/guide_echo_intro.png') }}" alt="Echo Interface" class="rounded-lg border border-gray-700 shadow-xl">
                </div>
            </div>
        </section>

        <section class="mb-12 bg-[#1A1D2A] p-8 rounded-xl border border-gray-800 shadow-lg">
            <h2 class="text-3xl font-bold text-white mb-6 border-b border-gray-700 pb-2 flex items-center">
                <span class="w-2 h-8 bg-blue-500 mr-3 rounded"></span> Echo Cost (Kapasitas)
            </h2>
            <p class="mb-6">Setiap Resonator memiliki batasan total **Cost 12**. Kamu harus membagi 5 slot Echo agar total cost-nya tidak melebihi batas ini.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-900 p-5 rounded-lg border border-gray-800 text-center">
                    <span class="text-3xl font-black text-red-500 mb-2 block">4 Cost</span>
                    <h4 class="font-bold text-white mb-2">Overlord / Calamity</h4>
                    <p class="text-xs text-gray-400">Biasanya bos besar. Memberikan stat Main yang sangat masif.</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg border border-gray-800 text-center">
                    <span class="text-3xl font-black text-purple-500 mb-2 block">3 Cost</span>
                    <h4 class="font-bold text-white mb-2">Elite Monsters</h4>
                    <p class="text-xs text-gray-400">Monster berukuran sedang. Penting untuk mendapatkan Element DMG Bonus.</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg border border-gray-800 text-center">
                    <span class="text-3xl font-black text-green-500 mb-2 block">1 Cost</span>
                    <h4 class="font-bold text-white mb-2">Common Monsters</h4>
                    <p class="text-xs text-gray-400">Monster kecil di open world. Memberikan stat dasar seperti ATK% atau HP%.</p>
                </div>
            </div>
            <p class="mt-6 text-center text-sm font-bold text-blue-400">Meta Populer: 4-3-3-1-1 (Total 12 Cost)</p>
        </section>

        <section class="mb-12 bg-[#1A1D2A] p-8 rounded-xl border border-gray-800 shadow-lg">
            <h2 class="text-3xl font-bold text-white mb-6 border-b border-gray-700 pb-2 flex items-center">
                <span class="w-2 h-8 bg-orange-500 mr-3 rounded"></span> Stats & Tuning
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h4 class="text-xl font-bold text-white mb-4">Main Stats Pool</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex justify-between border-b border-gray-800 pb-1"><span class="text-red-400">4-Cost:</span> <span>CRIT Rate, CRIT DMG, ATK%, Healing Bonus</span></li>
                        <li class="flex justify-between border-b border-gray-800 pb-1"><span class="text-purple-400">3-Cost:</span> <span>Element DMG Bonus, ATK%, Energy Regen</span></li>
                        <li class="flex justify-between border-b border-gray-800 pb-1"><span class="text-green-400">1-Cost:</span> <span>ATK%, HP%, DEF%</span></li>
                    </ul>
                </div>
                <div class="bg-gray-900 p-6 rounded-lg border border-gray-800">
                    <h4 class="text-xl font-bold text-white mb-2">Echo Tuning (Substats)</h4>
                    <p class="text-sm mb-4">Setelah meningkatkan level Echo setiap 5 level, kamu membutuhkan **Tuner** untuk membuka slot Substat (Maksimal 5 slot untuk Echo Gold).</p>
                    <img src="{{ asset('images/guide_echo_stats.png') }}" alt="Substats Tuning" class="w-full rounded border border-gray-700">
                </div>
            </div>
        </section>

        <section class="mb-12 bg-[#1A1D2A] p-8 rounded-xl border border-gray-800 shadow-lg text-center">
            <h2 class="text-3xl font-bold text-white mb-4 border-b border-gray-700 pb-4 flex items-center justify-center">
                <span class="w-2 h-8 bg-purple-500 mr-3 rounded"></span> Sonata Effects (Set Bonus)
            </h2>
            <p class="mb-8 max-w-2xl mx-auto">Gunakan Echo dari set yang sama untuk mengaktifkan bonus tambahan. Biasanya aktif pada jumlah **2-Set** dan **5-Set**.</p>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="p-4 bg-gray-900 rounded-lg border border-gray-800 hover:border-purple-500 transition">
                    <p class="font-bold text-blue-400">Sierra Gale</p>
                    <p class="text-xs">Aero DMG Bonus</p>
                </div>
                <div class="p-4 bg-gray-900 rounded-lg border border-gray-800 hover:border-purple-500 transition">
                    <p class="font-bold text-purple-400">Void Thunder</p>
                    <p class="text-xs">Electro DMG Bonus</p>
                </div>
                <div class="p-4 bg-gray-900 rounded-lg border border-gray-800 hover:border-purple-500 transition">
                    <p class="font-bold text-red-400">Molten Rift</p>
                    <p class="text-xs">Fusion DMG Bonus</p>
                </div>
                <div class="p-4 bg-gray-900 rounded-lg border border-gray-800 hover:border-purple-500 transition">
                    <p class="font-bold text-green-400">Rejuvenating Glow</p>
                    <p class="text-xs">Healing Bonus</p>
                </div>
            </div>
        </section>

    </div>

</body>
</html>