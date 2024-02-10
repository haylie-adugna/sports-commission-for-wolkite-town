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
use App\Http\Requests\Events\CreateEventRequest;
use Illuminate\Support\Facades\DB;


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

public function store(CreateEventRequest $request)
    {
        $eventData = $request->except('file');
        $data=[
            'Tittle'=>$request->tittle,
            'Type'=>$request->type,
            'Body'=>$request->body,

           ];

        if($request->hasFile('image')){
            $filenameWithExt= $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename. '_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/videos/',$fileNameToStore);
            $data['image']=asset($path);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        Events::create($data);

        return redirect()->route('events.create')->with('status', 'Event posted successfully');
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
        try {
            $events = Events::find($id); // Find the event by ID

            // Perform any additional checks or authorization here

            $events->delete(); // Delete the event

            return redirect()->route('events.index')->with('success', 'Event deleted successfully');
        } catch (\Exception $e) {
            // Handle exceptions, e.g., if the event is not found
            return redirect()->route('events.index')->with('error', 'Failed to delete the event');
        }

    }
}
