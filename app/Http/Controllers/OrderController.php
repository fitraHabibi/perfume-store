<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        // ambil search
        $search = $request->input('search');

        $orders = Order::with('product')
            ->when($search, function ($query, $search) {
                return $query->where('customer_name', 'like', "%{$search}%")
                             ->orWhere('customer_contact', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(5);

        $orders->appends(['search' => $search]);

        return view('admin.orders.index', compact('orders'));
    }

    public function update(Request $request, Order $order)
    {
        // validasi
        $request->validate([
            'status' => 'required|in:pending,paid,shipped,completed,cancelled'
        ]);

        // bila cancel kembalikan produk
        if ($request->status == 'cancelled' && $order->status != 'cancelled') {
            $order->product->increment('stock', $order->quantity);
        }

        // update status
        $order->update([
            'status' => $request->status
        ]);

        return redirect()->route('orders.index');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
}
