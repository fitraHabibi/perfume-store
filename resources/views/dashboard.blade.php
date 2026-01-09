<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-indigo-500">
                    <div class="text-gray-500 text-sm font-medium">Total Produk</div>
                    <div class="mt-2 text-3xl font-bold text-gray-900">{{ $totalProducts }}</div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-blue-500">
                    <div class="text-gray-500 text-sm font-medium">Total Pesanan</div>
                    <div class="mt-2 text-3xl font-bold text-gray-900">{{ $totalOrders }}</div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-yellow-500">
                    <div class="text-gray-500 text-sm font-medium">Menunggu Konfirmasi</div>
                    <div class="mt-2 text-3xl font-bold text-yellow-600">{{ $pendingOrders }}</div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-green-500">
                    <div class="text-gray-500 text-sm font-medium">Total Pendapatan</div>
                    <div class="mt-2 text-3xl font-bold text-green-600">
                        Rp {{ number_format($revenue / 1000, 0) }}k
                    </div>
                    <div class="text-xs text-gray-400 mt-1">Hanya status lunas</div>
                </div>

            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-2">Halo, {{ Auth::user()->name }}!</h3>
                    <p class="text-gray-600">Selamat datang di panel admin Aura & Co. . Cek pesanan secara daily, ya!</p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
