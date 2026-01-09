<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category; // panggil Model Category
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // untuk hapus gambar lama

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // ambil search
        $search = $request->input('search');

        // cari produk, paginate 5
        $products = Product::with('category')
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%");
            })
            ->latest() // Urutkan terbaru
            ->paginate(5);

        $products->appends(['search' => $search]);

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        // kirim data kategori agar bisa dipilih di form
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'category_id' => 'required',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // wajib ada gambar, max 2MB
        ]);

        // proses upload gambar
        $imagePath = null;
        if ($request->hasFile('image')) {
            // simpan gambar ke folder 'storage/app/public/products'
            // hasil $imagePath nanti isinya: "products/namafile.jpg"
            $imagePath = $request->file('image')->store('products', 'public');
        }

        // simpan ke database
        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
            'image' => $imagePath, // simpan pathnya saja
        ]);

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // boleh kosong kalau gambar tidak diganti
        ]);

        // ambil data inputan
        $data = $request->all();

        // cek jika user mengupload gambar baru
        if ($request->hasFile('image')) {
            // hapus gambar lama jika ada
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            // simpan gambar baru
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        // update data
        $product->update($data);

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        // hapus gambar juga biar hemat penyimpanan
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();
        return redirect()->route('products.index');
    }
}
