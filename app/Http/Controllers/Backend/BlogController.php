<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('backend.blog', compact('blogs'));
    }

    public function create()
    {
        return view('backend.blog');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Date_time' => 'required',
            'image' => 'required|image',
            'sub_title' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('backend/img'), $filename);
            $validatedData['image'] = $filename;
        }

        Blog::create($validatedData);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    public function edit(Blog $blog)
    {
        return view('backend.edit-blog', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'Date_time' => 'required',
            'image' => 'image',
            'sub_title' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('backend/img'), $filename);
            $validatedData['image'] = $filename;
        }

        $blog->update($validatedData);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
