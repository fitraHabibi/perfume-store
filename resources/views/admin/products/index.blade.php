<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
                        <a href="{{ route('products.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                            + Tambah Produk
                        </a>
                        <form action="{{ route('products.index') }}" method="GET" class="flex gap-2">
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari..." class="border-gray-300 rounded-md shadow-sm text-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <button type="submit" class="px-4 py-2 bg-gray-800 text-white rounded-md text-sm hover:bg-gray-700">Cari</button>
                        </form>
                    </div>
                    <table class="w-full mt-6 border-collapse">
                    </table>
                    <div class="mt-4">
                        {{ $products->links() }}
                    </div>
                </div>

                <table class="w-full mt-6 border-collapse">
                    <thead>
                        <tr class="bg-gray-800 border-b text-white">
                            <th class="p-4 text-left">Foto</th>
                            <th class="p-4 text-left">Nama</th>
                            <th class="p-4 text-left">Harga</th>
                            <th class="p-4 text-left">Kategori</th>
                            <th class="p-4 text-left">Stok</th>
                            <th class="p-4 text-left">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-4">
                                {{-- proses menampilkan gambar --}}
                                <img src="{{ asset('storage/' . $product->image) }}" class="w-16 h-16 object-cover rounded">
                            </td>
                            <td class="p-4 font-bold">{{ $product->name }}</td>
                            <td class="p-4">Rp {{ number_format($product->price) }}</td>
                            <td class="p-4 text-sm text-gray-500">{{ $product->category->name }}</td>
                            <td class="p-4">{{ $product->stock }}</td>
                            <td class="p-4 flex gap-2">
                                <a href="{{ route('products.edit', $product) }}" class="text-yellow-600 hover:text-yellow-800">Edit</a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('Apakah anda ingin hapus produk ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
