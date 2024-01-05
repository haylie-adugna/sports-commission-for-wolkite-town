<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\model\user;

class userscontroller extends Controller
{
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
