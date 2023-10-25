<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
  public function latest()
  {
    $books = Book::query()
      ->orderBy('publication_date', 'desc')
      ->limit(10)
      ->get();

    return $books;
  }

  public function search(Request $request)
  {
    $search = $request->query('search');

    $searchbook = Book::query()
      ->where('title', 'like', "%{$search}%")
      ->limit(20)
      ->get();

    return $searchbook;
  }
}
