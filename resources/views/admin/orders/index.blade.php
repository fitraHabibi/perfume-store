<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
                        <form action="{{ route('orders.index') }}" method="GET" class="flex gap-2">
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari Data Pembeli" class="border-gray-300 rounded-md shadow-sm text-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <button type="submit" class="px-4 py-2 bg-gray-800 text-white rounded-md text-sm hover:bg-gray-700">Cari</button>
                        </form>
                    </div>
                    <table class="w-full mt-6 border-collapse">
                    </table>
                    <div class="mt-4">
                        {{ $orders->links() }}
                    </div>
                </div>

                <table class="w-full border-collapse text-sm">
                    <thead>
                        <tr class="bg-gray-800 border-b text-white">
                            <th class="p-3 text-left">Tanggal</th>
                            <th class="p-3 text-left">Pelanggan</th>
                            <th class="p-3 text-left">Produk</th>
                            <th class="p-3 text-left">Total</th>
                            <th class="p-3 text-left">Status</th>
                            <th class="p-3 text-left">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-3 text-gray-500">{{ $order->created_at->format('d M Y') }}</td>

                            <td class="p-3">
                                <div class="font-bold">{{ $order->customer_name }}</div>
                                <div class="text-xs text-gray-500">{{ $order->customer_contact }}</div>
                            </td>

                            <td class="p-3">
                                {{ $order->product->name }} <br>
                                <span class="text-xs text-gray-500">Qty: {{ $order->quantity }}</span>
                            </td>

                            <td class="p-3 font-bold text-indigo-600">
                                Rp {{ number_format($order->total_price) }}
                            </td>

                            <td class="p-3">
                                @if($order->status == 'cancelled')
                                    <span class="px-2 py-1 bg-red-100 text-red-800 text-xs font-bold rounded">
                                        DIBATALKAN (Final)
                                    </span>
                                @else
                                    <form action="{{ route('orders.update', $order) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select name="status" onchange="this.form.submit()" class="text-xs border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                                            {{ $order->status == 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                                            {{ $order->status == 'paid' ? 'bg-green-100 text-green-800' : '' }}
                                            {{ $order->status == 'shipped' ? 'bg-blue-100 text-blue-800' : '' }}
                                            {{ $order->status == 'completed' ? 'bg-gray-100 text-gray-800' : '' }}
                                        ">
                                            @if($order->status == 'pending')
                                                <option value="pending" selected>Pending</option>
                                            @endif

                                            <option value="paid" {{ $order->status == 'paid' ? 'selected' : '' }}>Sudah Bayar</option>
                                            <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Dikirim</option>
                                            <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Selesai</option>
                                            <option value="cancelled">Batal</option>
                                        </select>
                                    </form>
                                @endif
                            </td>

                            <td class="p-3">
                                <form action="{{ route('orders.destroy', $order) }}" method="POST" onsubmit="return confirm('Hapus history pesanan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 font-bold">X</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                @if($orders->isEmpty())
                <p class="text-center text-gray-500 mt-6">Belum ada pesanan masuk.</p>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
