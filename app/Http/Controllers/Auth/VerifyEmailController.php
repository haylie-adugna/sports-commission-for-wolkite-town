<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */

    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
            User::where('id',Auth()->id())->update([
                    'verified' => 1,
                    'email_verified_at' => Carbon::now()->toDateTimeString()
                ]);

        return redirect()->intended(RouteServiceProvider::HOME);
    }
    public function email_verfication()
    {
        if (Auth::user()->verified == false) {
            return view("auth.verify-email");
        } else {
            return redirect(RouteServiceProvider::HOME);
        }
    }

}
