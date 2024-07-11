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

        $book = new Book();

        if($request->hasfile('image'))
        {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('img'), $imageName);
        }

        else
        {
            $imageName = '1.jpg';
        }

        $book->object = $request->object;
        $book->image = 'img/'.$imageName;
        $book->description = $request->description;
        $book->color = $request->color;
        $book->location = $request->location;
        $book->idcard = $request->idcard;

        $book->save();

        /*Book::create([
            'object' =>$request->input('object'),
            'description' =>$request->input('description'),
            'color' =>$request->input('color'),
            'location' =>$request->input('location'),
            'idcard' =>$request->input('idcard'),
        ]);*/
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
            'image' => 'image',
            'description' => 'required',
            'color' => 'required|max:255',
            'location' => 'required',
            'idcard' => 'required|max:255',
        ]);

        $book = Book::find($id);
        $image_old = $book->image;

        if($request->image != '')
        {
            $path = public_path().'/img/';

            $image = $request->image;
            $imageName = time().'.'.$request->image->extension();
            $image->move($path, $imageName);
            $imageName = 'img/'.$imageName;

            $book->update(['image' => $imageName]);
        }

        else
        {
            $imageName = $image_old;
        }

        $book->object = $request->object;
        $book->image = $imageName;
        $book->description = $request->description;
        $book->color = $request->color;
        $book->location = $request->location;
        $book->idcard = $request->idcard;

        $book->update();

        //$book->update($request->all());
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
