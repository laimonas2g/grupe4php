<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        
        sleep(3); // Simulate a delay for testing purposes

        return Book::all();

    }
}