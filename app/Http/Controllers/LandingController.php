<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Author;
use App\Models\Category;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function home()
    {   
        
        $notes = Note::all();
        $authors = Author::all();
        $categories = Category::all();

    return view('index', ['notes' => $notes, 'authors' => $authors, 'categories' => $categories]);
   
    }

    
}
