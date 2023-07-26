<?php

// WarehouseController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;

class WarehouseController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'warehouse' => 'required|string|max:255',
            'warehouseadresse' => 'required|string|max:255',
            'capacity' => 'required|string|max:255',
        ]);

        Warehouse::create($validatedData);

        // Ajoutez ici le code pour rediriger l'utilisateur vers la page appropriée après avoir soumis le formulaire.
    }
}
