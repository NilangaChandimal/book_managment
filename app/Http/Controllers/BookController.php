<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all(); 
        return view('index', compact('books')); 
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'published_year' => 'required|integer',
        ]);

        $data = $request->except('_token');

        $book = new Book;
        $book->title = $data['title'];
        $book->author = $data['author'];
        $book->published_year = $data['published_year'];
        $book->save();

        return redirect()->route('index')->with('message', 'Successfully created!');
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('show', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'Published_year' => 'required|integer',
        ]);
    
        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->Published_year = $request->input('Published_year');
        $book->save();
    
        return redirect()->route('index')->with('message', 'Successfully updated!');
    
    }

    public function destroy($id)
    {
        $book = Book::find($id);
    if ($book) {
        $book->delete();
        return redirect()->route('index')->with('message', 'Book successfully deleted!');
    }
    return redirect()->route('index')->with('error', 'Book not found.');
    }
}
