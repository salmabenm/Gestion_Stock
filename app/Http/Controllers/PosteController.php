<?php

// PosteController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poste;

class PosteController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'poste' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        Poste::create($validatedData);

        // Ajoutez ici le code pour rediriger l'utilisateur vers la page appropriée après avoir soumis le formulaire.
    }
}

