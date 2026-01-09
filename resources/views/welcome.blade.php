<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aura & Co. | Niche Perfumery</title>

    <link rel="icon" href="{{ asset('images/logo-toko.png') }}" type="image/png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Smooth Scroll */
        html { scroll-behavior: smooth; }

        .font-serif { font-family: 'Playfair Display', serif; }
        .font-sans { font-family: 'Inter', sans-serif; }

        /* Animasi Fade In Up */
        .fade-in-up {
            animation: fadeInUp 2s ease-out forwards;
            opacity: 0;
            transform: translateY(20px);
        }

        @keyframes fadeInUp {
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <nav class="bg-white/90 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">

                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/logo-toko.png') }}" class="w-10 h-auto" alt="Logo Aura & Co.">
                    <span class="font-serif font-bold text-2xl tracking-wide text-gray-900">
                        Aura & Co.
                    </span>
                </div>

                {{-- <div class="flex items-center gap-6">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-gray-500 hover:text-gray-900 transition">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-medium text-gray-500 hover:text-gray-900 transition">Log in</a>
                        @endauth
                    @endif
                </div> --}}
            </div>
        </div>
    </nav>

    {{-- @if(session('success'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 5000)"
        x-show="show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-x-8"
        x-transition:enter-end="opacity-100 transform translate-x-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-x-0"
        x-transition:leave-end="opacity-0 transform translate-x-8"
        class="fixed top-24 right-5 z-[100] bg-gray-900 text-white px-6 py-4 rounded-lg shadow-2xl flex items-start gap-4 max-w-sm border border-gray-700"
        style="display: none;"
    >
        <div class="flex-shrink-0 mt-1">
            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>

        <div class="flex-1">
            <h3 class="font-serif font-bold text-lg leading-tight mb-1">Terima Kasih</h3>
            <p class="text-sm text-gray-300 leading-snug">{{ session('success') }}</p>
        </div>

        <button @click="show = false" class="text-gray-500 hover:text-white transition focus:outline-none">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    @endif --}}

    <div class="relative bg-gray-900 overflow-hidden py-32 sm:py-40">

        <div class="absolute inset-0">
            <img src="{{ asset('images/hero-bg.jpg') }}" class="w-full h-full object-cover object-center opacity-60" alt="Parfum Banner">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center fade-in-up">
            <span class="inline-block py-1 px-3 rounded-full bg-white/10 border border-white/20 text-xs font-semibold tracking-wider uppercase text-white mb-6 backdrop-blur-sm">
                New Collection 2025
            </span>

            <h1 class="font-serif text-5xl md:text-6xl font-bold tracking-tight mb-6 leading-tight text-white drop-shadow-lg">
                Lebih Dari Sekedar Aroma
            </h1>

            <p class="mt-4 text-xl text-gray-200 max-w-2xl mx-auto font-light leading-relaxed drop-shadow-md">
                Koleksi parfum <i>niche</i> dengan ketahanan maksimal. Diciptakan untuk kamu yang menghargai seni wewangian kelas dunia.
            </p>

            <div class="mt-8 max-w-md mx-auto">
                <form action="{{ route('home') }}" method="GET" class="relative group">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400 group-hover:text-gray-600 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" name="search" value="{{ request('search') }}"
                        class="block w-full pl-10 pr-3 py-4 border-none rounded-full leading-5 bg-white/90 backdrop-blur-md text-gray-900 placeholder-gray-500 focus:outline-none focus:bg-white focus:ring-2 focus:ring-white/50 focus:shadow-xl transition duration-300 shadow-lg"
                        placeholder="Temukan aromamu di sini..." autocomplete="off">

                    <button type="submit" class="absolute inset-y-1 right-1 px-4 py-2 bg-gray-900 text-white rounded-full text-sm font-medium hover:bg-gray-800 transition">
                        Cari
                    </button>
                </form>
            </div>

            <div class="mt-10">
                <a href="#katalog" class="inline-block bg-white text-gray-900 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 hover:scale-105 transition duration-300 shadow-lg">
                    Lihat Koleksi
                </a>
            </div>
        </div>
    </div>

    <div id="katalog" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 bg-white">

        @if(request('search'))
            <div class="text-center mb-16">
                <h2 class="font-serif text-3xl font-bold text-gray-900">Hasil Pencarian</h2>
                <p class="text-gray-500 mt-2">Menampilkan hasil untuk: "<span class="font-bold text-gray-900">{{ request('search') }}</span>"</p>
                <a href="{{ route('home') }}" class="text-sm text-indigo-600 hover:underline mt-2 inline-block">Reset Pencarian</a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach($products as $product)
                <div class="group bg-white rounded-xl shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100 overflow-hidden">
                    <div class="h-72 overflow-hidden bg-gray-100 relative">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-3 left-3">
                            <span class="bg-white/95 backdrop-blur text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wide text-gray-800 shadow-sm">
                                {{ $product->category->name }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h4 class="font-serif text-lg font-bold text-gray-900 mb-1">{{ $product->name }}</h4>
                        <div class="flex flex-col items-center gap-3 mt-4">
                            <span class="text-lg font-semibold text-gray-900">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                            <a href="{{ route('checkout', $product) }}" class="w-full bg-gray-900 text-white px-4 py-2.5 rounded-lg text-sm font-medium hover:bg-gray-800 transition-colors">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            @if($products->isEmpty())
                <div class="text-center py-12 bg-gray-50 rounded-lg border border-dashed border-gray-300">
                    <p class="text-gray-500 text-lg">Maaf, tidak ditemukan parfum dengan kata kunci tersebut.</p>
                </div>
            @endif


        @else
            <div class="text-center mb-16">
                <h2 class="font-serif text-4xl font-bold text-gray-900">Our Collections</h2>
                <p class="text-gray-500 mt-4">Temukan aroma yang mendefinisikan kepribadian Anda.</p>
            </div>

            @foreach($categories as $category)
            <div class="mb-20 last:mb-0">
                <div class="flex items-center gap-4 mb-8">
                    <h3 class="font-serif text-2xl font-bold text-gray-800">{{ $category->name }}</h3>
                    <div class="h-px bg-gray-200 flex-1"></div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach($category->products as $product)
                    <div class="group bg-white rounded-xl shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100 overflow-hidden">
                        <div class="h-72 overflow-hidden bg-gray-100 relative">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute top-3 left-3">
                                <span class="bg-white/95 backdrop-blur text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wide text-gray-800 shadow-sm">
                                    {{ $product->category->name }}
                                </span>
                            </div>
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="font-serif text-lg font-bold text-gray-900 mb-1">{{ $product->name }}</h4>
                            <p class="text-xs text-gray-500 mb-4 line-clamp-1">{{ $product->description }}</p>
                            <div class="flex flex-col items-center gap-3">
                                <span class="text-lg font-semibold text-gray-900">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                <a href="{{ route('checkout', $product) }}" class="w-full bg-gray-900 text-white px-4 py-2.5 rounded-lg text-sm font-medium hover:bg-gray-800 transition-colors">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        @endif

    </div>

    <footer class="bg-gray-900 text-white py-12 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
            <div class="flex flex-col items-center md:items-start">
                <div class="flex items-center gap-2 mb-4">
                     <img src="{{ asset('images/logo-toko.png') }}" class="w-8 h-auto brightness-0 invert" alt="Logo">
                     <span class="font-serif text-xl font-bold">Aura & Co.</span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">Menghadirkan kemewahan aroma dalam setiap tetesnya. Original & Authentic.</p>
            </div>
            <div>
                <h4 class="font-bold mb-4 uppercase text-xs tracking-wider text-gray-500">Navigasi</h4>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li><a href="#" class="hover:text-white transition">Home</a></li>
                    <li><a href="#katalog" class="hover:text-white transition">Shop Collection</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4 uppercase text-xs tracking-wider text-gray-500">Hubungi Kami</h4>
                <p class="text-sm text-gray-300">Medan, Indonesia</p>
                <p class="text-sm text-gray-300 mt-1">support@auraco.id</p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 mt-12 pt-8 border-t border-gray-800 text-center text-xs text-gray-500">
            &copy; 2025 Aura & Co. Parfumerie.
        </div>
    </footer>

    @if(session('last_order_id'))
        @php
            // Trik Cepat: Ambil data order langsung di View (Khusus case ini supaya praktis)
            $lastOrder = \App\Models\Order::with('product')->find(session('last_order_id'));
        @endphp

        @if($lastOrder)
        <div x-data="{ open: true }" x-show="open" class="fixed inset-0 z-[999] flex items-center justify-center bg-black/60 backdrop-blur-sm p-4 fade-in-up">

            <div class="bg-white w-full max-w-sm rounded-xl shadow-2xl overflow-hidden relative">

                <div class="bg-gray-900 h-2 w-full"></div>

                <button @click="open = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-900 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>

                <div class="p-8 text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>

                    <h3 class="font-serif text-2xl font-bold text-gray-900 mb-1">Pesanan Diterima!</h3>
                    <p class="text-xs text-gray-500 mb-6 uppercase tracking-wider">Order #{{ $lastOrder->id }}</p>

                    <div class="bg-gray-50 rounded-lg p-4 border border-gray-100 text-left mb-6">
                        <div class="flex items-center gap-3 mb-3 pb-3 border-b border-gray-200 border-dashed">
                            <img src="{{ asset('storage/' . $lastOrder->product->image) }}" class="w-10 h-10 object-cover rounded bg-white">
                            <div>
                                <p class="font-bold text-sm text-gray-900">{{ $lastOrder->product->name }}</p>
                                <p class="text-xs text-gray-500">{{ $lastOrder->quantity }} pcs</p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Total Bayar</span>
                            <span class="font-bold text-gray-900 text-lg">Rp {{ number_format($lastOrder->total_price) }}</span>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <a href="{{ route('order.success', $lastOrder->id) }}" target="_blank" class="block w-full bg-gray-900 text-white py-3 rounded-lg font-bold text-sm hover:bg-gray-800 transition shadow-lg">
                            Download / Cetak Struk PDF
                        </a>

                        <button @click="open = false" class="block w-full bg-white text-gray-500 py-3 rounded-lg font-medium text-sm border border-gray-200 hover:bg-gray-50 transition">
                            Tutup & Lanjut Belanja
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endif

</body>
</html>
