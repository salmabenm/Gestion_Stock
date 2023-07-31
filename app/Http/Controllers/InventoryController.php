<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class InventoryController extends Controller
{
    public function index()
    {
        $inventory = Inventory::all();
        return view('inventory.index', compact('inventory'));
    }

    public function create()
    {
        return view('inventory.create');
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
            'status' => 'required|string',
        ]);

        Inventory::create($validatedData);

        return redirect()->route('inventory.index')->with('success', 'Operation added successfully.');

    }

    public function edit($id)
    {
        $inventory = Inventory::findOrFail($id);
        return view('inventory.edit_inventory', compact('inventory'));
    }

    public function update(Request $request, $id)
    {
        $inventory = Inventory::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'categories' => 'nullable|string',
            'status' => 'required|string',
        ]);

        $inventory->update($validatedData);

        return redirect()->route('inventory.index')->with('success', 'Operation updated successfully.');
    }

    public function destroy($id)
    {
        $inventory = Inventory::find($id);
        if (!$inventory) {
            return redirect()->route('inventory.index')->with('error', 'Operation not found.');
        }
    
        $inventory->delete();
        return redirect()->route('inventory.index')->with('success', 'Operation deleted successfully.');
    }


    public function graphique()
    {
        $data = Inventory::select(
            DB::raw('SUM(CASE WHEN status = "Entrie" THEN quantity ELSE 0 END) as entry_quantity'),
            DB::raw('SUM(CASE WHEN status = "Exit" THEN quantity ELSE 0 END) as output_quantity')
        )->first();

        return View::make('inventory.graph', compact('data'));
    }
    
}
