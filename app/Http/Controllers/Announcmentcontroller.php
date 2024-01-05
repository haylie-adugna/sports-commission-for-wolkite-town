<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Announcmentcontroller extends Controller
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
        return view('backend.club.create');
    }
    public function index()
    {
        return view('backend.club.index');
    }
    public function show()
    {
        return view('backend.club.show');
    }
    public function edit()
    {
        return view('backend.club.edit');
    }
    public function destroy()
    {

    }
}
