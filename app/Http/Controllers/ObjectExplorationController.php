<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ObjectExplorationController extends BookController
{
    public function explore()
    {
        $books = Book::all();
        return view('books.explore', compact('books'));
    }

    public function show(string $id)
    {
        $book = Book::find($id);
        return view('books.show', compact('book'));
    }
}
