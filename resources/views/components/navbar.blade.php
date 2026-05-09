{{-- Sticky Navbar Component --}}
<header id="navbar"
        class="fixed top-0 left-0 right-0 z-50 bg-white transition-all duration-300 border-b border-gray-100">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 md:h-20">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group" aria-label="De Xpedisyen Home">
            {{-- SVG fallback (muncul kalau logo.png tidak ada) --}}
                <div id="logo-svg" class="w-10 h-10 bg-brand-navy rounded-xl flex items-center justify-center shadow-md group-hover:scale-105 transition-transform duration-200">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 8L12 3L4 8V16L12 21L20 16V8Z" stroke="#f97316" stroke-width="2" stroke-linejoin="round"/>
                        <path d="M12 3V21" stroke="#f97316" stroke-width="2"/>
                        <path d="M4 8L12 13L20 8" stroke="#f97316" stroke-width="2" stroke-linejoin="round"/>
                    </svg>
                </div>
                {{-- Logo gambar (muncul kalau logo.png tersedia) --}}
                <img src="{{ asset('images\logo.png') }}"
                    alt="De Xpedisyen Logo"
                    class="h-10 hidden"
                    id="logo-img"
                    onload="
                        this.classList.remove('hidden');
                        document.getElementById('logo-svg').classList.add('hidden');
                    "
                    onerror="this.classList.add('hidden')">

                <div class="flex flex-col leading-tight">
                    <span class="font-black text-brand-navy text-lg tracking-tight">De Xpedisyen</span>
                    <span class="text-[10px] text-brand-orange font-semibold tracking-widest uppercase hidden sm:block">Logistik Cerdas</span>
                </div>
            </a>

            {{-- Desktop Nav Links --}}
            <div class="hidden md:flex items-center gap-8">
                <a href="#hero" class="nav-link py-1">Home</a>
                <a href="#features" class="nav-link py-1">Fitur</a>
                <a href="#persona" class="nav-link py-1">Tentang</a>
                <a href="#contact" class="nav-link py-1">Kontak</a>
            </div>

            {{-- Desktop CTA --}}
            <div class="hidden md:flex items-center gap-4">
                <x-button variant="outline" onclick="document.querySelector('#contact').scrollIntoView({behavior:'smooth'})">
                    Hubungi Kami
                </x-button>
                <x-button variant="primary" onclick="document.querySelector('#contact').scrollIntoView({behavior:'smooth'})">
                    Mulai Sekarang
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </x-button>
            </div>

            {{-- Mobile Hamburger --}}
            <button id="menu-toggle"
                    class="md:hidden flex flex-col gap-1.5 p-2 rounded-lg hover:bg-gray-100 transition-colors"
                    aria-label="Toggle navigation menu"
                    aria-expanded="false">
                <span class="block w-6 h-0.5 bg-brand-navy transition-all duration-300 origin-center"></span>
                <span class="block w-6 h-0.5 bg-brand-navy transition-all duration-300"></span>
                <span class="block w-6 h-0.5 bg-brand-navy transition-all duration-300 origin-center"></span>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu"
             class="hidden md:hidden flex-col pb-4 border-t border-gray-100 mt-0 space-y-1"
             role="navigation"
             aria-label="Mobile navigation">
            <a href="#hero" class="block px-4 py-3 text-gray-700 hover:text-brand-navy hover:bg-brand-navy/5 rounded-xl font-medium transition-colors">
                Home
            </a>
            <a href="#features" class="block px-4 py-3 text-gray-700 hover:text-brand-navy hover:bg-brand-navy/5 rounded-xl font-medium transition-colors">
                Fitur
            </a>
            <a href="#persona" class="block px-4 py-3 text-gray-700 hover:text-brand-navy hover:bg-brand-navy/5 rounded-xl font-medium transition-colors">
                Tentang
            </a>
            <a href="#contact" class="block px-4 py-3 text-gray-700 hover:text-brand-navy hover:bg-brand-navy/5 rounded-xl font-medium transition-colors">
                Kontak
            </a>
            <div class="pt-3 px-4">
                <x-button variant="primary" class="w-full justify-center" onclick="document.getElementById('mobile-menu').classList.add('hidden'); document.querySelector('#contact').scrollIntoView({behavior:'smooth'})">
                    Mulai Sekarang
                </x-button>
            </div>
        </div>
    </nav>
</header>

{{-- Spacer for fixed navbar --}}
<div class="h-16 md:h-20"></div>
