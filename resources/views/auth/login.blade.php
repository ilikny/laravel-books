{{-- <div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
</div> --}}
<h1>Login</h1>



<form action="{{ route('login') }}" method="post">
 
    @csrf
 
    Email:
    <br>
    <input type="email" name="email" value="{{ old('email') }}">
    <br>
 

    Pass:
    <br>
    <input type="password" name="password" value="">
    <br>

 
    <br>
    <button>Login</button>
 
</form>