<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bookstore</title>
  @vite('resources/css/app.scss')
</head>
<body>

  @include('common/navigation', [
    'current_page' => $current_page
    ])

  @yield('content')
<hr>
<h2>Latest books:</h2>
  <div class="main" id="latest-books">
    
  </div>


  @viteReactRefresh
  @vite('resources/js/partners.jsx')
  @vite('resources/js/latest-books.js')
</body>
</html>