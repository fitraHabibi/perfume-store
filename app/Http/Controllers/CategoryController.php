<?php

namespace App\Http\Controllers;

use App\Models\Category; // panggil Model Category
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // menampilkan daftar semua kategori
    public function index(Request $request)
    {
        // ambil search kalau ada
        $search = $request->input('search');

        // cari kategori, paginate 5
        $categories = Category::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%");
        })->paginate(5);

        // agar kata kunci tidak hilang saat ganti halaman
        $categories->appends(['search' => $search]);

        return view('admin.categories.index', compact('categories'));
    }

    // menampilkan formulir untuk tambah kategori
    public function create()
    {
        return view('admin.categories.create');
    }

    // memproses data dari formulir ke database
    public function store(Request $request)
    {
        // validasi: Nama wajib diisi
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // simpan ke database
        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index');
    }

    // menampilkan formulir edit untuk kategori tertentu
    public function edit(Category $category)
    {
        // laravel mencarikan kategori berdasarkan ID-nya
        return view('admin.categories.edit', compact('category'));
    }

    // memproses perubahan data ke database
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index');
    }

    // menghapus kategori
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
