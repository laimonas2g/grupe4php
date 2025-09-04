<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        return view('authors.index');
    }

    public function list()
    {
        // sleep(2);

        $authors = Author::orderBy('id', 'desc')->paginate(7);

        $list = view('authors.list')->with('authors', $authors)->render();
        
        return response()->json([
            'html' => $list,
            'success' => true
        ]);
    }

    public function create()
    {
        // sleep(2);

        $form = view('authors.create')->render();

        return response()->json([
            'html' => $form,
            'success' => true
        ]);
    }

    public function store(Request $request)
    {
        $author = Author::create($request->all());

        return response()->json([
            'success' => true
        ]);
    }

    public function delete($id)
    {
        $author = Author::find($id);
 
        $modal = view('authors.delete')->with('author', $author)->render();
 
        return response()->json([
            'success' => true,
            'html' => $modal
        ]);
    }

    public function destroy(Author $author)
    {
        $author->delete();
 
        return response()->json([
            'success' => true
        ]);
    }

    public function edit(Author $author)
    {
        $form = view('authors.edit')->with('author', $author)->render();
        return response()->json([
            'html' => $form,
            'success' => true
        ]);
    }

    public function update(Request $request, Author $author)
    {
        $author->update($request->all());

        return response()->json([
            'success' => true
        ]);
    }
}
