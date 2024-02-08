<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Events;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class EventsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $events;

    public function __construct(Events $events)
    {
        $this->events = $events;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('backend.events.create');
    }
    public function store(Request $request): RedirectResponse
    {
       events::create($request->all());
       return redirect()->route('events.create')->with('status', 'events posted successfully');
    }
    public function index()
    {
        $events= events::all();

        return view('backend.events.index', compact('events'));
    }
    public function show()
    {
        return view('backend.events.show');
    }
    public function edit()
    {
        return view('backend.events.update');
    }
    public function destroy()
    {

    }
}
