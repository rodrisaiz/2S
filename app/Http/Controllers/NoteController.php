<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Note;
use Illuminate\View\View;
use App\Http\Requests\NoteRequest;
use Illuminate\Database\Eloquent\Collection;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $notes = Note::all();
        return view('layouts.note.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('layouts.note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteRequest $request): RedirectResponse
    {
        Note::create($request->all());

        return redirect()->route('note.index')->with('success', 'Note created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note): View              
    {
        return view('layouts.note.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note):View
    {
        return view('layouts.note.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoteRequest $request, Note $note): RedirectResponse
    {
    
        $note->update($request->all());

        return redirect()->route('note.index')->with('success', 'Note updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();

        return redirect()->route('note.index')->with('danger', 'Note deleted!');
    }
}
