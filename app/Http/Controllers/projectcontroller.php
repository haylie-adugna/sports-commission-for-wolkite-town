<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\Http\Requests\Projects\CreateProjectRequest;
use App\Http\Requests\Projects\UpdateProjectRequest;
use Illuminate\Support\Facades\DB;

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
    public function store(CreateProjectRequest $request)
{
        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageFileName = $imageFile->getClientOriginalName();

            // Ensure the destination directory exists
            $destinationPath = public_path('upload/project/image');

            // Move the file to the specified path
            $imageFile->move($destinationPath, $imageFileName);

            // Update the data with the correct field name
            $data['logo'] = $imageFileName;
        }

        $projects = projects::create($data);

        // Redirect to the index page with success message
        return redirect()->route('project.index')->with('success', 'Project created successfully');

}
    public function index()
    {
        $projects = Projects::all();
        return view('backend.project.index', compact('projects'));
    }

    public function show($id)
    {
        $projects= projects::find($id);
        return view('backend.project.show', compact('projects'));
    }
    public function update($id)
    {
        $projects = projects::find($id);
        return view('backend.project.update', compact('projects'));
    }
    public function edit(UpdateProjectRequest $request, $id)
    {
        $projects = projects::find($id);
        $projects->update($request->all());
        return redirect()->route('project.update',$id)->with('success', 'update successful!');

    }
    public function destroy($id)
    {
        // Find and delete the match record
        $projects = projects::find($id);
        $projects->delete();

        // Redirect to the index page with success message
        return redirect()->route('project.index')->with('status', 'project deleted successfully');
    }
}
