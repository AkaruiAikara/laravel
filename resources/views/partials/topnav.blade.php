<form class="form-inline mr-auto" action="">
  @auth
  <ul class="navbar-nav mr-3">
    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
  </ul>
  @endauth
  <div class="nav-collapse">
    <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
      <i class="fas fa-ellipsis-v"></i>
    </a>
    <ul class="navbar-nav">
      <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
      <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
      <li class="nav-item disabled"><a href="#" class="nav-link">Soon</a></li>
    </ul>
  </div>
</form>
<form class="form-inline ml-auto">
  <ul class="navbar-nav">
    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
  </ul>
  <div class="search-element">
    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
    <div class="search-backdrop"></div>
    <div class="search-result">
      <div class="search-header">
        Histories
      </div>
      <div class="search-item">
        <a href="#">How to hack NASA using CSS</a>
        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
      </div>
      <div class="search-item">
        <a href="#">Kodinger.com</a>
        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
      </div>
      <div class="search-item">
        <a href="#">#Stisla</a>
        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
      </div>
      <div class="search-header">
        Result
      </div>
      <div class="search-item">
        <a href="#">
          <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
          oPhone S9 Limited Edition
        </a>
      </div>
      <div class="search-item">
        <a href="#">
          <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
          Drone X2 New Gen-7
        </a>
      </div>
      <div class="search-item">
        <a href="#">
          <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
          Headphone Blitz
        </a>
      </div>
      <div class="search-header">
        Projects
      </div>
      <div class="search-item">
        <a href="#">
          <div class="search-icon bg-danger text-white mr-3">
            <i class="fas fa-code"></i>
          </div>
          Stisla Admin Template
        </a>
      </div>
      <div class="search-item">
        <a href="#">
          <div class="search-icon bg-primary text-white mr-3">
            <i class="fas fa-laptop"></i>
          </div>
          Create a new Homepage Design
        </a>
      </div>
    </div>
  </div>
</form>
<ul class="navbar-nav navbar-right">
  @guest
  <ul class="navbar-nav">
    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link"><i class="fas fa-sign-in-alt"></i> Login</a></li>
    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
  </ul>
  @else
  <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
    <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div></a>
    <div class="dropdown-menu dropdown-menu-right">
      <div class="dropdown-title">Welcome, {{ Auth::user()->name }}</div>
      <a href="#" class="dropdown-item has-icon">
        <i class="far fa-user"></i> Profile Settings
      </a>
      <div class="dropdown-divider"></div>
      <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
      onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </div>
  </li>
  @endguest
</ul>
