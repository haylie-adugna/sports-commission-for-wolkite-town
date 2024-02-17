<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserType;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Webpatser\Countries\Countries;
use Illuminate\Support\Facades\DB;


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
    public function store(CreateUserRequest $request)
    {
       User::create($request->all());
       return redirect()->route('users.create')->with('status', 'Registration successful!');
    }
    public function index()
    {
        $users= User::with(['user_type'])->get();
        $user_type= UserType::all();

        return view('backend.users.index', compact('users'));
    }
    public function show($id)
    {
        $users= User::find($id);
        return view('backend.users.show', compact('users'));
    }
    public function edit($id)
    {
        $users= User::find($id);
        return view('backend.users.update', compact('users'));
    }
    public function update(UpdateUserRequest $request, $id)
    {
        $users= User::find($id);
        $users->update($request->all());
        return redirect()->route('users.edit',$id)->with('status', 'update successful!');

    }
    public function analaysis()
{
    $userCountsByType = DB::table('users')
        ->select('user_type', DB::raw('count(*) as count'))
        ->groupBy('user_type')
        ->get();

    return view('backend.users.analaysis', compact('userCountsByType'));
    return view('dashboard', compact('userCountsByType'));
}

    public function destroy($id)
    {
        $user = User::find($id);

    // Check if the user is trying to delete their own account
    if ($user && $user->id === Auth::id()) {
        // Render a confirmation view for the user to confirm account deletion
        return view('backend.users.confirm-delete', compact('user'));
    }

    // If the user is trying to delete another user account
    if ($user) {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }

    // If the user is not found
    return redirect()->route('users.index')->with('error', 'User not found.');
}
}
