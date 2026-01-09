<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout - Aura & Co.</title>

    <link rel="icon" href="{{ asset('images/logo-toko.png') }}" type="image/png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .font-serif { font-family: 'Playfair Display', serif; }
        .font-sans { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-white text-gray-800 font-sans antialiased">

    <nav class="border-b border-gray-100 py-6">
        <div class="max-w-7xl mx-auto px-6 flex justify-center items-center">
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                <img src="{{ asset('images/logo-toko.png') }}" class="w-8 h-auto grayscale group-hover:grayscale-0 transition duration-300" alt="Logo">
                <span class="font-serif font-bold text-xl tracking-wide text-gray-900">Aura & Co.</span>
            </a>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24">

            <div>
                <div class="mb-8">
                    <h2 class="font-serif text-3xl font-bold text-gray-900 mb-2">Detail Pengiriman</h2>
                    <p class="text-gray-500 text-sm">Mohon isi data diri Anda untuk pemrosesan pesanan.</p>
                </div>

                <form action="{{ route('order.store', $product) }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2 uppercase tracking-wider">Nama Lengkap</label>
                        <input type="text" name="customer_name"
                            class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-gray-900 focus:ring-1 focus:ring-gray-900 focus:border-gray-900 transition outline-none"
                            required placeholder="Contoh: Auralie">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2 uppercase tracking-wider">WhatsApp / Email</label>
                        <input type="text" name="customer_contact"
                            class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-gray-900 focus:ring-1 focus:ring-gray-900 focus:border-gray-900 transition outline-none"
                            required placeholder="Kontak Anda">
                        <p class="text-xs text-gray-400 mt-2">*Kami akan menghubungi Anda untuk konfirmasi pembayaran.</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2 uppercase tracking-wider">Jumlah Pesanan</label>
                        <div class="flex items-center max-w-[100px]">
                            <input type="number" name="quantity" value="1" min="1" max="{{ $product->stock }}"
                                class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-center text-gray-900 focus:ring-1 focus:ring-gray-900 focus:border-gray-900 transition outline-none"
                                required>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-gray-100 flex items-center justify-between gap-4">
                        <a href="{{ route('home') }}" class="text-sm text-gray-500 hover:text-gray-900 transition font-medium">
                            &larr; Kembali
                        </a>
                        <button type="submit" class="bg-gray-900 text-white px-8 py-4 rounded-lg font-bold tracking-wide hover:bg-gray-800 transition transform hover:-translate-y-0.5 shadow-lg w-full sm:w-auto">
                            Konfirmasi Pesanan
                        </button>
                    </div>
                </form>
            </div>

            <div class="lg:sticky lg:top-24 h-fit">
                <div class="bg-gray-50 rounded-2xl p-6 sm:p-8 border border-gray-100 shadow-sm">
                    <h3 class="font-serif text-xl font-bold text-gray-900 mb-6">Ringkasan Pesanan</h3>

                    <div class="flex gap-6 mb-6">
                        <div class="w-32 h-32 flex-shrink-0 bg-white rounded-xl border border-gray-200 p-2 overflow-hidden flex items-center justify-center">
                            <img src="{{ asset('storage/' . $product->image) }}" class="max-w-full max-h-full object-contain" alt="{{ $product->name }}">
                        </div>

                        <div>
                            <p class="text-xs font-bold text-gray-500 uppercase tracking-wide mb-1">{{ $product->category->name }}</p>
                            <h4 class="font-serif text-lg font-bold text-gray-900 leading-tight">{{ $product->name }}</h4>
                            <p class="mt-2 text-sm text-gray-500 line-clamp-10">{{ $product->description }}</p>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 pt-4 space-y-2">
                        <div class="flex justify-between text-sm text-gray-600">
                            <span>Harga Satuan</span>
                            <span>Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between text-sm text-gray-600">
                            <span>Stok Tersedia</span>
                            <span>{{ $product->stock }} pcs</span>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 pt-4 mt-4">
                        <div class="flex justify-between items-center">
                            <span class="font-serif text-lg font-bold text-gray-900">Total Sementara</span>
                            <span class="text-xl font-bold text-indigo-900">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        </div>
                        <p class="text-xs text-right text-gray-400 mt-1">*Harga dikalikan jumlah di nota akhir</p>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-center gap-2 text-gray-400 text-xs">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    <span>Secure Checkout System</span>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
