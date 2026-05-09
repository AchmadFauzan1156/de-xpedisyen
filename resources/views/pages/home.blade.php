<x-layouts.app
    title="De Xpedisyen Logistik Cerdas untuk Indonesia"
    description="De Xpedisyen adalah platform logistik modern untuk UMKM dan profesional urban. Jemput paket otomatis, validasi data instan, dan kelola semua ekspedisi dalam satu dashboard.">

{{-- ═══════════════════════════════════════════════════════════
     HERO SECTION
═══════════════════════════════════════════════════════════ --}}
<section id="hero" class="hero-gradient text-white overflow-hidden relative min-h-[90vh] flex items-center">

    {{-- Background decorative blobs --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-brand-orange/10 rounded-full blur-3xl animate-pulse-soft"></div>
        <div class="absolute bottom-0 -left-20 w-80 h-80 bg-blue-400/10 rounded-full blur-3xl animate-pulse-soft animate-delay-300"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-white/[0.02] rounded-full blur-2xl"></div>
    </div>

    {{-- Animated grid lines --}}
    <div class="absolute inset-0 opacity-[0.04]"
         style="background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px); background-size: 60px 60px;">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 relative z-10 w-full">
        <div class="grid lg:grid-cols-2 gap-14 items-center">

            {{-- Left: Copy --}}
            <div class="space-y-8">
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-2 text-sm font-medium text-orange-300 backdrop-blur-sm animate-fade-in">
                    <span class="w-2 h-2 bg-brand-orange rounded-full animate-pulse"></span>
                    Platform Logistik Terpercaya untuk Indonesia
                </div>

                {{-- Headline --}}
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black leading-[1.1] tracking-tight animate-slide-in-left">
                    Kirim Lebih<br>
                    <span class="text-brand-orange">Cepat,</span> Kelola<br>
                    <span class="text-brand-orange">Lebih Mudah.</span>
                </h1>

                {{-- Subheading --}}
                <p class="text-lg sm:text-xl text-blue-200 max-w-xl leading-relaxed animate-fade-in animate-delay-200">
                    De Xpedisyen hadir untuk UMKM dan profesional urban yang ingin pengiriman otomatis, validasi instan, dan kontrol penuh atas setiap paket dalam satu platform cerdas.
                </p>

                {{-- CTA Buttons --}}
                <div class="flex flex-wrap items-center gap-4 animate-fade-in animate-delay-300">
                    <x-button variant="primary"
                              onclick="document.querySelector('#contact').scrollIntoView({behavior:'smooth'})"
                              class="!px-8 !py-4 !text-base shadow-2xl shadow-orange-500/30">
                        Mulai Gratis Sekarang
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </x-button>
                    <x-button variant="ghost"
                              onclick="document.querySelector('#features').scrollIntoView({behavior:'smooth'})"
                              class="!text-white !border-white/30 hover:!bg-white/10 !px-8 !py-4 !text-base border-2">
                        Lihat Fitur
                    </x-button>
                </div>

                {{-- Stats --}}
                <div class="grid grid-cols-3 gap-6 pt-4 border-t border-white/10 animate-fade-in animate-delay-400">
                    <div>
                        <div class="text-3xl font-black text-brand-orange">10K+</div>
                        <div class="text-sm text-blue-300 mt-1">Paket Terkirim</div>
                    </div>
                    <div>
                        <div class="text-3xl font-black text-brand-orange">500+</div>
                        <div class="text-sm text-blue-300 mt-1">UMKM Aktif</div>
                    </div>
                    <div>
                        <div class="text-3xl font-black text-brand-orange">99%</div>
                        <div class="text-sm text-blue-300 mt-1">Tingkat Akurasi</div>
                    </div>
                </div>
            </div>

            {{-- Right: Visual Dashboard Card --}}
            <div class="hidden lg:flex justify-center items-center animate-slide-in-right">
                <div class="relative">
                    {{-- Main card --}}
                    <div class="glass-card p-6 w-96 shadow-2xl">
                        {{-- Card header --}}
                        <div class="flex items-center justify-between mb-5">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-brand-orange rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                    </svg>
                                </div>
                                <span class="font-bold text-white text-sm">Dashboard Pengiriman</span>
                            </div>
                            <span class="bg-green-500/20 text-green-400 text-xs font-semibold px-3 py-1 rounded-full border border-green-500/30">Live</span>
                        </div>

                        {{-- Tracking items --}}
                        <div class="space-y-3 mb-5">
                            @foreach([
                                ['#DX-4821', 'Jakarta → Surabaya', 'Dalam Perjalanan', 'orange'],
                                ['#DX-4820', 'Bandung → Bali', 'Terkirim', 'green'],
                                ['#DX-4819', 'Medan → Makassar', 'Diproses', 'blue'],
                            ] as $item)
                            <div class="flex items-center justify-between bg-white/5 rounded-xl p-3 border border-white/10">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-white text-xs font-bold">{{ $item[0] }}</div>
                                        <div class="text-white/50 text-[10px]">{{ $item[1] }}</div>
                                    </div>
                                </div>
                                <span class="text-{{ $item[3] }}-400 text-[10px] font-semibold bg-{{ $item[3] }}-500/20 px-2 py-1 rounded-full">{{ $item[2] }}</span>
                            </div>
                            @endforeach
                        </div>

                        {{-- Progress bar --}}
                        <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                            <div class="flex justify-between text-xs text-white/70 mb-2">
                                <span>Efisiensi Hari Ini</span>
                                <span class="text-green-400 font-bold">94%</span>
                            </div>
                            <div class="w-full bg-white/10 rounded-full h-2">
                                <div class="bg-gradient-to-r from-brand-orange to-orange-400 h-2 rounded-full" style="width: 94%"></div>
                            </div>
                        </div>
                    </div>

                    {{-- Floating notification cards --}}
                    <div class="absolute -top-6 -right-8 glass-card px-4 py-3 text-xs text-white animate-float shadow-xl">
                        <div class="flex items-center gap-2">
                            <span class="text-green-400 text-lg">✓</span>
                            <div>
                                <div class="font-bold">Paket Tiba!</div>
                                <div class="text-white/60">2 menit lalu</div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -bottom-4 -left-8 glass-card px-4 py-3 text-xs text-white animate-float animate-delay-300 shadow-xl">
                        <div class="flex items-center gap-2">
                            <span class="text-brand-orange text-lg">📦</span>
                            <div>
                                <div class="font-bold">3 paket dijemput</div>
                                <div class="text-white/60">otomatis terjadwal</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Wave bottom --}}
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none" class="w-full h-12 sm:h-16" fill="white">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z"/>
        </svg>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     TRUSTED BY (Logos / Social Proof Bar)
═══════════════════════════════════════════════════════════ --}}
<section class="py-12 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-sm text-gray-400 font-medium tracking-widest uppercase mb-8" data-reveal>
            Dipercaya oleh berbagai ekspedisi & UMKM Indonesia
        </p>
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-14 opacity-50 grayscale" data-reveal data-delay="100">
            @foreach(['JNE', 'J&T', 'SiCepat', 'Anteraja', 'TIKI', 'Ninja Xpress'] as $brand)
            <span class="font-black text-gray-700 text-sm sm:text-base tracking-tight">{{ $brand }}</span>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     FEATURES SECTION
═══════════════════════════════════════════════════════════ --}}
<section id="features" class="section-wrapper bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section header --}}
        <div class="text-center mb-16" data-reveal>
            <span class="inline-block text-brand-orange font-semibold text-sm tracking-widest uppercase mb-3">Keunggulan Kami</span>
            <h2 class="section-title">Fitur Unggulan De Xpedisyen</h2>
            <p class="section-subtitle">
                Semua yang Anda butuhkan untuk pengiriman modern terintegrasi dalam satu platform cerdas.
            </p>
        </div>

        {{-- Feature grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @php
            $features = [
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>',
                    'title' => 'Penjemputan Otomatis',
                    'desc' => 'Jadwalkan jemput paket secara otomatis berdasarkan rutinitas bisnis Anda. Tidak perlu telepon, tidak perlu antre.',
                    'delay' => '0',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>',
                    'title' => 'Validasi Data Instan',
                    'desc' => 'Verifikasi alamat, nomor resi, dan status pengiriman secara real-time. Kesalahan input terdeteksi sebelum paket dikirim.',
                    'delay' => '100',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>',
                    'title' => 'Dashboard Terpadu',
                    'desc' => 'Pantau semua ekspedisi dalam satu layar. Statistik, riwayat, dan performa pengiriman tersaji dengan visualisasi yang jelas.',
                    'delay' => '200',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>',
                    'title' => 'Tracking Real-Time',
                    'desc' => 'Notifikasi otomatis ke pembeli dan Anda di setiap perubahan status pengiriman dari gudang sampai pintu rumah.',
                    'delay' => '300',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>',
                    'title' => 'Multi-Ekspedisi',
                    'desc' => 'Kelola JNE, J&T, SiCepat, Anteraja, dan lebih banyak ekspedisi sekaligus. Bandingkan harga dan pilih yang terbaik.',
                    'delay' => '400',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>',
                    'title' => 'Akses Mobile',
                    'desc' => 'Kelola pengiriman kapan saja dan di mana saja lewat aplikasi mobile yang ringan dan intuitif. Bisnis tidak pernah berhenti.',
                    'delay' => '500',
                ],
            ];
            @endphp

            @foreach($features as $feat)
            <div class="card group cursor-default" data-reveal data-delay="{{ $feat['delay'] }}">
                <div class="feature-icon group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-7 h-7 text-brand-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        {!! $feat['icon'] !!}
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-brand-navy mb-3">{{ $feat['title'] }}</h3>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $feat['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     PROBLEM / SOLUTION SECTION
═══════════════════════════════════════════════════════════ --}}
<section id="problem-solution" class="section-wrapper bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-reveal>
            <span class="inline-block text-brand-orange font-semibold text-sm tracking-widest uppercase mb-3">Masalah & Solusi</span>
            <h2 class="section-title">Pengiriman Seharusnya<br>Tidak Serumit Ini</h2>
            <p class="section-subtitle">
                Kami mendengar keluhan UMKM dan penjual online setiap hari. Inilah yang kami ubah.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Problems --}}
            <div data-reveal>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-red-100 rounded-xl flex items-center justify-center">
                        <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Masalah yang Sering Terjadi</h3>
                </div>
                <div class="space-y-4">
                    @foreach([
                        'Harus telepon ekspedisi satu per satu untuk minta jemput paket',
                        'Salah input alamat baru ketahuan saat paket sudah terlambat',
                        'Tidak tahu status pengiriman sampai pelanggan komplain duluan',
                        'Data pengiriman berserakan di banyak aplikasi ekspedisi berbeda',
                        'Ongkos kirim tidak bisa dibandingkan, selalu pakai yang sama',
                    ] as $prob)
                    <div class="flex items-start gap-3 p-4 bg-red-50 rounded-xl border border-red-100">
                        <div class="w-5 h-5 bg-red-500 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </div>
                        <span class="text-gray-700 text-sm">{{ $prob }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Solutions --}}
            <div data-reveal data-delay="200">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center">
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Solusi De Xpedisyen</h3>
                </div>
                <div class="space-y-4">
                    @foreach([
                        'Jemput otomatis terjadwal — tanpa telepon, tanpa repot',
                        'Validasi alamat real-time sebelum paket dikirimkan',
                        'Notifikasi proaktif ke Anda dan pembeli di setiap status',
                        'Satu dashboard untuk semua ekspedisi, semua data terpusat',
                        'Perbandingan ongkir instan, pilih harga terbaik setiap saat',
                    ] as $sol)
                    <div class="flex items-start gap-3 p-4 bg-green-50 rounded-xl border border-green-100">
                        <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-gray-700 text-sm font-medium">{{ $sol }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     PERSONA SECTION (Siapa yang Kami Bantu)
═══════════════════════════════════════════════════════════ --}}
<section id="persona" class="section-wrapper bg-brand-navy relative overflow-hidden">
    {{-- Decorative blobs --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-brand-orange/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-blue-400/5 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        {{-- Header --}}
        <div class="text-center mb-16" data-reveal>
            <span class="inline-block text-brand-orange font-semibold text-sm tracking-widest uppercase mb-3">Untuk Siapa</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Siapa yang Kami Bantu?</h2>
            <p class="text-lg text-blue-200 max-w-2xl mx-auto">
                De Xpedisyen dirancang untuk dua segmen utama yang paling membutuhkan solusi logistik cerdas.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            {{-- Persona 1: UMKM --}}
            <div class="glass-card p-8 group hover:bg-white/15 transition-all duration-300" data-reveal>
                {{-- Avatar/icon --}}
                <div class="w-16 h-16 bg-brand-orange/20 border border-brand-orange/30 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                {{-- <div class="inline-flex items-center gap-2 bg-brand-orange/20 border border-brand-orange/30 rounded-full px-3 py-1 text-xs font-bold text-brand-orange uppercase tracking-wider mb-4">
                    👔 Persona 1
                </div> --}}
                <h3 class="text-2xl font-bold text-white mb-3">UMKM & Penjual Online</h3>
                <p class="text-blue-200 text-sm leading-relaxed mb-6">
                    Anda mengelola toko online di Tokopedia, Shopee, atau Instagram. Setiap hari puluhan pesanan masuk, tapi mengurus pengiriman satu per satu menyita waktu berharga Anda.
                </p>
                <ul class="space-y-3 mb-6">
                    @foreach(['Kirim 10–200 paket per hari', 'Butuh efisiensi dan penghematan ongkir', 'Pelanggan menuntut update status cepat', 'Modal terbatas, perlu solusi terjangkau'] as $pain)
                    <li class="flex items-center gap-2 text-sm text-blue-100">
                        <span class="w-1.5 h-1.5 bg-brand-orange rounded-full shrink-0"></span>
                        {{ $pain }}
                    </li>
                    @endforeach
                </ul>
                <div class="pt-5 border-t border-white/10">
                    <p class="text-brand-orange font-semibold text-sm">💡 De Xpedisyen menghemat rata-rata 2 jam/hari untuk UMKM</p>
                </div>
            </div>

            {{-- Persona 2: Profesional Urban --}}
            <div class="glass-card p-8 group hover:bg-white/15 transition-all duration-300" data-reveal data-delay="200">
                <div class="w-16 h-16 bg-blue-400/20 border border-blue-400/30 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                {{-- <div class="inline-flex items-center gap-2 bg-blue-400/20 border border-blue-400/30 rounded-full px-3 py-1 text-xs font-bold text-blue-300 uppercase tracking-wider mb-4">
                    🏙️ Persona 2
                </div> --}}
                <h3 class="text-2xl font-bold text-white mb-3">Profesional Urban</h3>
                <p class="text-blue-200 text-sm leading-relaxed mb-6">
                    Anda sibuk bekerja tapi sering kirim barang dokumen, kado, barang belanjaan. Anda ingin pengiriman yang bisa dipercaya, bisa dilacak, dan tidak makan waktu.
                </p>
                <ul class="space-y-3 mb-6">
                    @foreach(['Jadwal padat, tidak ada waktu antre', 'Kirim dokumen & hadiah dengan aman', 'Ingin notifikasi tanpa harus cek manual', 'Lebih suka semua di satu aplikasi'] as $pain)
                    <li class="flex items-center gap-2 text-sm text-blue-100">
                        <span class="w-1.5 h-1.5 bg-blue-300 rounded-full shrink-0"></span>
                        {{ $pain }}
                    </li>
                    @endforeach
                </ul>
                <div class="pt-5 border-t border-white/10">
                    <p class="text-blue-300 font-semibold text-sm">💡 Tracking otomatis Anda tahu status paket tanpa perlu tanya</p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     HOW IT WORKS
═══════════════════════════════════════════════════════════ --}}
<section class="section-wrapper bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-reveal>
            <span class="inline-block text-brand-orange font-semibold text-sm tracking-widest uppercase mb-3">Cara Kerja</span>
            <h2 class="section-title">3 Langkah Mulai Kirim</h2>
            <p class="section-subtitle">Mulai dari daftar sampai paket terkirim semua bisa selesai dalam 5 menit.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 relative">
            {{-- Connector line (desktop only) --}}
            <div class="hidden md:block absolute top-12 left-1/3 right-1/3 h-0.5 bg-gradient-to-r from-brand-navy to-brand-orange z-0"></div>

            @foreach([
                ['01', 'Daftar & Hubungkan', 'Buat akun gratis dan hubungkan toko atau akun ekspedisi Anda dalam hitungan menit.', 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z', '0'],
                ['02', 'Buat Pengiriman', 'Input data paket, pilih ekspedisi terbaik berdasarkan harga dan estimasi tiba.', 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4', '100'],
                ['03', 'Lacak & Selesai', 'Pantau paket secara real-time. Notifikasi otomatis dikirim ke Anda dan penerima.', 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z', '200'],
            ] as [$num, $title, $desc, $icon, $delay])
            <div class="relative z-10 flex flex-col items-center text-center" data-reveal data-delay="{{ $delay }}">
                <div class="w-24 h-24 bg-white border-4 border-brand-navy rounded-2xl flex items-center justify-center mb-6 shadow-xl group hover:border-brand-orange transition-colors duration-300">
                    <svg class="w-10 h-10 text-brand-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $icon }}"/>
                    </svg>
                </div>
                <div class="absolute -top-3 -right-3 w-8 h-8 bg-brand-orange text-white rounded-full flex items-center justify-center text-xs font-black shadow-md">{{ $num }}</div>
                <h3 class="text-xl font-bold text-brand-navy mb-3">{{ $title }}</h3>
                <p class="text-gray-500 text-sm leading-relaxed max-w-xs">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     TESTIMONIALS
═══════════════════════════════════════════════════════════ --}}
<section class="section-wrapper bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14" data-reveal>
            <span class="inline-block text-brand-orange font-semibold text-sm tracking-widest uppercase mb-3">Testimoni</span>
            <h2 class="section-title">Yang Mereka Katakan</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @php
            $testimonials = [
                [
                    'name' => 'Rina Septiani',
                    'role' => 'Pemilik Toko Fashion Online',
                    'city' => 'Bandung',
                    'avatar' => 'RS',
                    'text' => 'Sebelum pakai De Xpedisyen, saya habiskan sekitar 30 menit tiap pagi hanya untuk input data pengiriman manual. Sekarang? 10 menit sudah selesai dan paket langsung dijemput. Luar biasa!',
                    'rating' => 5,
                    'delay' => '0',
                ],
                [
                    'name' => 'Budi Hartono',
                    'role' => 'Manajer Operasional',
                    'city' => 'Jakarta',
                    'avatar' => 'BH',
                    'text' => 'Dashboard-nya sangat membantu kami memantau ribuan pengiriman sekaligus. Notifikasi real-time mengurangi komplain pelanggan sampai 60%. Rekomendasi banget!',
                    'rating' => 5,
                    'delay' => '100',
                ],
                [
                    'name' => 'Siti Rahayu',
                    'role' => 'Reseller Kosmetik',
                    'city' => 'Surabaya',
                    'avatar' => 'SR',
                    'text' => 'Fitur perbandingan harga ekspedisinya menghemat pengeluaran ongkir saya sampai 30% setiap bulan. Untuk UMKM seperti saya, ini sangat berarti.',
                    'rating' => 5,
                    'delay' => '200',
                ],
            ];
            @endphp

            @foreach($testimonials as $t)
            <div class="card" data-reveal data-delay="{{ $t['delay'] }}">
                {{-- Stars --}}
                <div class="flex gap-1 mb-4">
                    @for($i = 0; $i < $t['rating']; $i++)
                    <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>

                {{-- Quote --}}
                <blockquote class="text-gray-600 text-sm leading-relaxed mb-6 italic">
                    "{{ $t['text'] }}"
                </blockquote>

                {{-- Author --}}
                <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
                    <div class="w-10 h-10 bg-brand-navy rounded-full flex items-center justify-center text-white text-xs font-bold shrink-0">
                        {{ $t['avatar'] }}
                    </div>
                    <div>
                        <div class="font-bold text-gray-900 text-sm">{{ $t['name'] }}</div>
                        <div class="text-xs text-gray-400">{{ $t['role'] }} · {{ $t['city'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     CTA BANNER
═══════════════════════════════════════════════════════════ --}}
<section class="section-wrapper hero-gradient text-white overflow-hidden relative">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-20 -right-20 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-10 -left-10 w-60 h-60 bg-brand-orange/10 rounded-full blur-2xl"></div>
    </div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-reveal>
        <h2 class="text-3xl md:text-5xl font-black mb-4 leading-tight">
            Siap Kirim Lebih Cerdas?
        </h2>
        <p class="text-blue-200 text-lg mb-8 max-w-2xl mx-auto">
            Bergabunglah dengan ratusan UMKM yang sudah merasakan manfaat De Xpedisyen. Gratis daftar, no kartu kredit.
        </p>
        <x-button variant="primary"
                  onclick="document.querySelector('#contact').scrollIntoView({behavior:'smooth'})"
                  class="!px-10 !py-4 !text-base shadow-2xl shadow-orange-500/40">
            Mulai Gratis Sekarang
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
            </svg>
        </x-button>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     CONTACT SECTION
═══════════════════════════════════════════════════════════ --}}
<section id="contact" class="section-wrapper bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-start">

            {{-- Left: Info --}}
            <div data-reveal>
                <span class="inline-block text-brand-orange font-semibold text-sm tracking-widest uppercase mb-3">Kontak</span>
                <h2 class="section-title !mb-4">Ada Pertanyaan?<br>Kami Siap Bantu.</h2>
                <p class="text-gray-500 text-lg mb-8 leading-relaxed">
                    Tim kami siap membantu Anda memulai perjalanan logistik yang lebih cerdas. Kirim pesan dan kami akan merespons dalam 24 jam kerja.
                </p>

                <div class="space-y-6">
                    {{-- Email --}}
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-brand-navy rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900">Email</div>
                            <a href="mailto:Yanto@gmail.com" class="text-brand-orange hover:underline text-sm">Yanto@gmail.com</a>
                        </div>
                    </div>
                    {{-- WhatsApp --}}
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347zM12 0C5.373 0 0 5.373 0 12c0 2.125.558 4.115 1.532 5.84L.044 23.956l6.237-1.476A11.947 11.947 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.822 9.822 0 01-5.023-1.376l-.36-.214-3.733.883.929-3.621-.235-.374A9.825 9.825 0 012.182 12C2.182 6.576 6.576 2.182 12 2.182S21.818 6.576 21.818 12 17.424 21.818 12 21.818z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900">WhatsApp</div>
                            <a href="https://wa.me/6285951444505" target="_blank" rel="noopener noreferrer" class="text-brand-orange hover:underline text-sm">+62 859-5144-4505</a>
                        </div>
                    </div>
                    {{-- Location --}}
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-brand-orange rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900">Kantor</div>
                            <span class="text-gray-500 text-sm">Gunung Pati, Semarang</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Form --}}
            <div data-reveal data-delay="200">
                <div class="bg-white rounded-3xl shadow-xl p-8 border border-gray-100">
                    <h3 class="text-xl font-bold text-brand-navy mb-6">Kirim Pesan</h3>

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-5" id="contact-form">
                        @csrf

                        {{-- Name --}}
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <input type="text"
                                   id="name"
                                   name="name"
                                   value="{{ old('name') }}"
                                   placeholder="Contoh: Budi Santoso"
                                   class="form-input @error('name') error @enderror"
                                   autocomplete="name">
                            @error('name')
                                <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                Alamat Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email"
                                   id="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   placeholder="email@anda.com"
                                   class="form-input @error('email') error @enderror"
                                   autocomplete="email">
                            @error('email')
                                <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Subject --}}
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">
                                Subjek <span class="text-red-500">*</span>
                            </label>
                            <input type="text"
                                   id="subject"
                                   name="subject"
                                   value="{{ old('subject') }}"
                                   placeholder="Contoh: Ingin bergabung sebagai mitra UMKM"
                                   class="form-input @error('subject') error @enderror">
                            @error('subject')
                                <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Message --}}
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                                Pesan <span class="text-red-500">*</span>
                            </label>
                            <textarea id="message"
                                      name="message"
                                      rows="5"
                                      placeholder="Ceritakan kebutuhan logistik Anda..."
                                      class="form-input resize-none @error('message') error @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Submit --}}
                        <x-button type="submit"
                                  variant="primary"
                                  class="w-full justify-center !py-4 !text-base"
                                  id="submit-btn">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            Kirim Pesan
                        </x-button>

                        <p class="text-center text-xs text-gray-400 mt-3">
                            Dengan mengirim pesan, Anda menyetujui
                            <a href="#" class="text-brand-orange hover:underline">Kebijakan Privasi</a> kami.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</x-layouts.app>
