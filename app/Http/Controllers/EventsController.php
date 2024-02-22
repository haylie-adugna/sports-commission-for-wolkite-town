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
            'Tittle' => $request->tittle,
            'Type' => $request->type,
            'Body' => $request->body,
            'created_by' => $request->created_by,
        ];

        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $fileType = $request->file('image')->getClientMimeType(); // Get the file type (image or video)

            if (strpos($fileType, 'image') !== false) {
                $path = $request->file('image')->storeAs('public/image/', $fileNameToStore);
                $data['photo'] = asset('storage/image/' . $fileNameToStore);
            } elseif (strpos($fileType, 'video') !== false) {
                $path = $request->file('image')->storeAs('public/video/', $fileNameToStore);
                $data['video'] = asset('storage/video/' . $fileNameToStore);
            }
        } else {
            $fileNameToStore = 'noimage.jpg';
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
