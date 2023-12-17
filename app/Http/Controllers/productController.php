<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validation...

        DB::table('products')->insert([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/');
    }

    public function showUpdateQuantityPage()
    {
        $products = DB::table('products')->get();
        return view('products.update-quantity', compact('products'));
    }

    public function updateQuantity(Request $request, $id)
    {
        // Validate the form data...
        $request->validate([
            'sold_quantity' => 'required|numeric|min:1',
        ]);

        $soldQuantity = $request->input('sold_quantity');

        // Update product quantity
        DB::table('products')
            ->where('id', $id)
            ->decrement('quantity', $soldQuantity);

        // Redirect with a success message...
        return redirect()->route('show-update-quantity')->with('success', 'Quantity updated successfully');
    }



    public function showChangePriceForm()
    {
        // Fetch products from the database
        $products = DB::table('products')->get();

        return view('products.change-price', compact('products'));
    }




    public function updatePrice(Request $request, $id)
    {
        // Validate the form data...
        $request->validate([
            'product_id' => 'required|numeric',
            'new_price' => 'required|numeric|min:0.01',
        ]);

        $productId = $request->input('product_id');
        $newPrice = $request->input('new_price');

        // Update product price
        DB::table('products')
            ->where('id', $productId)
            ->update(['price' => $newPrice]);

        // Redirect with a success message...
        return redirect()->route('show-change-price')->with('success', 'Price updated successfully');
    }
}
