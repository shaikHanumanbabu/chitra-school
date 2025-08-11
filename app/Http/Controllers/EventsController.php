<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.events.index', [
            'events' => Events::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'address' => 'required|string',
            'image' => 'required|image|max:2048', // Max 2MB
        ]);

        // ✅ Handle image upload (to public folder)
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Generate unique name with extension
            $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();

            // Move image to public/images
            $image->move(public_path('images'), $imageName);

            // Save image path (relative to public/)
            $validated['image'] = 'images/' . $imageName;
        }

        Events::create($validated);

        return redirect()->back()->with('success', 'Event created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $event)
    {
        return view('admin.events.create', [
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $event)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'address' => 'required|string',
            'image' => 'nullable|image|max:2048', // Max 2MB
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Generate unique name with extension
            $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();

            // Move image to public/images
            $image->move(public_path('images'), $imageName);

            // Save image path (relative to public/)
            $validated['image'] = 'images/' . $imageName;
        }

        // Update the event
        $event->update($validated);

        return redirect()->back()->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $event)
    {
        // Soft delete the event
        $event->delete();

        return redirect()->back()->with('success', 'Event deleted successfully.');
    }
}
