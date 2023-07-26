<?php

// UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'string|max:255',
            'email' => 'email|max:255',
            'telephone' => 'string|max:255',
            'adresse' => 'string|max:255',
        ]);

        User::create($validatedData);

        // Add code here to redirect the user to the appropriate page after submitting the form.
    }
    public function update(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
        ]);

        // Retrieve the currently authenticated user
        $user = Auth::user();

        // Update the user information
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'telephone' => $request->input('telephone'),
            'adresse' => $request->input('adresse'),
        ]);

        // Redirect back to the update information page or wherever you want
        return redirect()->route('dashboard')->with('success', 'User information updated successfully.');
    }
}

