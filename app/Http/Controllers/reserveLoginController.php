<?php
use Illuminate\Support\Facades\Session;

// ...
class ContactController extends Controller
{
public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        // Authentication was successful
        $user = Auth::user();

        if (!$user->hasVerifiedEmail()) {
            // If the email is not verified, store it in the session
            Session::put('email_for_verification', $user->email);

            return redirect('/verify-email'); // Redirect to your verification page
        }

        // Email is verified, proceed with the regular login logic
        return redirect('/dashboard');
    }

    // Authentication failed
    return back()->withErrors(['email' => 'Invalid email or password']);
}}
?>
