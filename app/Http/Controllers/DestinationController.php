<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use App\Models\Destinations;

class DestinationController extends Controller
{
    private function getSharedData(){
        $library = Library::all();
        return [
            'images'=>$library
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destinations::paginate(10);
        return view('dashboard.destinations.index',[
            'title' => 'Destinations',
            'destinations' => $destinations
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sharedData = $this->getSharedData();
        return view('dashboard.destinations.create',array_merge([
            'title' => 'Add Destinations',
        ],$sharedData));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category'=>'required|string|max:255',
            'library_id' => 'required|integer|min:1|max:255',
            'description' => 'required'
        ]);
        Destinations::create($validated);
        return redirect()->route('destinations.index')->with('message','Berhasil Membuat Destinasi');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $destination = Destinations::findOrFail($id);
        return view('dashboard.destinations.show',[
            'title' => 'Destination',
            'destination' => $destination
        ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sharedData = $this->getSharedData();
        $destination = Destinations::findOrFail($id);
        return view('dashboard.destinations.edit',array_merge([
            'title' => 'Edit Destination',
            'destination' => $destination,
        ],$sharedData));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $destination = Destinations::findOrFail($id);
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category'=>'required|string|max:255',
            'library_id' => 'required|integer|min:1|max:255',
            'description' => 'required'
        ]);
        $destination->update($validated);
        return redirect()->route('destinations.index')->with('message','Berhasil Edit Destinasi');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destination = Destinations::findOrFail($id);
        $destination->delete();
        return redirect()->route('destinations.index')->with('message','Berhasil Menghapus Destinasi');
        //
    }
}
