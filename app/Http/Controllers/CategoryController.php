<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Category;
use Illuminate\View\View;
use App\Http\Requests\CategoryRequest;
use Illuminate\Database\Eloquent\Collection;

class CategoryController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $categories = Category::all();
        return view('layouts.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('layouts.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request): RedirectResponse
    {
        Category::create($request->all());

        return redirect()->route('category.index')->with('success', 'Category created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category): View              
    {
        return view('layouts.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category):View
    {
        return view('layouts.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
    
        $category->update($request->all());

        return redirect()->route('category.index')->with('success', 'Category updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();

        return redirect()->route('category.index')->with('danger', 'Category deleted!');
    }
}