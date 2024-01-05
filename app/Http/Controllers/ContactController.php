<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Assuming you have a Contact model

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|max:500',
        ]);

        // Save the contact message to the database (you need to have a Contact model for this)
        Contact::create($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('status', 'Message submitted successfully!');

    }
}
