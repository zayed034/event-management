<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('backend.event', compact('events'));
    }

    public function create()
    {
        return view('backend.event-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'day' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'description' => 'required|string',
            's_name' => 'required|string|max:255',
            'seat' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('backend/img'), $imageName);
            $validated['image'] = $imageName;
        }

        Event::create($validated);

        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('backend.edit-event', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'day' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'description' => 'required|string',
            's_name' => 'required|string|max:255',
            'seat' => 'required|string|max:255',
        ]);

        $event = Event::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('backend/img'), $imageName);
            $validated['image'] = $imageName;
        }

        $event->update($validated);

        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
}

