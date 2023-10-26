


<nav>

  <a href="{{ route('index') }}"class="{{ $current_page == 'home' ? 'highlighted' : '' }}">Home</a>

  <a href="{{ route('about') }}" class="{{ $current_page == 'about-us' ? 'highlighted' : '' }}">About us</a>

  @guest
  <a href="/login">Login</a>
  <a href="/register">Register</a>
  @endguest

  @auth
  
  <a href="{{ route('admin-authors') }}" class="{{ $current_page == 'admin-authors' ? 'highlighted' : '' }}">Authors</a>

  <a href="{{ route('admin-author-create') }}" class="{{ $current_page == 'admin-authors-create' ? 'highlighted' : '' }}">Create author</a>

  

  <form action="{{ route('logout') }}" method="post">
 
    @csrf
    <br>
    <label class="logout" for="logout">{{auth()->user()->email}}</label>
    <button class="logout" name="logout" id="logout">Logout</button>
 

  </form>



  @endauth

</nav>