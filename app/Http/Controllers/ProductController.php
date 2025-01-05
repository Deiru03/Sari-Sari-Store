<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $products = Product::query()->orderBy('created_at', 'desc')->paginate();
        // dd($products);
        return view("product.index", compact('products') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("product.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validatedProduct = $request->validate([
                'product_name' => 'required|string|max:255',
                'product_description' => 'nullable|string|max:255',
                'product_orig_price' => 'required|numeric',
                'product_your_price' => 'required|numeric',
                'product_quantity' => 'required|integer',
                'product_profit' => 'required|numeric',
                'product_total_profit' => 'required|numeric',
            ]);

            $product = Product::create([
                'name' => $validatedProduct['product_name'],
                'description' => $validatedProduct['product_description'],
                'orig_price' => $validatedProduct['product_orig_price'],
                'your_price' => $validatedProduct['product_your_price'],
                'item_profit' => $validatedProduct['product_profit'],
                'total_profit' => $validatedProduct['product_total_profit'],
                'quantity' => $validatedProduct['product_quantity'],
            ]);

            return redirect()->route('product.index', $product)->with('success', 'Product Added Successfully');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Failed to add product');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view("product.show");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view("product.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
