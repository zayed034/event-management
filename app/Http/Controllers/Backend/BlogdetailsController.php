<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogdetails;

class BlogdetailsController extends Controller
{
    public function index()
    {
        $blogs = Blogdetails::all();
        return view('backend.blog-details', compact('blogs'));
    }

    public function create()
    {
        return view('backend.blog-details.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            's_title' => 'required',
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date_time' => 'required|date',
            'category' => 'required',
            'description' => 'required',
            'd_title' => 'required',
            'list' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/backend/img');
            $validatedData['image'] = $imagePath;
        }

        Blogdetails::create($validatedData);

        return redirect()->route('blog-details.index')->with('success', 'Blog entry created successfully.');
    }

    public function edit($id)
    {
        $blogdetails = Blogdetails::findOrFail($id);
        return view('backend.blog-details.edit-blogdetails', compact('blogdetails'));
    }

    public function update(Request $request, $id)
    {
        $blogdetails = Blogdetails::findOrFail($id);

        $validatedData = $request->validate([
            's_title' => 'required',
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date_time' => 'required|date',
            'category' => 'required',
            'description' => 'required',
            'd_title' => 'required',
            'list' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/backend/img');
            $validatedData['image'] = $imagePath;
        }

        $blogdetails->update($validatedData);

        return redirect()->route('blog-details.index')->with('success', 'Blog entry updated successfully.');
    }

    public function destroy($id)
    {
        $blogdetails = Blogdetails::findOrFail($id);
        $blogdetails->delete();

        return redirect()->route('blog-details.index')->with('success', 'Blog entry deleted successfully.');
    }
}
