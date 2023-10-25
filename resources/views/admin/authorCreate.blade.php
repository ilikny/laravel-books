
@extends('layouts/main',[
    'current_page' => 'admin-authors-create'
])

  @section('content')

  <h2>Create new author:</h2>
  <form action="{{ route('admin-author-store') }}" method="post">
    @csrf

   <label>Firtst name:</label>
    <br>
    <input name="fname" />
    <br>
    <label>Surname:</label>
    <br>
    <input name="surname" />
    <br>
    <label>Bio:</label>
    <br>
    <input name="bio" />
    <br>
    <br>
    <button>Create</button>



  </form>

  @endsection

  