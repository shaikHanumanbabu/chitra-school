<?php

namespace App\Http\Controllers;

use App\Models\Competation;
use Illuminate\Http\Request;

class CompetationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.competations.index', [
            'competations' => Competation::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.competations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated_data = $request->validate([
            'title' => 'required',
            'entry_fee' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        Competation::create($validated_data);

        return redirect()->route('admin.competations.index')->with('success', 'Competition created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Competation  $competation
     * @return \Illuminate\Http\Response
     */
    public function show(Competation $competation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Competation  $competation
     * @return \Illuminate\Http\Response
     */
    public function edit(Competation $competation)
    {
        return view('admin.competations.create', [
            'competation' => $competation
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Competation  $competation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competation $competation)
    {
        $validated_data = $request->validate([
            'title' => 'required',
            'entry_fee' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $competation->update($validated_data);

        return redirect()->route('admin.competations.index')->with('success', 'Competition updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Competation  $competation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competation $competation)
    {
        // Soft delete the event
        $competation->delete();

        return redirect()->back()->with('success', 'Competation deleted successfully.');
    }
}
