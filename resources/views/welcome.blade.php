<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
  <title>lungo v1 welcome</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.2/css/boxicons.min.css'>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/horizontal.css') }}" rel="stylesheet">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="overlay"></div>

<div class="utility-nav d-none d-md-block">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <p><a href="#" class="badge badge-light"><i class="bx bxs-download"></i> Download Lungo App</a> | <a href="#" class="badge badge-light"><i class="bx bxs-envelope"></i> mail@lunga.com</a>
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
      
      
    </ul>

    <div class="collapse navbar-collapse">
      <form class="form-inline my-2 my-lg-0 mx-auto">
        <input class="form-control" type="search" placeholder="Pencarian..." aria-label="Search">
        <button class="btn btn-outline-primary" type="submit"><i class="bx bx-search-alt"></i></button>
      </form>

      <ul class="navbar-nav">
    
       
        @guest
            <li class="btn btn-link">
                <a class="btn btn-outline-primary" href="{{ route('login') }}">Masuk</a> 
            </li>
        @if (Route::has('register'))
            <li class="btn btn-link">
                <a class="btn btn-outline-primary" href="{{ route('register') }}">Daftar</a>
            </li>
        @endif
        @else
        
        
        <div class="btn btn-link">
          <div class="dropdown">
          <button type="button" class="btn btn-outline-primary"> {{ Auth::user()->name }}</button>
            <div class="dropdown-content">
            <a class="dropdown-item" href="home">Home</a>


                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                        Keluar
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                </form>

              </div>
        </div>

        @endguest
                        
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
          @guest
          <a class="btn btn-outline-primary" href="{{ route('login') }}"> Masuk</a>
          @if (Route::has('register'))
          <a class="btn btn-outline-primary" href="{{ route('register') }}"> Daftar</a>
          @endif
          @else
          <div class="btn-group">
          <div class="dropdown">
          <button type="button" class="btn btn-outline-primary"><i class='bx bxs-user-circle'></i></button>
            <div class="dropdown-content">
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                        Keluar
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                </form>
                <a class="dropdown-item" href="#">Example</a>   
        </div>
      
      </div>
      <div class="btn-group">
          <div class="dropdown">
          <button type="button" class="btn btn-outline-primary"><i class='bx bxs-cart'></i></button>
            <div class="dropdown-content">
            <a class="dropdown-item" href="#">Example</a>
            <a class="dropdown-item" href="#">Keranjang Belanja</a>
            <a class="dropdown-item" href="#">Pesanan Diproses</a>
            <a class="dropdown-item" href="#">Nota Pesanan</a> 
            <a class="dropdown-item" href="#">Pesanan Selesai</a>
        </div>
      </div>
      <div class="btn-group">
          <div class="dropdown">
          <button type="button" class="btn btn-outline-primary"><i class='bx bxs-cart'></i></button>
            <div class="dropdown-content">
            <a class="dropdown-item" href="#">Example</a>
            <a class="dropdown-item" href="#">Keranjang Belanja</a>
            <a class="dropdown-item" href="#">Pesanan Diproses</a>
            <a class="dropdown-item" href="#">Nota Pesanan</a> 
            <a class="dropdown-item" href="#">Pesanan Selesai</a>
          
        </div>
        
      </div></div>
      </div>

      @endguest
      <div class="col-1">
          <button type="button" id="sidebarCollapseX" class="btn btn-link">
              <i class="bx bx-x icon-single"></i>
          </button>
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
</nav>


<section>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://static.misteraladin.com/images/banner/0000003000/0000002283/ojk_homepage_banner_tamasya_banyak_cara_1920x500px.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="https://static.misteraladin.com/images/banner/0000003000/0000002283/ojk_homepage_banner_tamasya_banyak_cara_1920x500px.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="https://static.misteraladin.com/images/banner/0000003000/0000002283/ojk_homepage_banner_tamasya_banyak_cara_1920x500px.jpg" alt="New York">
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

<body>
<!-- partial:index.partial.html -->
<div class="container py-3">
  <div class="title h1 text-center">Horizontal cards - Bootstrap 4</div>
  <!-- Card Start -->
  <div class="card">
    <div class="row ">

      <div class="col-md-7 px-3">
        <div class="card-block px-6">
          <h4 class="card-title">Horizontal Card with Carousel - Bootstrap 4 </h4>
          <p class="card-text">
            The Carousel code can be replaced with an img src, no problem. The added CSS brings shadow to the card and some adjustments to the prev/next buttons and the indicators is rounded now. As in Bootstrap 3
          </p>
          <p class="card-text">Made for usage, commonly searched for. Fork, like and use it. Just move the carousel div above the col containing the text for left alignment of images</p>
          <br>
          <a href="#" class="mt-auto btn btn-primary  ">Read More</a>
        </div>
      </div>
      <!-- Carousel start -->
      <div class="col-md-5">
        <div id="CarouselTest" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
            <li data-target="#CarouselTest" data-slide-to="1"></li>
            <li data-target="#CarouselTest" data-slide-to="2"></li>

          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block" src="https://picsum.photos/450/300?image=1072" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block" src="https://picsum.photos/450/300?image=855" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block" src="https://picsum.photos/450/300?image=355" alt="">
            </div>
            <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
            <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
          </div>
        </div>
      </div>
      <!-- End of carousel -->
    </div>
  </div>
  <!-- End of card -->

</div>

<div class="container">
  <div class="card float-left">
    <div class="row ">

      <div class="col-sm-7">
        <div class="card-block">
          <!--           <h4 class="card-title">Small card</h4> -->
          <p>Wetgple text to build your own card.</p>
          <p>Change around the content for awsomenes</p>
          <a href="#" class="btn btn-primary btn-sm">Read More</a>
        </div>
      </div>

      <div class="col-sm-5">
        <img class="d-block w-100" src="https://picsum.photos/150?image=380" alt="">
      </div>
    </div>
  </div>

 
    <div class="card float-right">
      <div class="row">
        <div class="col-sm-5">
          <img class="d-block w-100" src="https://picsum.photos/150?image=641" alt="">
        </div>
        <div class="col-sm-7">
          <div class="card-block">
            <!--           <h4 class="card-title">Small card</h4> -->
            <p>Copy paste the HTML and CSS.</p>
            <p>Change around the content for awsomenes</p>
            <br>
            <a href="#" class="btn btn-primary btn-sm float-right">Read More</a>
          </div>
        </div>
 
      </div>
    </div>
  </div>
</section>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
<script src="{{ asset('js/script.js') }}" defer></script>

</body>
</html>
