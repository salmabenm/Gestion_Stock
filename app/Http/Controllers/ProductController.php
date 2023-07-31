<?php

// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;
use App\Models\ Inventory;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    
    public function index()
    {
        $products = Product::all();
    
        // Update inventory quantity for each product
        foreach ($products as $product) {
            $inventoryProduct = Inventory::where('name', $product->name)->first();
    
            if ($inventoryProduct) {
                // Product exists in inventory, increase quantity
                $newQuantity = $inventoryProduct->quantity + $product->quantity;
                $inventoryProduct->update(['quantity' => $newQuantity]);
            } else {
                // Product doesn't exist in inventory, decrease quantity
                $newQuantity = $product->quantity > 0 ? -$product->quantity : 0;
                Inventory::create([
                    'name' => $product->name,
                    'quantity' => $newQuantity,
                ]);
            }
        }
    
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'categories' => 'nullable|string',
        ]);

        Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Product added successfully.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit_product', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'categories' => 'nullable|string',
        ]);

        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found.');
        }
    
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
