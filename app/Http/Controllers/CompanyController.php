<?php

// CompanyController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'company' => 'required|string|max:255',
            'addcompany' => 'required|string|max:255',
            'emcompany' => 'required|email|max:255',
            'phcompany' => 'required|string|max:255',
        ]);

        Company::create($validatedData);

        // Add code here to redirect the user to the appropriate page after submitting the form.
    }
}
