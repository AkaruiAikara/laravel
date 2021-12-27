<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="">{{ config('app.name') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">{{ strtoupper(substr(config('app.name'), 0, 2)) }}</a>
  </div>
  @auth
  <ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="{{ request()->is('dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{ url('dashboard') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fas fa-table"></i> <span>Tables</span></a></li>
    <li class="menu-header">Users</li>
    <li class="{{ request()->is('users') ? 'active' : '' }}"><a class="nav-link" href="{{ url('users') }}"><i class="fas fa-users"></i> <span>Users</span></a></li>
    <li class="{{ request()->is('pelanggan') ? 'active' : '' }}"><a class="nav-link" href="{{ url('pelanggan') }}"><i class="fas fa-users"></i> <span>Pelanggan</span></a></li>
  </ul>
  @else
  <div class="card">
    <div class="card-header">
      <h4>Guest Mode</h4>
    </div>
    <div class="card-body">
      You're on guest mode, Login to access dashboard!
    </div>
    <div class="card-footer text-right">
      <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
    </div>
  </div>
  @endauth
</aside>
