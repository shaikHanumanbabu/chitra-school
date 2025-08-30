<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.carousels.index', [
            'carousels' => Carousel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carousels.create');
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
            'title_1' => 'required|string|max:255',
            'title_2' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
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

        Carousel::create($validated);

        return redirect()->back()->with('success', 'Event created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        return view('admin.carousels.create', [
            'carousel' => $carousel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carousel $carousel)
    {

        $validated = $request->validate([
            'title_1' => 'required|string|max:255',
            'title_2' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
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

        $carousel->update($validated);

        return redirect()->back()->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carousel $carousel)
    {
        //

        // Soft delete the event
        $carousel->delete();

        return redirect()->back()->with('success', 'Carousel deleted successfully.');
    }
}
