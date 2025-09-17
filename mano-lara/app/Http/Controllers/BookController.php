<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        
        sleep(3); // Simulate delay
        
        return Book::all();

    }

    public function store(Request $request) {

        sleep(3); // Simulate delay

        abort(422, 'Simulated error');

        $book = Book::create($request->all());
        return response()->json(['id' => $book->id], 201);
    }

    public function destroy($id) {

        sleep(3); // Simulate delay

        // abort(422, 'Simulated error');

        Book::findOrFail($id)->delete();
        return response()->json(null, 204);
    }

    public function update(Request $request, $id) {

        sleep(3); // Simulate delay

        abort(422, 'Simulated error');

        $book = Book::findOrFail($id);
        $book->update($request->all());
        return response()->json(null, 204);
    }
}