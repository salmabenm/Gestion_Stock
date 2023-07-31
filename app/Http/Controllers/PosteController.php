<?php

// PosteController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poste;

class PosteController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'poste' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $user->update($request->only('poste', 'location'));

        return redirect()->route('user.show')->with('success', 'Your information has been successfully updated!');
    }
    
}

