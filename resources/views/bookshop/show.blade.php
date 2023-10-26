
@extends('layouts/main',[
    'current_page' => 'home'
])

@section('content')


<h2>{{ $bookshop->name }} in {{ $bookshop->city }}</h2>

List of books:

{{ $bookshop->books->pluck('title')->join(', ') }}




@endsection