<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Meta Tags --}}
    <title>{{ $title ?? 'De Xpedisyen — Logistik Cerdas untuk Indonesia' }}</title>
    <meta name="description" content="{{ $description ?? 'De Xpedisyen adalah platform logistik modern untuk UMKM dan profesional urban. Jemput paket otomatis, validasi data instan, dan kelola semua ekspedisi dalam satu dashboard.' }}">
    <meta name="keywords" content="logistik, pengiriman, UMKM, De Xpedisyen, jemput paket, validasi instan, ekspedisi">
    <meta name="author" content="De Xpedisyen">

    {{-- Open Graph --}}
    <meta property="og:title" content="{{ $title ?? 'De Xpedisyen — Logistik Cerdas untuk Indonesia' }}">
    <meta property="og:description" content="{{ $description ?? 'Platform logistik modern untuk UMKM dan profesional urban Indonesia.' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('images\favicon.png') }}">

    {{-- Google Fonts: Inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{ $head ?? '' }}
</head>
<body class="font-sans antialiased bg-white">

    {{-- Navbar --}}
    <x-navbar />

    {{-- Main content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <x-footer />

    {{-- Flash message toast --}}
    @if (session('success'))
        <div id="toast-success"
             class="fixed bottom-6 right-6 z-50 flex items-center gap-3 bg-green-600 text-white px-6 py-4 rounded-2xl shadow-2xl animate-fade-in-up max-w-sm">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            <span class="text-sm font-medium">{{ session('success') }}</span>
            <button onclick="document.getElementById('toast-success').remove()" class="ml-auto text-white/70 hover:text-white">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <script>
            setTimeout(() => {
                const toast = document.getElementById('toast-success');
                if (toast) toast.remove();
            }, 5000);
        </script>
    @endif

</body>
</html>
