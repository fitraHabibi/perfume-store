<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
                        <a href="{{ route('categories.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                            + Tambah Kategori
                        </a>
                        <form action="{{ route('categories.index') }}" method="GET" class="flex gap-2">
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari..." class="border-gray-300 rounded-md shadow-sm text-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <button type="submit" class="px-4 py-2 bg-gray-800 text-white rounded-md text-sm hover:bg-gray-700">Cari</button>
                        </form>
                    </div>
                    <table class="w-full mt-6 border-collapse">
                    </table>
                    <div class="mt-4">
                        {{ $categories->links() }}
                    </div>
                </div>

                <table class="w-full mt-6 border-collapse">
                    <thead>
                        <tr class="bg-gray-800 border-b text-white">
                            <th class="p-4 text-left">No</th>
                            <th class="p-4 text-left">Nama Kategori</th>
                            <th class="p-4 text-left">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $key => $category)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-4">{{ $key + 1 }}</td>
                            <td class="p-4 font-bold">{{ $category->name }}</td>
                            <td class="p-4 flex gap-2">
                                <a href="{{ route('categories.edit', $category) }}" class="text-yellow-600 hover:text-yellow-800">Edit</a>

                                <span class="text-gray-300">|</span>

                                <form action="{{ route('categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus kategori?')">
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
