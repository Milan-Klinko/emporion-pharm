<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\GiftPack;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function catalog()
    {
        $products = collect([
    (object)['id' => 1, 'name' => 'Vitamin D3 1000 IU', 'price' => 1000, 'stock' => 50],
    (object)['id' => 2, 'name' => 'Multivitamin kompleks', 'price' => 500, 'stock' => 100],
    (object)['id' => 3, 'name' => 'Krema za ruke', 'price' => 800, 'stock' => 30],
    (object)['id' => 4, 'name' => 'Vitamin C 500 mg', 'price' => 1200, 'stock' => 80],
]);
        return view('shop.catalog', compact('products'));
    }

    public function gift()
    {
        $giftPacks = collect([
    (object)['id' => 1, 'name' => 'Imunitet booster', 'description' => 'Vitamin C + Cink + Echinacea'],
    (object)['id' => 2, 'name' => 'Energija paket', 'description' => 'B-kompleks + Magnezijum'],
    (object)['id' => 3, 'name' => 'Relax paket', 'description' => 'Magnezijum + Valerijana'],
]);
        return view('shop.gift', compact('giftPacks'));
    }

    public function checkout(Request $request)
    {
        // In real app we'd use session/cart – for demo we just show form
        return view('shop.checkout');
    }

    public function storeOrder(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_address' => 'required',
            'delivery_date' => 'required|date',
            'delivery_time' => 'required',
        ]);

        $order = Order::create([
            'order_number' => 'ORD-' . str_pad(Order::count() + 1, 5, '0', STR_PAD_LEFT),
            'customer_name' => $request->customer_name,
            'customer_address' => $request->customer_address,
            'delivery_date' => $request->delivery_date,
            'delivery_time' => $request->delivery_time,
            'total' => 8000, // demo value
            'status' => 'new',
            'gift_selected' => true,
        ]);

        return view('shop.thankyou', compact('order'));
    }

    public function employee()
    {
        $orders = Order::with('items.product')->get();
        return view('shop.employee', compact('orders'));
    }

    public function addToCart(Request $request, Product $product)
{
    $cart = session('cart', []);
    $cart[$product->id] = ($cart[$product->id] ?? 0) + 1;
    session(['cart' => $cart]);

    return redirect()->back()->with('success', 'Dodato u korpu!');
}

public function viewCart()
{
    $cart = session('cart', []);
    $items = [];
    $total = 0;

    foreach ($cart as $productId => $quantity) {
        $product = Product::find($productId);
        if ($product) {
            $items[] = [
                'product' => $product,
                'quantity' => $quantity,
                'subtotal' => $product->price * $quantity,
            ];
            $total += $product->price * $quantity;
        }
    }

    return view('shop.cart', compact('items', 'total'));
}
}