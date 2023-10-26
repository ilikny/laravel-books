<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;

class BookController extends Controller
{

  public function show($book_id)
  {
    $book = Book::findOrFail($book_id);

    $reviews = Review::where('book_id', $book_id)
      ->orderBy('created_at')
      ->get();

    return view('books.detail', compact('book', 'reviews'));
  }
}
