<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Http\Requests\AuthorRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\Collection;

class AuthorController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $authors = Author::all();
        return view('layouts.author.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('layouts.author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthorRequest $request): RedirectResponse
    {
        Author::create($request->all());

        return redirect()->route('author.index')->with('success', 'Author created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author): View              
    {
        return view('layouts.author.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author):View
    {
        return view('layouts.author.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AuthorRequest $request, Author $author): RedirectResponse
    {
    
        $author->update($request->all());

        return redirect()->route('author.index')->with('success', 'Author updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author): RedirectResponse
    {
        $author->delete();

        return redirect()->route('author.index')->with('danger', 'Author deleted!');
    }
}

