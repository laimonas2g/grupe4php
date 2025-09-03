<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('books-index');
    }

    public function edit($id)
    {
        $user = auth()->user();

        if (!$user || $user->role !== 'Admin') {
            abort(403);
        }

        $book = Book::find($id);
        return view('books.edit', ['book' => $book]);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->update($request->all());
        return redirect()->route('books-index');
    }

    public function delete($id)
    {
        $book = Book::find($id);
        return view('books.delete', ['book' => $book]);
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books-index');
    }
}