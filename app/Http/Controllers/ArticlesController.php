<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Library;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.articles.index',[
            'title' => 'Articles',
            'articles' => Articles::paginate(10)
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.articles.create',[
            'title' => 'Articles',
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
            'library_id' => 'required|integer|max:100',
            'description' => 'required'
        ]);
        Articles::create($validated);
        return redirect()->route('articles.index')->with('message', 'Berhasil Mengupload Article');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Articles::findOrFail($id);
        return view('dashboard.articles.show',[
            'title' => 'Article',
            'article' => $article
        ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article  = Articles::findOrFail($id);
        return view('dashboard.articles.edit',[
            'title' => 'Articles',
            'article' => $article,
            'images' => Library::all()
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Articles::findOrFail($id);
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'library_id' => 'required|integer|max:100',
            'description' => 'required'
        ]);
        $article->update($validated);
        return redirect()->route('articles.index')->with('message', 'Berhasil Edit Article');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Articles::findOrFail($id);
        $article->delete();
        return redirect()->route('articles.index')->with('message', 'Berhasil Menghapus Article');
        //
    }
}
