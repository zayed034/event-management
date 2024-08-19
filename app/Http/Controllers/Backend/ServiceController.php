<?php

// app/Http/Controllers/Backend/ServiceController.php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('backend.service', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'm_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            't_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'description' => 'required|string',
            'list_text' => 'required|string|max:255',
        ]);

        $service = new Service();
        $service->m_image = $this->uploadImage($request->file('m_image'));
        $service->t_image = $this->uploadImage($request->file('t_image'));
        $service->title = $request->title;
        $service->sub_title = $request->sub_title;
        $service->description = $request->description;
        $service->list_text = $request->list_text;
        $service->save();

        return redirect()->route('services.index')->with('success', 'Service added successfully!');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.edit_service', compact('service'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'm_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            't_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'description' => 'required|string',
            'list_text' => 'required|string|max:255',
        ]);

        $service = Service::findOrFail($id);

        if ($request->hasFile('m_image')) {
            Storage::delete($service->m_image);
            $service->m_image = $this->uploadImage($request->file('m_image'));
        }

        if ($request->hasFile('t_image')) {
            Storage::delete($service->t_image);
            $service->t_image = $this->uploadImage($request->file('t_image'));
        }

        $service->title = $request->title;
        $service->sub_title = $request->sub_title;
        $service->description = $request->description;
        $service->list_text = $request->list_text;
        $service->save();

        return redirect()->route('services.index')->with('success', 'Service updated successfully!');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        Storage::delete($service->m_image);
        Storage::delete($service->t_image);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully!');
    }

    private function uploadImage($file)
    {
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/backend/img', $filename);
        return 'backend/img/' . $filename;
    }
}
