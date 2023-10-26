@extends('layouts/main', [
    'current_page' => 'home'
])

@section('content')



  <h1>Welcome to the Bookstore</h1>
  <p>Explore our wide range of books to find your next great read.</p>

  @include('common.search')

  <h2>Crime books:</h2>
  <div class="books">
  @foreach ($crime_books as $book)
  <a href="/book/{{ $book->id }}">
    <div class="book">
        <h4><strong>{{ $book->title }}</strong></h4>
        <p> {{$book->authors->pluck('name')->join(', ') }} </p>
        <img src="{{ $book->image }}" alt="">
        <p>{{ $book->price }}$</p>
    </div>
    </a>


@endforeach
</div>

<div id="partners">
    
</div>

@endsection