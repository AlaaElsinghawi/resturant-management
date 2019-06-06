<html>
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resturant</title>

    <script src="{{ asset('js/app.js') }}" defer></script> 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/welcome.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/dialog.css')}}">
  
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand sp3" href="{{route('show_website')}}">Resturant</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<form  method="get" action="{{route('search')}}" class="form-inline my-2 my-lg-0 sp2">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name='search'>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  <div class="collapse navbar-collapse sp" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Department
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('reservation',1)}}">Foods</a>
          <a class="dropdown-item" href="{{route('reservation',2)}}">Hot Drinks</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('reservation',3)}}">Col Drinks</a>
        </div>
      </li>

      <li class="nav-item">

        <a class="nav-link disabled" href="{{route('Shoping.index')}}">
      <i  class="fa fa-shopping-cart fa-3x" 4></i>cart</a>
      </li>
    </ul>
    
  </div>

</nav>

  @yield('order')

</body>
</html>