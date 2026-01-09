<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            // cari produk berdasarkan nama atau kategorinya
            $products = Product::where('name', 'like', "%{$search}%")
                        ->orWhereHas('category', function($query) use ($search) {
                            $query->where('name', 'like', "%{$search}%");
                        })
                        ->latest()
                        ->get();

            // mode rak dimatikan
            $categories = collect();
        } else {
            // ambil rak kategori
            $categories = Category::with('products')->has('products')->get();

            // mode produk dimatikan
            $products = collect();
        }

        // tampilkan ke view 'welcome'
        return view('welcome', compact('categories', 'products'));

        // ambil kategori yang punya produk saja, sekalian data produknya
        // $categories = Category::with('products')->has('products')->get();
    }

    // menampilkan halaman checkout
    public function checkout(Product $product)
    {
        return view('checkout', compact('product'));
    }

    // memproses pesanan
    public function storeOrder(Request $request, Product $product)
    {
        // validasi input
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_contact' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1|max:' . $product->stock, // tidak boleh beli melebihi stok
        ]);

        // hitung total harga
        $totalPrice = $product->price * $request->quantity;

        // Simpan ke database 'orders'
        $order = Order::create([
            'product_id' => $product->id,
            'customer_name' => $request->customer_name,
            'customer_contact' => $request->customer_contact,
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
            'status' => 'pending', // status
        ]);

        // kurangi stok produk
        $product->decrement('stock', $request->quantity);

        // arahkan balik ke home dengan pesan sukses
        return redirect()->route('home')
            ->with('success', 'Pesanan berhasil dibuat!')
            ->with('last_order_id', $order->id);
    }

    public function success($id)
    {
        $order = Order::with('product')->findOrFail($id);
        return view('success', compact('order'));
    }
}
