<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectcontroller extends Controller
{
    //
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
        return view('backend.project.create');
    }
    public function index()
    {
        return view('backend.project.index');
    }
    public function show()
    {
        return view('backend.project.show');
    }
    public function edit()
    {
        return view('backend.project.edit');
    }
    public function destroy()
    {

    }
}
