<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(Request $request)
    {
        // $books = Book::orderBy('id', 'desc')->paginate(7);
        
        // dd(Book::orderBy('id', 'desc')->get()->map(fn($b) => $b->pages)->filter(fn($p) => $p > 200)->count());

        $sort = $request->input('sort');
        $show_all = $request->input('show_all') ?? 0;
        $min_pages = $request->input('min_pages') ?? 100;

        $sql = Book::query();

        $sql = match($sort) {
            'author' => $sql->join('authors', 'books.author_id', '=', 'authors.id')
                            ->orderBy('authors.name')
                            ->select('books.*'),
            'title' => $sql->orderBy('title'),
            'pages' => $sql->orderBy('pages'),
            default => $sql,
        };

        if ($min_pages) {
            // $sql = $sql->where('pages', '>=', $min_pages);
            $sql = $sql->whereRaw('pages >= ?', [$min_pages]);
        }

        if ($show_all) {
            $books = $sql->get();
        } else {
            $books = $sql->paginate(7)->withQueryString();
        }
        

        return view('books.index', [
            'books' => $books,
            'sort' => $sort,
            'show_all' => $show_all,
            'min_pages' => $min_pages,
        ]);
    }

    public function create()
    {
        $authors = Author::orderBy('name')->get();
        return view('books.create', ['authors' => $authors]);
    }

    public function store(StoreBookRequest $request)
    {
        Book::create($request->validated());
        return redirect()->route('books-index');
    }

    public function edit($id)
    {
        $user = auth()->user();

        if (!$user || $user->role !== 'Admin') {
            abort(403);
        }

        $authors = Author::all();
        $book = Book::find($id);
        return view('books.edit', ['book' => $book, 'authors' => $authors]);
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