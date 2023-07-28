<?php

// app/Http/Controllers/ClientController.php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'nullable|string',
        ]);

        Client::create($validatedData);

        return redirect()->route('clients.index')->with('success', 'Client added successfully.');
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit_customer', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'nullable|string',
        ]);

        $client->update($validatedData);

        return redirect()->route('clients.index')->with('success', 'Client updated successfully.');
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        if (!$client) {
            return redirect()->route('clients.index')->with('error', 'Client not found.');
        }
    
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Client deleted successfully.');
    }
}

