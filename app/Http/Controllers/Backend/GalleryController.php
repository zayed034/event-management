<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index() {
        $galleries = Gallery::all();
        return view('backend.gallery', compact('galleries'));
    }

    public function store(Request $request) {
        $request->validate([
            'gallery' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'link' => 'required|url',
        ]);

        $gallery = new Gallery();
        if ($request->hasFile('gallery')) {
            $fileName = time().'.'.$request->gallery->extension();  
            $request->gallery->move(public_path('backend/img'), $fileName);
            $gallery->gallery = 'backend/img/' . $fileName;
        }

        $gallery->title = $request->title;
        $gallery->name = $request->name;
        $gallery->date = $request->date;
        $gallery->link = $request->link;
        $gallery->save();

        return redirect()->route('backend.gallery.index')->with('success', 'Gallery added successfully.');
    }

    public function edit($id) {
        $gallery = Gallery::findOrFail($id);
        return view('backend.gallery-edit', compact('gallery'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'gallery' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'link' => 'required|url',
        ]);

        $gallery = Gallery::findOrFail($id);
        if ($request->hasFile('gallery')) {
            $fileName = time().'.'.$request->gallery->extension();  
            $request->gallery->move(public_path('backend/img'), $fileName);
            $gallery->gallery = 'backend/img/' . $fileName;
        }

        $gallery->title = $request->title;
        $gallery->name = $request->name;
        $gallery->date = $request->date;
        $gallery->link = $request->link;
        $gallery->save();

        return redirect()->route('backend.gallery.index')->with('success', 'Gallery updated successfully.');
    }

    public function destroy($id) {
        $gallery = Gallery::findOrFail($id);
        if (file_exists(public_path($gallery->gallery))) {
            unlink(public_path($gallery->gallery));
        }
        $gallery->delete();

        return redirect()->route('backend.gallery.index')->with('success', 'Gallery deleted successfully.');
    }
}
