<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Speaker;

class SpeakerController extends Controller
{
    public function index()
    {
        $speakers = Speaker::all();
        return view('backend.speaker', compact('speakers'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'm_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required',
            'name' => 'required',
            'experience' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('m_image')) {
            $input['m_image'] = $request->file('m_image')->store('backend/img', 'public');
        }

        if ($request->hasFile('image')) {
            $input['image'] = $request->file('image')->store('backend/img', 'public');
        }

        Speaker::create($input);

        return redirect()->back()->with('success', 'Speaker added successfully.');
    }

    public function edit($id)
    {
        $speaker = Speaker::find($id);
        return view('backend.edit-speaker', compact('speaker'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'm_image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required',
            'name' => 'required',
            'experience' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $speaker = Speaker::find($id);
        $input = $request->all();

        if ($request->hasFile('m_image')) {
            $input['m_image'] = $request->file('m_image')->store('backend/img', 'public');
        }

        if ($request->hasFile('image')) {
            $input['image'] = $request->file('image')->store('backend/img', 'public');
        }

        $speaker->update($input);

        return redirect()->route('speakers.index')->with('success', 'Speaker updated successfully.');
    }

    public function destroy($id)
    {
        $speaker = Speaker::find($id);
        $speaker->delete();

        return redirect()->route('speakers.index')->with('success', 'Speaker deleted successfully.');
    }
}
