@php
    $input = 'w-full bg-[#11131a] border border-gray-700 rounded px-3 py-2 focus:outline-none focus:border-blue-500';
@endphp

<form method="POST" action="{{ $action }}" class="space-y-6 bg-[#1A1D2A] border border-gray-800 rounded-xl p-8" novalidate>
    @csrf
    @if ($method !== 'POST')
        @method($method)
    @endif

    <div>
        <label for="name" class="block text-sm font-semibold text-gray-300 mb-1">Nama Tim</label>
        <input id="name" name="name" type="text" value="{{ old('name', $team->name) }}" class="{{ $input }}">
        <p class="mt-1 text-xs text-gray-500">3 - 40 karakter.</p>
        @include('partials.field-error', ['name' => 'name'])
    </div>

    <p class="text-sm text-gray-400">Pilih tepat 3 resonator yang berbeda.</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach (['member1_id' => 'Anggota 1', 'member2_id' => 'Anggota 2', 'member3_id' => 'Anggota 3'] as $field => $label)
            <div>
                <label for="{{ $field }}" class="block text-sm font-semibold text-gray-300 mb-1">{{ $label }}</label>
                <select id="{{ $field }}" name="{{ $field }}" class="{{ $input }}">
                    <option value="">-- Pilih --</option>
                    @foreach ($resonators as $resonator)
                        <option value="{{ $resonator->id }}" @selected(old($field, $team->$field) == $resonator->id)>{{ $resonator->name }}</option>
                    @endforeach
                </select>
                @include('partials.field-error', ['name' => $field])
            </div>
        @endforeach
    </div>

    <div class="flex gap-3">
        <button type="submit" class="bg-blue-600 hover:bg-blue-500 font-bold py-2 px-6 rounded transition">{{ $submitLabel }}</button>
        <a href="{{ route('teams.index') }}" class="py-2 px-6 rounded border border-gray-700 hover:bg-gray-800 transition">Batal</a>
    </div>
</form>
