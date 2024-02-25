<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Events;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\EventsNotification;
use Illuminate\Http\Exceptions\PostTooLargeException;

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
    try {
        // Your existing code for handling file uploads and form submission
        $user = User::all();
        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('image')) {
            // ... your image upload code ...
        }

        // Handle video upload
        if ($request->hasFile('video')) {
            try {
                $videoFile = $request->file('video');
                $videoFileName = $videoFile->getClientOriginalName();
                $video = $videoFile->move('public/upload/event/video', $videoFileName);
                $data['video'] = $videoFileName;
            } catch (PostTooLargeException $e) {
                // Handle the exception by redirecting back with an error message
                return redirect()->back()->with('error', 'The video file size exceeds the maximum allowed limit.');
            }
        }

        $newEvent = Events::create($data);

        // Notify users
        Notification::send($user, new EventsNotification($data['Tittle']));

        return redirect()->route('events.index')->with('success', 'New Event posted successfully');
    } catch (\Exception $e) {
        // Handle other exceptions if needed
        return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
    }
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
