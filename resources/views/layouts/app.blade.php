<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - WutheringWK</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#11131a] text-white font-sans antialiased min-h-screen">

    @include('partials.nav')

    <main class="container mx-auto px-4 py-10 @yield('width', 'max-w-5xl')">
        @include('partials.flash')
        @yield('content')
    </main>

</body>
</html>
