<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Events;

use App\Http\Requests\Events\CreateEventRequest;
use App\Http\Requests\Events\UpdateEventRequest;

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
        $data = [
            'Tittle' => $request->Tittle,
            'Type' => $request->type,
            'Body' => $request->body,
            'created_by' => $request->created_by,
        ];

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageFileName = $imageFile->getClientOriginalName();
            $image = $imageFile->move('public/upload/event/image', $imageFileName);
            $data['image'] = $imageFileName;
           }

        // Handle video upload
        if ($request->hasFile('video')) {
            $videoFile = $request->file('video');
            $videoFileName = $videoFile->getClientOriginalName();
            $video =  $videoFile->move('public/upload/event/video', $videoFileName);
            $data['video'] = $videoFileName;
        }

        Events::create($data);

        return redirect()->route('events.index')->with('success', 'New Event posted successfully');
    }

    public function index()
    {
        $events= events::all();

        return view('backend.events.index', compact('events'));
    }
    public function show($id)
    {
        $events= events::find($id);
        return view('backend.events.show', compact('events'));
    }
    public function update($id)
    {
        $events = events::find($id);
        return view('backend.events.update', compact('events'));
    }
    public function edit(UpdateEventRequest $request, $id)
    {
        $events= events::find($id);
        $events->update($request->all());
        return redirect()->route('events.index',$id)->with('success', 'update successful!');

    }

    public function destroy(string $id)
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
