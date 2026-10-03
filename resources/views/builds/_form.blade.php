@php
    $input = 'w-full bg-[#11131a] border border-gray-700 rounded px-3 py-2 focus:outline-none focus:border-blue-500';
    $echoCosts = old('echo_costs', $build->echo_costs ?? []);
@endphp

<form method="POST" action="{{ $action }}" class="space-y-6 bg-[#1A1D2A] border border-gray-800 rounded-xl p-8" novalidate>
    @csrf
    @if ($method !== 'POST')
        @method($method)
    @endif

    <div>
        <label for="title" class="block text-sm font-semibold text-gray-300 mb-1">Judul Build</label>
        <input id="title" name="title" type="text" value="{{ old('title', $build->title) }}" class="{{ $input }}">
        <p class="mt-1 text-xs text-gray-500">3 - 50 karakter.</p>
        @include('partials.field-error', ['name' => 'title'])
    </div>

    <div>
        <label for="resonator_id" class="block text-sm font-semibold text-gray-300 mb-1">Resonator</label>
        <select id="resonator_id" name="resonator_id" class="{{ $input }}">
            <option value="">-- Pilih resonator --</option>
            @foreach ($resonators as $resonator)
                <option value="{{ $resonator->id }}" @selected(old('resonator_id', $build->resonator_id) == $resonator->id)>
                    {{ $resonator->name }} ({{ $resonator->element }})
                </option>
            @endforeach
        </select>
        @include('partials.field-error', ['name' => 'resonator_id'])
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label for="level" class="block text-sm font-semibold text-gray-300 mb-1">Level</label>
            <input id="level" name="level" type="number" value="{{ old('level', $build->level) }}" class="{{ $input }}">
            <p class="mt-1 text-xs text-gray-500">1 - 90.</p>
            @include('partials.field-error', ['name' => 'level'])
        </div>
        <div>
            <label for="sequence" class="block text-sm font-semibold text-gray-300 mb-1">Sequence (S)</label>
            <input id="sequence" name="sequence" type="number" value="{{ old('sequence', $build->sequence) }}" class="{{ $input }}">
            <p class="mt-1 text-xs text-gray-500">0 - 6.</p>
            @include('partials.field-error', ['name' => 'sequence'])
        </div>
    </div>

    <div>
        <label for="weapon_name" class="block text-sm font-semibold text-gray-300 mb-1">Senjata <span class="text-gray-500 font-normal">(opsional)</span></label>
        <input id="weapon_name" name="weapon_name" type="text" value="{{ old('weapon_name', $build->weapon_name) }}" class="{{ $input }}">
        @include('partials.field-error', ['name' => 'weapon_name'])
    </div>

    <div>
        <span class="block text-sm font-semibold text-gray-300 mb-1">Susunan Echo (cost)</span>
        <p class="text-xs text-gray-500 mb-2">Maksimal 5 echo, cost 1 / 3 / 4, total cost tidak boleh lebih dari 12. Slot kosong boleh dibiarkan.</p>
        <div class="grid grid-cols-5 gap-2">
            @for ($i = 0; $i < 5; $i++)
                <select name="echo_costs[]" aria-label="Echo slot {{ $i + 1 }}" data-test="echo-slot-{{ $i + 1 }}" class="{{ $input }}">
                    <option value="">-</option>
                    @foreach ([4, 3, 1] as $cost)
                        <option value="{{ $cost }}" @selected(($echoCosts[$i] ?? null) == $cost)>{{ $cost }}</option>
                    @endforeach
                </select>
            @endfor
        </div>
        <p class="mt-2 text-sm text-gray-400">Total cost: <span id="echo-total" class="font-bold">0</span> / 12</p>
        @include('partials.field-error', ['name' => 'echo_costs'])
    </div>

    <div>
        <label for="notes" class="block text-sm font-semibold text-gray-300 mb-1">Catatan <span class="text-gray-500 font-normal">(opsional)</span></label>
        <textarea id="notes" name="notes" rows="4" class="{{ $input }}">{{ old('notes', $build->notes) }}</textarea>
        <p class="mt-1 text-xs text-gray-500">Maksimal 500 karakter.</p>
        @include('partials.field-error', ['name' => 'notes'])
    </div>

    <div class="flex gap-3">
        <button type="submit" class="bg-blue-600 hover:bg-blue-500 font-bold py-2 px-6 rounded transition">{{ $submitLabel }}</button>
        <a href="{{ route('builds.index') }}" class="py-2 px-6 rounded border border-gray-700 hover:bg-gray-800 transition">Batal</a>
    </div>
</form>

<script>
    // Menampilkan total cost echo secara langsung; validasi sebenarnya tetap di server
    (function () {
        const slots = document.querySelectorAll('select[name="echo_costs[]"]');
        const total = document.getElementById('echo-total');
        const update = () => {
            const sum = Array.from(slots).reduce((acc, s) => acc + (parseInt(s.value, 10) || 0), 0);
            total.textContent = sum;
            total.className = 'font-bold ' + (sum > 12 ? 'text-red-400' : 'text-green-400');
        };
        slots.forEach(s => s.addEventListener('change', update));
        update();
    })();
</script>
