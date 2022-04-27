<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>laravel-base-crud</title>
</head>
<body>
  <div class="container my-3">
    <a href="{{route('comics.index')}}" class="p-2 btn-secondary border my-5 rounded">Comics List</a>
  </div>

  @yield('content')

  
</body>
</html>