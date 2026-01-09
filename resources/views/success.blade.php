<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Struk Pesanan #{{ $order->id }} - Aura & Co.</title>

    <link rel="icon" href="{{ asset('images/logo-toko.png') }}" type="image/png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;500;600&family=Courier+Prime&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .font-serif { font-family: 'Playfair Display', serif; }
        .font-sans { font-family: 'Inter', sans-serif; }
        .font-mono { font-family: 'Courier Prime', monospace; }

        @media print {
            .no-print { display: none; }
            body { background-color: white; }
            .struk-box { box-shadow: none; border: none; }
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased min-h-screen flex flex-col items-center justify-center py-12 px-4">

    <div class="struk-box bg-white max-w-md w-full rounded-xl shadow-2xl overflow-hidden border border-gray-100 relative">

        <div class="bg-gray-900 text-white p-8 text-center relative overflow-hidden">
            <div class="relative z-10">
                <img src="{{ asset('images/logo-toko.png') }}" class="w-12 h-auto mx-auto mb-4 invert brightness-0" alt="Logo">
                <h1 class="font-serif text-2xl font-bold tracking-wider">Aura & Co.</h1>
                <p class="text-xs text-gray-400 mt-1 uppercase tracking-widest">Niche Perfumery</p>
            </div>
            <div class="absolute -top-10 -left-10 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
            <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
        </div>

        <div class="p-8">
            <div class="text-center mb-8">
                <div class="inline-block bg-green-100 text-green-800 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide mb-2">
                    Pembayaran Berhasil
                </div>
                <p class="text-sm text-gray-500">Terima kasih telah berbelanja.</p>
            </div>

            <div class="space-y-4 mb-8">
                <div class="flex justify-between text-sm border-b border-dashed border-gray-200 pb-2">
                    <span class="text-gray-500">No. Order</span>
                    <span class="font-mono font-bold">#ORD-{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}</span>
                </div>
                <div class="flex justify-between text-sm border-b border-dashed border-gray-200 pb-2">
                    <span class="text-gray-500">Tanggal</span>
                    <span class="font-mono">{{ $order->created_at->format('d/m/Y H:i') }}</span>
                </div>
                <div class="flex justify-between text-sm border-b border-dashed border-gray-200 pb-2">
                    <span class="text-gray-500">Pelanggan</span>
                    <span class="font-mono text-right">{{ $order->customer_name }}</span>
                </div>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg border border-gray-100 mb-6">
                <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3">Rincian Produk</h3>
                <div class="flex items-center gap-4">
                    <img src="{{ asset('storage/' . $order->product->image) }}" class="w-12 h-12 object-cover rounded-md border border-gray-200">
                    <div class="flex-1">
                        <p class="font-serif font-bold text-gray-900">{{ $order->product->name }}</p>
                        <p class="text-xs text-gray-500">{{ $order->product->category->name }}</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm text-gray-500">x{{ $order->quantity }}</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-between items-end border-t-2 border-gray-900 pt-4">
                <span class="font-bold text-gray-600">Total Bayar</span>
                <span class="font-serif text-3xl font-bold text-gray-900">Rp {{ number_format($order->total_price, 0, ',', '.') }}</span>
            </div>

            <div class="text-center mt-8 text-xs text-gray-400 leading-relaxed">
                Simpan bukti ini sebagai konfirmasi pesanan.<br>
                Kami akan menghubungi Anda via WhatsApp untuk pengiriman.
            </div>
        </div>

        <div class="no-print bg-gray-50 p-6 border-t border-gray-100 flex flex-col gap-3">
            <button onclick="window.print()" class="w-full bg-gray-900 text-white font-bold py-3 rounded-lg hover:bg-gray-800 transition shadow-lg flex justify-center items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                Cetak / Simpan PDF
            </button>
            <a href="{{ route('home') }}" class="w-full bg-white text-gray-700 font-bold py-3 rounded-lg border border-gray-300 hover:bg-gray-50 transition text-center block">
                Kembali ke Beranda
            </a>
        </div>
    </div>

</body>
</html>
