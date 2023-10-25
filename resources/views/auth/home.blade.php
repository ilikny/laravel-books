{{-- <div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div> --}}
@extends('layouts/main',[
    'current_page' => 'home'
])

  @section('content')

<h1>Welcome back, {{ $user->name }}</h1>



    @endsection