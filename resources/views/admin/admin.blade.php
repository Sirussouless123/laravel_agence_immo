<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Administration</title>
    <link rel="stylesheet" href="{{ asset('css/lux.css') }}">
</head>
<body>
         <div class="container mt-5">
      @if (session('success'))

        <div class="alert alert-success">
              {{ session('success') }}
        </div>
         
      @endif
            @yield('content')
         </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>