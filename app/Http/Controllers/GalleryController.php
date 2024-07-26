<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Library;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.gallery.index',[
            'title' => 'Gallery',
            'images' => Gallery::paginate(20)
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.gallery.create',[
            'title' => 'Gallery',
            'images' => Library::all()
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'library_id' => 'required|integer'
        ]);
        Gallery::create($validated);
        return redirect()->route('gallery.index')->with('message', 'Berhasil Mengupload Image');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return view('dashboard.gallery.show',[
            'title' => 'Gallery',
            'image' => $gallery
        ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('gallery.index')->with('message', 'Berhasil Menghapus Image');
        //
    }
}
