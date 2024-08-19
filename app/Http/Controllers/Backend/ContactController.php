<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('backend.contact');
    }

    public function submit(Request $request) {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'message' => 'required|string|max:500',
        ]);

        // Create a new contact entry
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'country' => $request->country,
            'message' => $request->message,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
