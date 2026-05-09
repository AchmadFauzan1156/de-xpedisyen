<x-layouts.app
    title="Pesan Terkirim — De Xpedisyen"
    description="Terima kasih telah menghubungi De Xpedisyen. Tim kami akan segera merespons pesan Anda.">

<section class="min-h-[80vh] flex items-center justify-center bg-gray-50 py-20 px-4">
    <div class="max-w-lg w-full text-center" data-reveal>

        {{-- Success Icon --}}
        <div class="flex justify-center mb-8">
            <div class="relative">
                <div class="w-28 h-28 bg-green-100 rounded-full flex items-center justify-center animate-fade-in">
                    <div class="w-20 h-20 bg-green-500 rounded-full flex items-center justify-center shadow-xl shadow-green-200">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                </div>
                {{-- Floating confetti-like circles --}}
                <div class="absolute -top-2 -right-2 w-5 h-5 bg-brand-orange rounded-full animate-float opacity-70"></div>
                <div class="absolute -bottom-1 -left-3 w-4 h-4 bg-brand-navy rounded-full animate-float animate-delay-200 opacity-60"></div>
                <div class="absolute top-4 -left-5 w-3 h-3 bg-green-400 rounded-full animate-float animate-delay-400 opacity-60"></div>
            </div>
        </div>

        {{-- Message --}}
        <h1 class="text-3xl md:text-4xl font-black text-brand-navy mb-4 animate-fade-in animate-delay-100">
            Pesan Terkirim! 🎉
        </h1>
        <p class="text-gray-500 text-lg leading-relaxed mb-8 animate-fade-in animate-delay-200">
            Terima kasih telah menghubungi <span class="font-semibold text-brand-navy">De Xpedisyen</span>.
            Tim kami akan segera merespons pesan Anda dalam <span class="font-semibold text-brand-orange">1×24 jam kerja</span>.
        </p>

        {{-- Info card --}}
        <div class="bg-white rounded-2xl border border-gray-100 shadow-lg p-6 mb-8 text-left animate-fade-in animate-delay-300">
            <p class="text-sm font-bold text-gray-700 mb-3">Sambil menunggu, Anda bisa:</p>
            <ul class="space-y-2">
                @foreach([
                    ['Ikuti kami di Instagram untuk update terbaru', '#'],
                    ['Pelajari fitur-fitur unggulan platform kami', route('home') . '#features'],
                    ['Chat langsung via WhatsApp untuk respons lebih cepat', 'https://wa.me/628110000000'],
                ] as [$label, $href])
                <li>
                    <a href="{{ $href }}"
                       class="flex items-center gap-3 text-sm text-gray-600 hover:text-brand-navy group transition-colors duration-200"
                       @if(str_starts_with($href, 'http')) target="_blank" rel="noopener noreferrer" @endif>
                        <span class="w-5 h-5 bg-brand-orange/10 rounded-full flex items-center justify-center shrink-0 group-hover:bg-brand-orange/20 transition-colors">
                            <svg class="w-3 h-3 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                        {{ $label }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>

        {{-- CTA Buttons --}}
        <div class="flex flex-col sm:flex-row gap-3 justify-center animate-fade-in animate-delay-400">
            <a href="{{ route('home') }}">
                <x-button variant="primary" class="w-full sm:w-auto">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Kembali ke Beranda
                </x-button>
            </a>
            <a href="https://wa.me/628110000000" target="_blank" rel="noopener noreferrer">
                <x-button variant="outline" class="w-full sm:w-auto">
                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347zM12 0C5.373 0 0 5.373 0 12c0 2.125.558 4.115 1.532 5.84L.044 23.956l6.237-1.476A11.947 11.947 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.822 9.822 0 01-5.023-1.376l-.36-.214-3.733.883.929-3.621-.235-.374A9.825 9.825 0 012.182 12C2.182 6.576 6.576 2.182 12 2.182S21.818 6.576 21.818 12 17.424 21.818 12 21.818z"/>
                    </svg>
                    Chat WhatsApp
                </x-button>
            </a>
        </div>
    </div>
</section>

</x-layouts.app>
