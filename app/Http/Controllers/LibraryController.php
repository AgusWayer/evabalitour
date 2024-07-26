<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.library.index',[
            'title' => 'Library',
            'images' => Library::paginate(20)
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.library.create',[
            'title' => 'Upload Image'
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $imgPath = $request->file('image')->store('images', 'public');
            $validated['image'] = $imgPath;
        } else {
            return redirect()->back()->withErrors(['image' => 'Image upload failed'])->withInput();
        }
        Library::create($validated);
        return redirect()->route('library.index')->with('message', 'Berhasil Mengupload Image');

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Library $library)
    {
        return view('dashboard.library.show',[
            'title' => 'Library',
            'image' => $library
        ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Library $library)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Library $library)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Library $library)
    {
        if($library->image){
            Storage::disk('public')->delete($library->image);
           }
        $library->delete();
        return redirect()->route('library.index')->with('message','Image berhasil dihapus');
        //
    }
}
