<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Administration</title>
    <link rel="stylesheet" href="{{ asset('css/lux.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tom-select.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Agence</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      @php 
  
  $route = request()->route()->getName();

    @endphp 
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a  aria-current="page" href="{{ route('admin.property.index')}}" @class(['nav-link', 'active'=>str_contains($route, 'property')])>Gérer les biens</a>
          </li>
          <li class="nav-item">
            <a  href="{{ route('admin.option.index')}}" @class(['nav-link', 'active'=>str_contains($route, 'option')]) >Gérer les options</a>
          </li>
      
        </ul>
      </div>
    </div>
  </nav>
         <div class="container mt-5">
      @if (session('success'))

        <div class="alert alert-success">
              {{ session('success') }}
        </div>
         
      @endif

      @if ($errors->any())
      <div class="alert alert-danger">

        <ul class="my-0">
          @foreach( $errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach

        </ul>

      </div>
              
     
 
      @endif
            @yield('content')
         </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tom-select.js') }}"></script>
    <script>

      new TomSelect('select[multiple]', { plugins : {remove_button : {title: 'Supprimer'}}})
    </script>
</body>
</html>