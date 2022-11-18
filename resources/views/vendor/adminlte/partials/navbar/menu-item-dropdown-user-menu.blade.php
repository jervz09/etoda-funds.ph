<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

@php
  if(auth()->user()->is_admin == 0){
    $profile_link = url('user/profile_setting');
  }else{
    $profile_link = url('admin/profile_setting?user='.auth()->user()->id);
  }
@endphp
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="usernameDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ auth()->user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="usernameDropdown">
          <a class="dropdown-item" href="{{ $profile_link }}"><i class="fa fa-user-circle"></i> Profile Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out-alt"></i> {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->