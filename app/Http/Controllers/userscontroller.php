<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class userscontroller extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        return view('backend.users.create');


    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('backend.users.create');
    }
    public function index()
    {
        return view('backend.users.index');
    }
    public function show()
    {
        return view('backend.users.show');
    }
    public function edit()
    {
        return view('backend.users.update');
    }
    public function destroy()
    {

    }
}
