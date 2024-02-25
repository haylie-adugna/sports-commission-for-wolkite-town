<?php
namespace App\Http\Controllers;
use App\Models\contact;

use Illuminate\Http\Request;


class ContactController extends Controller
{
    /**
     * Show the contact form.
     */
    public function showForm()
    {
        return view('common.contact');
    }
    public function aboutAs()
    {
        return view('frontend.aboutas');
    }

    /**
     * Store the contact form submission.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|max:500',
        ]);

        // Process the validated data (e.g., send email, save to database, etc.)

        // Redirect the user back with a success message
        return redirect()->back()->with('status', 'Your message has been sent successfully!');
    }
}
