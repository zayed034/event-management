<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
   public function index()
{
    $testimonials = Testimonial::all();
    return view('backend.testimonial.index', compact('testimonials'));
}


    public function create()
    {
        return view('backend.testimonial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'name' => 'required',
            'designation' => 'required',
        ]);

        Testimonial::create([
            'description' => $request->description,
            'name' => $request->name,
            'designation' => $request->designation,
        ]);

        return redirect()->route('backend.testimonial.index')->with('success', 'Testimonial added successfully!');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('backend.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required',
            'name' => 'required',
            'designation' => 'required',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update([
            'description' => $request->description,
            'name' => $request->name,
            'designation' => $request->designation,
        ]);

        return redirect()->route('backend.testimonial.index')->with('success', 'Testimonial updated successfully!');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return redirect()->route('backend.testimonial.index')->with('success', 'Testimonial deleted successfully!');
    }
}
