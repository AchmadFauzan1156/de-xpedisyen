{{-- Footer Component --}}
<footer class="bg-gray-950 text-white">

    {{-- Main Footer Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

            {{-- Left: Logo + Tagline --}}
            <div class="space-y-5">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group" aria-label="De Xpedisyen Home">

                    {{-- SVG fallback --}}
                    <div id="footer-logo-svg" class="w-10 h-10 bg-brand-navy rounded-xl flex items-center justify-center shadow-md group-hover:scale-105 transition-transform duration-200">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 8L12 3L4 8V16L12 21L20 16V8Z" stroke="#f97316" stroke-width="2" stroke-linejoin="round"/>
                            <path d="M12 3V21" stroke="#f97316" stroke-width="2"/>
                            <path d="M4 8L12 13L20 8" stroke="#f97316" stroke-width="2" stroke-linejoin="round"/>
                        </svg>
                    </div>

                    {{-- Logo gambar --}}
                    <img src="{{ asset('images/logo.png') }}"
                        alt="De Xpedisyen Logo"
                        class="h-10 hidden"
                        id="footer-logo-img"
                        onload="
                            this.classList.remove('hidden');
                            document.getElementById('footer-logo-svg').classList.add('hidden');
                        "
                        onerror="this.classList.add('hidden')">

                    <span class="font-black text-xl text-white tracking-tight">De Xpedisyen</span>
                </a>
                <p class="text-gray-400 text-sm leading-relaxed max-w-xs">
                    Logistik Cerdas untuk Indonesia. Platform terpadu untuk UMKM dan profesional urban yang ingin pengiriman lebih cepat, akurat, dan efisien.
                </p>
                <p class="text-brand-orange font-semibold text-sm tracking-wider uppercase">
                    Logistik Cerdas untuk Indonesia
                </p>

                {{-- Contact Info --}}
                <div class="space-y-2 text-sm text-gray-400">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-brand-orange shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>Yanto@gmail.com</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-brand-orange shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span>+62 859-5144-4505</span>
                    </div>
                </div>
            </div>

            {{-- Center: Quick Nav --}}
            <div>
                <h3 class="text-white font-bold text-lg mb-6">Navigasi</h3>
                <nav class="space-y-3" aria-label="Footer navigation">
                    <a href="#hero" class="block text-gray-400 hover:text-brand-orange transition-colors duration-200 text-sm">
                        Home
                    </a>
                    <a href="#features" class="block text-gray-400 hover:text-brand-orange transition-colors duration-200 text-sm">
                        Fitur Unggulan
                    </a>
                    <a href="#problem-solution" class="block text-gray-400 hover:text-brand-orange transition-colors duration-200 text-sm">
                        Masalah & Solusi
                    </a>
                    <a href="#persona" class="block text-gray-400 hover:text-brand-orange transition-colors duration-200 text-sm">
                        Siapa yang Kami Bantu
                    </a>
                    <a href="#contact" class="block text-gray-400 hover:text-brand-orange transition-colors duration-200 text-sm">
                        Hubungi Kami
                    </a>
                </nav>
            </div>

            {{-- Right: Social Media --}}
            <div>
                <h3 class="text-white font-bold text-lg mb-6">Ikuti Kami</h3>
                <div class="flex gap-4 mb-6">
                    {{-- Instagram --}}
                    <a href="https://instagram.com/dexpedisyen"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="w-11 h-11 bg-gray-800 hover:bg-gradient-to-br hover:from-purple-600 hover:to-pink-500 rounded-xl flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg"
                       aria-label="Follow De Xpedisyen on Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"/>
                        </svg>
                    </a>

                    {{-- TikTok --}}
                    <a href="https://tiktok.com/@dexpedisyen"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="w-11 h-11 bg-gray-800 hover:bg-black rounded-xl flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg"
                       aria-label="Follow De Xpedisyen on TikTok">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.27 6.27 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.52V6.76a4.85 4.85 0 01-1.01-.07z"/>
                        </svg>
                    </a>

                    {{-- WhatsApp --}}
                    <a href="https://wa.me/628110000000"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="w-11 h-11 bg-gray-800 hover:bg-green-600 rounded-xl flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg"
                       aria-label="Chat De Xpedisyen on WhatsApp">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M12 0C5.373 0 0 5.373 0 12c0 2.125.558 4.115 1.532 5.84L.044 23.956l6.237-1.476A11.947 11.947 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.822 9.822 0 01-5.023-1.376l-.36-.214-3.733.883.929-3.621-.235-.374A9.825 9.825 0 012.182 12C2.182 6.576 6.576 2.182 12 2.182S21.818 6.576 21.818 12 17.424 21.818 12 21.818z"/>
                        </svg>
                    </a>
                </div>

                {{-- Newsletter CTA --}}
                <div class="bg-gray-900 rounded-2xl p-5">
                    <p class="text-white font-semibold text-sm mb-1">Dapatkan Update Terbaru</p>
                    <p class="text-gray-400 text-xs mb-4">Fitur baru, promo, dan tips logistik langsung ke inbox Anda.</p>
                    <form class="flex gap-2" onsubmit="event.preventDefault()">
                        <input type="email"
                               placeholder="email@anda.com"
                               class="flex-1 bg-gray-800 border border-gray-700 rounded-xl px-3 py-2 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-brand-orange transition-colors"
                               aria-label="Email for newsletter">
                        <button type="submit"
                                class="bg-brand-orange hover:bg-orange-600 text-white px-4 py-2 rounded-xl text-sm font-semibold transition-colors shrink-0">
                            Daftar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="text-sm text-gray-400 text-center">
                &copy; {{ date('Y') }} De Xpedisyen. All rights reserved.
            </p>
            <div class="flex items-center gap-4 text-xs text-gray-500">
                <a href="#" class="hover:text-gray-300 transition-colors">Kebijakan Privasi</a>
                <span>·</span>
                <a href="#" class="hover:text-gray-300 transition-colors">Syarat & Ketentuan</a>
                <span>·</span>
                <a href="#" class="hover:text-gray-300 transition-colors">Peta Situs</a>
            </div>
        </div>
    </div>
</footer>
