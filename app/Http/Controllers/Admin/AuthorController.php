<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
  public function index()
  {
    $authors = Author::query()
      ->orderBy('id', 'desc')
      ->limit(50)
      ->get();

    return view('admin.author', compact('authors'));
  }

  public function create()
  {
    $author = new Author;

    return view('admin.authorCreate', compact('author'));
  }

  public function store(Request $request)
  {
    $author = new Author;
    $author->slug = $request->input('fname') . '-' . $request->input('surname') . '-author';
    $author->name = $request->input('fname') . ' ' . $request->input('surname');
    $author->bio = '<p>' . $request->input('bio') . '</p>';
    $author->save();

    return redirect()->route('admin-authors');
  }
}
