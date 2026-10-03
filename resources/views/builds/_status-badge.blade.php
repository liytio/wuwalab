@php
    $colors = [
        'draft' => 'bg-gray-700 text-gray-200',
        'published' => 'bg-green-700 text-green-100',
        'archived' => 'bg-yellow-800 text-yellow-100',
    ];
@endphp
<span class="text-xs font-bold uppercase px-2 py-1 rounded {{ $colors[$status] ?? 'bg-gray-700' }}" data-test="status-badge">{{ $status }}</span>
