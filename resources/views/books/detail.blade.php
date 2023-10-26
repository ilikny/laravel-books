
@extends('layouts/main',[
    'current_page' => 'home'
])

@section('content')

<h2>{{ $book->title }}</h2>
<h3>{{$book->authors->pluck('name')->join(', ') }}</h3>
<img src="{{ $book->image }}" alt="">
<h3>{{ $book->price }}$</h3>
{{ $book->description }}
<br>
<br>
<br>

@auth
<a class="reviews" href="{{route('allReviews', $book->id)}}">Show reviews</a>
<br>
@include('common/errors')

<form action="{{ route('book.review', $book->id)}}" method="post">
  @csrf
  Write a review:
  <br>
  <textarea name="text" ></textarea>
  <br>
  
  <button>Submit</button>
  

</form>
{{-- @include('books.review') --}}
@endauth


@endsection