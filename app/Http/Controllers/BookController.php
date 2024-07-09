<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function explore()
    {
        $books = Book::all();
        return view('books.explore', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'object' => 'required|max:255',
            'description' => 'required',
            'color' => 'required|max:255',
            'location' => 'required',
            'idcard' => 'required|max:255',
        ]);
        Book::create($request->all());
        return redirect()->route('books.index')
          ->with('success','Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return view('books.show', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'object' => 'required|max:255',
            'description' => 'required',
            'color' => 'required|max:255',
            'location' => 'required',
            'idcard' => 'required|max:255',
        ]);
        $book = Book::find($id);
        $book->update($request->all());
        return redirect()->route('books.index')
          ->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books.index')
          ->with('success', 'Book deleted successfully');
    }

    public function create()
    {
        return view('books.create');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }
}
