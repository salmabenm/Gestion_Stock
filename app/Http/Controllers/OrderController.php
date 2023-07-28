<?php

// app/Http/Controllers/OrderController.php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }
    
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'order_number' => 'required|string',
            'customer_name' => 'required|string',
            'product_name' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0',
        ]);
    
        // Manually set the 'date' field to the current date
        $validatedData['date'] = Carbon::now();
    
        Order::create($validatedData);
    
        return redirect()->route('orders.index')->with('success', 'Order added successfully.');
    }
    

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.edit_order', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $validatedData = $request->validate([
            'order_number' => 'required|string',
            'customer_name' => 'required|string',
            'product_name' => 'required|string',
            'quantity' => 'required|integer|min:0',
            'total_price' => 'required|numeric|min:0',
        ]);

        $order->update($validatedData);

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        if (!$order) {
            return redirect()->route('orders.index')->with('error', 'Order not found.');
        }
    
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }

}
