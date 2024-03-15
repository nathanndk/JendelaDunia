<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>JendelaDunia</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>

    <!-- header section start -->
<div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <a class="logo" href="/"><img src="images/logo.png" alt="Logo"></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
             <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
             </li>
             <li class="nav-item">
                <a class="nav-link {{ Request::is('books*') ? 'active' : '' }}" href="/books">Books</a>
             </li>
             <li class="nav-item">
                <a class="nav-link {{ Request::is('categories*') ? 'active' : '' }}" href="/categories">Categories</a>
             </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" action="{{ route('books.index') }}" method="GET">
              <input class="form-control mr-sm-2" name="search" placeholder="Search books..."
              value="{{ request('search', '') }}" id="search" type="text">
              <button class="btn btn-outline-success my-2 my-sm-0 mr-3" type="submit">Search</button>
          </form>
       </div>
       @guest
       <div class="login_icon">
           <a class="btn btn-outline-primary" href="/login">
               <img src="{{ asset('images/user-icon.png') }}" alt="Login Icon">
               <span class="ml-2">Login</span>
           </a>
       </div>
       <div class="register_icon">
           <a class="btn btn-outline-primary" href="/register">
               <img src="{{ asset('images/user-icon.png') }}" alt="Register Icon">
               <span class="ml-2">Register</span>
           </a>
       </div>
   @endguest

   @auth
       <div class="dropdown">
           <button class="btn btn-primary dropdown-toggle" type="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <img src="{{ asset('images/user-icon.png') }}" alt="User Icon" style="width: 24px; height: auto;">
               <span class="ml-2">{{ Auth::user()->name }}</span>
           </button>
           <div class="dropdown-menu" aria-labelledby="userDropdown">
               <form action="{{ route('logout') }}" method="post" class="ml-4">
                   @csrf
                   <button class="dropdown-item bg-danger text-white" type="submit">Logout</button>
               </form>
           </div>
       </div>
   @endauth

    </nav>
</div>
<!-- header section end -->

<div>
    @yield('content')
</div>

    @include('shared.footer')
    <!-- footer  section end -->
    @include('shared.copyright')

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
       $('#datepicker').datepicker({
           uiLibrary: 'bootstrap4'
       });
    </script>
 </body>
</html>



