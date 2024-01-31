<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class userscontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
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
    public function store(Request $request): RedirectResponse
    {
       User::create($request->all());
       return redirect()->route('users.create')->with('status', 'Registration successful!');
    }
    public function index()
    {
        $users= User::all();

        return view('backend.users.index', compact('users'));
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
