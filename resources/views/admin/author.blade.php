  @extends('layouts/main',[
    'current_page' => 'admin-authors'
])

  @section('content')

  <ul>
  @foreach ($authors as $author)
      <li>{{ $author->name }}</li>
  @endforeach
  </ul>

  @endsection






