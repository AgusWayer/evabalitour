<?php

namespace App\Http\Controllers;

use App\Models\Library;
use App\Models\Packages;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.package.index',[
            'title' => 'Package',
            'packages' => Packages::paginate(10)
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.package.create',[
            'title' => 'Packages',
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
            'title' => 'required|string|max:255',
            'library_id' => 'required|integer|max:255',
            'features' => 'required',
            'discount' => 'required',
            'price' => 'required'
        ]);
        Packages::create($validated);

        return redirect()->route('packages.index')->with('message','Berhasil Membuat Package');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Packages $package)
    {
        return view('dashboard.package.show',[
            'title' => 'Package',
            'package' => $package
        ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Packages $package)
    {
        return view('dashboard.package.edit',[
            'title' => 'Package',
            'package' => $package,
            'images' => Library::all()
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Packages $package)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'library_id' => 'required|integer|max:255',
            'features' => 'required',
            'discount' => 'required',
            'price' => 'required'
        ]);
        $package->update($validated);
        return redirect()->route('packages.index')->with('message','Berhasil Edit Destinasi');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Packages $package)
    {
        $package->delete();
        return redirect()->route('packages.index')->with('message','Berhasil Menghapus Destinasi');
        //
    }
}
