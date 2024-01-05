<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Swift_TransportException;
use Illuminate\Validation\Rules\Password as PasswordRules;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', PasswordRules::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('status', 'password-updated');
    }

    /**
     * Send password reset email.
     */
    public function sendResetLinkEmail(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
            ]);

            $response = Password::sendResetLink(
                $request->only('email')
            );

            if ($response === Password::RESET_LINK_SENT) {
                return back()->with('status', __($response));
            } else {
                return back()->withErrors(['email' => __($response)]);
            }
        } catch (Swift_TransportException $e) {
            // Catching Swift_TransportException for SMTP errors
            $errorMessage = 'Error sending password reset email. Please try again later.';
            Log::error($errorMessage . ' Exception: ' . $e->getMessage());
            Session::flash('connection_error', $errorMessage);

            return back();
        }
    }
}
