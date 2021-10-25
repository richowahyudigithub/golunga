<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>lungo v1</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.2/css/boxicons.min.css'>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="overlay"></div>

<div class="utility-nav d-none d-md-block">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <p><a href="#" class="badge badge-light"><i class="bx bxs-download"></i> Download Lungo App</a> | <a href="#" class="badge badge-light"><i class="bx bx-envelope"></i> mail@lunga.com</a>
        </p>
      </div>

      <div class="col-12 col-md-6 text-right">
        <p>
          <a href="#" class="badge badge-light">Tentang Lungo</a> |
          <a href="#" class="badge badge-light">Mitra Lungo</a> |
          <a href="#" class="badge badge-light">Mulai Travel</a> |
          <a href="#" class="badge badge-light">Promo</a> |
          <a href="#" class="badge badge-light">Lungo Care</a>
        </p>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-md navbar-light bg-light main-menu" style="box-shadow:none">
  <div class="container">

    <button type="button" id="sidebarCollapse" class="btn btn-link d-block d-md-none">
                <i class="bx bx-menu icon-single"></i>
            </button>

    <a class="navbar-brand" href="{{ url('/') }}">
      <h4 class="font-weight-bold">L U N G O</h4>
    </a>

    <ul class="navbar-nav ml-auto d-block d-md-none">
      <li class="nav-item">
        <a class="btn btn-link" href="#"><i class="bx bxs-cart icon-single"></i> <span class="badge badge-danger">3</span></a>
      </li>
    </ul>

    <div class="collapse navbar-collapse">
      <form class="form-inline my-2 my-lg-0 mx-auto">
        <input class="form-control" type="search" placeholder="Pencarian..." aria-label="Search">
        <button class="btn btn-outline-primary" type="submit"><i class="bx bx-search-alt"></i></button>
      </form>

      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="btn btn-link" href="#"><i class="bx bxs-cart icon-single"></i> <span class="badge badge-danger">3</span></a>
        </li>
        @if (Route::has('login'))
        @auth
        <li class="nav-item ml-md-3">
          <a class="btn btn-outline-primary" href="{{ url('/home') }}">Home</a> 
        </li>
        @else
        <li class="nav-item ml-md-3">
          <a class="btn btn-outline-primary" href="{{ route('login') }}">{{ __('Login') }}</a> 
        </li>
        @if (Route::has('register'))
        <li class="nav-item ml-md-3">
          <a class="btn btn-outline-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @endauth
        
        @endif
                       
      </ul>
    </div>

  </div>
</nav>

<nav class="navbar navbar-expand-md navbar-light bg-light sub-menu">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Travel </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tiket Kai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tiket Pesawat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tiket Hotel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Open Trip</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="search-bar d-block d-md-none">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form class="form-inline mb-3 mx-auto">
          <input class="form-control" type="search" placeholder="Search for products..." aria-label="Search">
          <button class="btn btn-outline-primary" type="submit"><i class="bx bx-search"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Sidebar -->
<nav id="sidebar">
  <div class="sidebar-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-10 pl-0">
          <a class="btn btn-outline-primary" href="#"> Masuk</a>
          <a class="btn btn-outline-primary" href="#"> Daftar</a>
        </div>
        

        <div class="col-2 text-left">
          <button type="button" id="sidebarCollapseX" class="btn btn-link">
                            <i class="bx bx-x icon-single"></i>
                        </button>
        </div>
      </div>
    </div>
  </div>

  <ul class="list-unstyled components links">
    <li>
      <a href="#"><i class="bx bx-carousel mr-3"></i> Travel</a>
    </li>
    <li>
      <a href="#"><i class="bx bx-carousel mr-3"></i> Tiket Kai</a>
    </li>
    <li>
      <a href="#"><i class="bx bx-book-open mr-3"></i> Tiket Pesawat</a>
    </li>
    <li>
      <a href="#"><i class="bx bx-crown mr-3"></i> Tiket Hotel</a>
    </li>
    <li>
      <a href="#"><i class="bx bx-crown mr-3"></i> Open Trip</a>
    </li>
    <li>
      <a href="#"><i class="bx bx-phone mr-3"></i> Contact</a>
    </li>
  </ul>



  <!-- <ul class="social-icons">
    <li><a href="#" target="_blank" title=""><i class="bx bxl-facebook-square"></i></a></li>
    <li><a href="#" target="_blank" title=""><i class="bx bxl-twitter"></i></a></li>
    <li><a href="#" target="_blank" title=""><i class="bx bxl-linkedin"></i></a></li>
    <li><a href="#" target="_blank" title=""><i class="bx bxl-instagram"></i></a></li>
  </ul> -->

</nav>

<!--start carousel -->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images8.alphacoders.com/559/thumb-1920-559128.jpg">
    </div>
    
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZ3JhbW1pbmd8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80">
    </div>
    
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZ3JhbW1pbmd8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80">
    </div>
    
    <div class="carousel-item">
      <img src="https://www.codingdojo.com/blog/wp-content/uploads/Screen-Shot-2020-01-08-at-3.44.24-PM.png">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- end carousel -->

<section></section>
<section></section>
<section></section>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
<script src="{{ asset('js/script.js') }}" defer></script>

</body>
</html>
