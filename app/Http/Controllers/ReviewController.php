<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
  public function store(Request $request, $book_id = null)
  {

    $review = new Review();
    $review->book_id = $book_id;
    $review->user_id = auth()->user()->id;
    $review->text = $request->input('text');
    $review->save();

    return redirect()->route('book.detail', $book_id);
  }


  public function allReviews($book_id)
  {
    $reviews = Review::query()
      ->where('book_id', $book_id)
      ->orderBy('created_at')
      ->get();

    return view('books.detail', compact('reviews'));
  }
}
