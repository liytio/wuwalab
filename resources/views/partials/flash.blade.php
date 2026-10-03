@if (session('success'))
    <div class="mb-6 bg-green-900/40 border border-green-600 text-green-300 px-4 py-3 rounded" role="alert" data-test="flash-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="mb-6 bg-red-900/40 border border-red-600 text-red-300 px-4 py-3 rounded" role="alert" data-test="flash-error">
        {{ session('error') }}
    </div>
@endif
