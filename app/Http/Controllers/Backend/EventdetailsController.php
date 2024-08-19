<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Eventdetails;
use Illuminate\Http\Request;

class EventdetailsController extends Controller
{
    public function index()
    {
        $eventdetails = Eventdetails::all();
        return view('backend.event-details', compact('eventdetails'));
    }

    public function store(Request $request)
    {
        $request->validate([
            's_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'e_date' => 'required|date',
            'e_time' => 'required',
            'location' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('backend/img'), $imageName);

        Eventdetails::create([
            's_title' => $request->s_title,
            'title' => $request->title,
            'image' => $imageName,
            'e_date' => $request->e_date,
            'e_time' => $request->e_time,
            'location' => $request->location,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Event details created successfully.');
    }

    public function edit($id)
    {
        $eventdetail = Eventdetails::find($id);
        return view('backend.edit-event-details', compact('eventdetail'));
    }

    public function update(Request $request, $id)
    {
        $eventdetail = Eventdetails::find($id);

        $request->validate([
            's_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'e_date' => 'required|date',
            'e_time' => 'required',
            'location' => 'required|string|max:255',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('backend/img'), $imageName);
            $eventdetail->image = $imageName;
        }

        $eventdetail->update([
            's_title' => $request->s_title,
            'title' => $request->title,
            'e_date' => $request->e_date,
            'e_time' => $request->e_time,
            'location' => $request->location,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Event details updated successfully.');
    }

    public function destroy($id)
    {
        $eventdetail = Eventdetails::find($id);
        $eventdetail->delete();

        return redirect()->back()->with('success', 'Event details deleted successfully.');
    }
}
