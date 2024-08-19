<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
{
    $faqs = Faq::all();
    return view('backend.faq', compact('faqs'));
}

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Faq::create($request->all());

        return redirect()->route('backend.faq.index')->with('success', 'FAQ created successfully.');
    }

    public function edit(Faq $faq)
    {
        return view('backend.edit-faq', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $faq->update($request->all());

        return redirect()->route('backend.faq.index')->with('success', 'FAQ updated successfully.');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('backend.faq.index')->with('success', 'FAQ deleted successfully.');
    }
}
