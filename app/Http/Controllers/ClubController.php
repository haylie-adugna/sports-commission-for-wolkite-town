<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clubs;
use App\Http\Requests\Clubs\CreateClubsRequest;
use App\Http\Requests\Clubs\UpdateClubsRequest;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
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
    public function index()
    {
        $clubs= clubs::all();
        return view('backend.clubs.index', compact('clubs'));
    }
    public function create()
    {
        return view('backend.clubs.create');
    }
    public function store(CreateClubsRequest $request)
{
    try {
        $data = $request->all();

        if ($request->hasFile('logo')) {
            $imageFile = $request->file('logo');
            $imageFileName = $imageFile->getClientOriginalName();
            $image = $imageFile->move('public/upload/club/logo', $imageFileName);
            $data['logo'] = $imageFileName;
        }

        $clubs = clubs::create($data);

        // Redirect to the index page with success message
        return redirect()->route('clubs.index')->with('success', 'Club created successfully');
    } catch (\Exception $e) {
        // Log the exception or handle it as needed
        return redirect()->route('clubs.index')->with('error', 'Error creating club: ' . $e->getMessage());
    }
}


    public function show($id)
    {
        $clubs= clubs::find($id);
        return view('backend.clubs.show', compact('clubs'));
    }
    public function update($id)
    {
        $clubs = clubs::find($id);
        return view('backend.clubs.update', compact('clubs'));
    }
    public function edit(UpdateClubsRequest $request, $id)
    {
        $clubs= clubs::find($id);
        $clubs->update($request->all());
        return redirect()->route('clubs.update',$id)->with('status', 'update successful!');

    }
    public function destroy($id)
    {
        // Find and delete the match record
        $clubs = clubs::find($id);
        $clubs->delete();

        // Redirect to the index page with success message
        return redirect()->route('clubs.index')->with('status', 'clubs deleted successfully');
    }
}
