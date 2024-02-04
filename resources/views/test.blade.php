@extends('template.master');

@section('title')
    Charts - SB Admin
@endsection

@section('lorepas')
<nav class="sb-sidenav-menu-nested nav">
  <a class="nav-link" href="login.html">Login</a>
  <a class="nav-link" href="register.html">Register</a>
  <a class="nav-link" href="password.html">Forgot Password</a>
</nav>
@endsection

@section('epage')
<nav class="sb-sidenav-menu-nested nav">
    <a class="nav-link" href="401.html">401 Page</a>
    <a class="nav-link" href="404.html">404 Page</a>
    <a class="nav-link" href="500.html">500 Page</a>
</nav>
@endsection

@section('dropdown')
<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item" href="#!">Settings</a></li>
    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
    <li><hr class="dropdown-divider" /></li>
    <li><a class="dropdown-item" href="#!">Logout</a></li>
</ul>
@endsection