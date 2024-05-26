<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::with(['roles'])->get();

        return view('backend.users.index', compact('users'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::pluck('title', 'id');

        return view('backend.users.create', compact('roles'));
    }


public function store(StoreUserRequest $request)
{
    $data = $request->all();

    // Calculate age from date of birth
    $dateOfBirth = Carbon::parse($request->input('date_of_birth'));
    $now = Carbon::now();
    $age = $dateOfBirth->diffInYears($now);

    // Add calculated age to the data array
    $data['age'] = $age;

    // Handle file upload if image is present in the request
    if ($request->hasFile('image')) {
        $imageFile = $request->file('image');
        $imageFileName = $imageFile->getClientOriginalName();
        $image = $imageFile->move('public/upload/user/image', $imageFileName);
        $data['photo'] = $imageFileName;
    }

    // Create user with the updated data
    $user = User::create($data);

    // Sync roles if provided in the request
    $user->roles()->sync($request->input('roles', []));

    // Redirect with success message
    return redirect()->route('admin.users.index')->with('success', 'User created successfully!');
}


    public function edit(User $user)
{
    abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    $roles = Role::pluck('title', 'id');

    // Calculate age from date of birth
    $dateOfBirth = Carbon::parse($user->date_of_birth);
    $now = Carbon::now();
    $age = $dateOfBirth->diffInYears($now);

    // Add calculated age to the user object
    $user->age = $age;

    $user->load('roles');

    return view('backend.users.edit', compact('roles', 'user'));
}

    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->all();


        if ($request->hasFile('image')) {
        $imageFile = $request->file('image');
        $imageFileName = $imageFile->getClientOriginalName();
        $image = $imageFile->move('public/upload/user/image', $imageFileName);
        $data['photo'] = $imageFileName;
       }
        $user->update($data);
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index')->with('success', 'update successful!');
    }

    public function show(User $user)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->load('roles');

        return view('backend.users.show', compact('user'));
    }
    public function toggleUserStatus(User $user)
    {
        // Toggle the user status
        $user->status = $user->status === 'active' ? 'inactive' : 'active';
        $user->save();

        return redirect()->back()->with('success', 'User status updated successfully');
    }

    public function analaysis()
{
    // $userCountsByType = DB::table('users')
    //     ->select('user_type', DB::raw('count(*) as count'))
    //     ->groupBy('user_type')
    //     ->get();

    return view('backend.users.analaysis');
    return view('dashboard', compact('userCountsByType'));
}

    public function destroy(User $user)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        // if ($user && $user->id === Auth::id()) {
        //     // Render a confirmation view for the user to confirm account deletion
        //     return view('backend.users.confirm-delete', compact('user'));
        // }

        $user->delete();

        return back()->with('success', 'User deleted successfully.');;
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        $users = User::find(request('ids'));

        foreach ($users as $user) {
            $user->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
