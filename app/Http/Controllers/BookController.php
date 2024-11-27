<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\LostObjectsImport;
use App\Exports\LostObjectsExport;

class BookController extends Controller implements ConcreteObject
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

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

        return redirect()->route('books.index')
          ->with('success','Book created successfully.');
    }

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

            if ($image_old !== 'img/1.jpg' && file_exists(public_path($image_old)))
            {
                unlink(public_path($image_old));
            }

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

        return redirect()->route('books.index')
          ->with('success', 'Book updated successfully.');
    }

    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books.index')
          ->with('success', 'Book deleted successfully');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $books = Book::where('object', 'like', "%$search%")->get();

        return view('books.explore', ['books' => $books]);
    }

    public function adminSearch(Request $request)
    {
        $search = $request->input('adminSearch');
        $books = Book::where('object', 'like', "%$search%")->get();

        return view('books.index', ['books' => $books]);
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

    public function import(Request $request)
    {
        $request->validate([ 'file' => 'required|mimes:xlsx', ]);

        Excel::import(new LostObjectsImport, $request->file('file'));
        
        return back()->with('success', 'Objetos importados exitosamente.');
    }

    public function export()
    {
        return Excel::download(new LostObjectsExport, 'lost_objects.xlsx');
    }
}
