<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.reviews.index',[
            'title' => 'Reviews',
            'reviews' => Reviews::all()
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.reviews.create',[
            'title' => 'Reviews',
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'author' => 'required|string|max:255',
            'job' => 'nullable|string|max:255',
            'description' => 'required|string|max:255'
        ]);
        Reviews::create($validated);
        return redirect()->route('reviews.index')->with('message','Berhasil Membuat Reviews');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $review = Reviews::findOrFail($id);
        return view('dashboard.reviews.show',[
            'title' => 'Review',
            'review' => $review
        ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reviews $reviews,string $id)
    {
        $review = Reviews::findOrFail($id);
        return view('dashboard.reviews.edit',[
            'title' => 'Review',
            'review' => $review
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reviews $reviews,string $id)
    {
        $review = Reviews::findOrFail($id);
        $validated = $request->validate([
            'author' => 'required|string|max:255',
            'job' => 'nullable|string|max:255',
            'description' => 'required|string|max:255'
        ]);
        $review->update($validated);
        return redirect()->route('reviews.index')->with('message','Berhasil Edit Reviews');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reviews $reviews,string $id)
    {
        $review = Reviews::findOrFail($id);
        $review->delete();
        return redirect()->route('reviews.index')->with('message','Berhasil Menghapus Reviews');
        //
    }
}
