
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
<form action="{{ route('book.review', $book->id)}}" method="post">
  @csrf
  Write a review:
  <br>
  <textarea name="text" ></textarea>
   <br>

  <button>Submit</button>


</form>
@endauth

{{-- <h3>Reviews:</h3>
<ul>
@foreach ($reviews as $review )
<li>{{$review->text}}</li>


@endforeach
</ul> --}}

@endsection