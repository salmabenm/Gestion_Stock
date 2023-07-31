<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Afficher les informations de l'utilisateur
    public function show()
    {
        $user = Auth::user();
        return view('user.show', compact('user'));
    }

    // Mettre à jour les informations de l'utilisateur
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'telephone' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',

        ]);

        $user->update($request->only('name', 'email','telephone','adresse'));

        return redirect()->route('user.show')->with('success', 'Your information has been successfully updated!');
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();
    
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);
    
        if (Hash::check($request->current_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->password),
            ]);
    
            return redirect()->route('user.show')->with('success', 'Password updated successfully.');
        }
    
        return redirect()->route('user.show')->with('error', 'Current password is incorrect.');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,',
            'telephone' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
        ]);

        Poste::create($validatedData);

        // Ajoutez ici le code pour rediriger l'utilisateur vers la page appropriée après avoir soumis le formulaire.
    }
    // Déconnecter l'utilisateur
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}

