<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <!-- SEO Optimization -->
  <meta name="description" content="Spark Admin - Premium Bootstrap 5 Admin Dashboard Template">
  <meta name="author" content="Spark Admin Team">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{asset('Dashboard/assets/images/Avatar.jpg')}}">

  <!-- Local Third-Party Libraries (100% Offline Compatible) -->
  <link rel="stylesheet" href="{{asset('Dashboard/assets/libs/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('Dashboard/assets/libs/bootstrap-icons/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('Dashboard/assets/libs/apexcharts/apexcharts.css')}}">
  <link rel="stylesheet" href="{{asset('Dashboard/assets/libs/flatpickr/flatpickr.min.css')}}">

  <!-- Main Design System & Custom Stylesheet -->
  <link rel="stylesheet" href="{{asset('Dashboard/assets/css/main.css')}}">
</head>

<body>

  <!-- ==========================================
         START: Sidebar Component
         Highly polished, dark-green sticky navigation
         ========================================== -->
  <div class="sidebar-wrapper" id="sidebar">
    <!-- Brand Logo / Identity -->
    <a href="index.html" class="sidebar-brand">
      <i class="bi bi-balloon-heart-fill"></i>
      <span>Hello, {{Auth::user()->name}}</span>
    </a>

    <!-- Navigation Menu -->
    <div class="flex-grow-1 overflow-y-auto">
      <!-- Group: Menu -->
      <div class="sidebar-menu-section">
        <div class="sidebar-menu-title">Browse</div>
        <ul class="sidebar-menu-list">
          <li class="sidebar-menu-item">
            <a href="{{route('home')}}" class="sidebar-menu-link @yield('dashboard')" id="menu-overview" title="Overview">
              <i class="bi bi-grid-fill"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sidebar-menu-item">
            <a href="{{route('account')}}" class="sidebar-menu-link @yield('account')" id="menu-overview" title="Overview">
              <i class="bi bi-person-fill"></i>
              <span>My Account</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="sidebar-menu-section">
        <div class="sidebar-menu-title">Adoption</div>
        <ul class="sidebar-menu-list">
          <li class="sidebar-menu-item">
            <a href="{{route('adoptList')}}" class="sidebar-menu-link @yield('adoptList')" id="menu-overview" title="Overview">
             <i class="bi bi-list"></i>
              <span>Adoptions</span>
            </a>
          </li>
          <li class="sidebar-menu-item">
            <a href="{{route('adoptAdd')}}" class="sidebar-menu-link @yield('adoptAdd')" id="menu-overview" title="Overview">
             <i class="bi bi-plus-circle"></i>
              <span>Add Adoption</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Sidebar Profile Card (Dynamic Footer) -->
    <div class="sidebar-profile">
      <img src="{{asset('Dashboard/assets/images/Avatar.jpg')}}" class="sidebar-profile-img">
      <div class="sidebar-profile-info">
        <div class="sidebar-profile-name">{{Auth::user()->name}}</div>
        <div class="sidebar-profile-email">{{Auth::user()->email}}</div>
      </div>
    </div>
  </div>
  <!-- ==========================================
         END: Sidebar Component
         ========================================== -->


  <!-- ==========================================
         START: Main Content Area
         ========================================== -->
  <div class="main-wrapper">

    <!-- START: Top Navbar Component -->
    <header class="navbar-custom">
      <div class="navbar-left">
        <!-- Desktop sidebar toggle (visible on large screens only) -->
        <button class="btn-desktop-toggle d-none d-xl-flex align-items-center justify-content-center me-3"
          id="desktop-sidebar-toggle" aria-label="Minimize Sidebar">
          <i class="bi bi-chevron-bar-left"></i>
        </button>
        <!-- Mobile sidebar toggle -->
        <button class="sidebar-toggle-btn me-2" id="sidebar-toggle" aria-label="Toggle Navigation">
          <i class="bi bi-list"></i>
        </button>

        <a href="{{url('/')}}" class="btn btn-dark">Go To Website</a>

        <!-- Quick Actions Dropdown -->
        <div class="dropdown ms-2">
        </div>
      </div>

      <!-- Mid navbar: search pill -->
      <div class="navbar-search-wrapper" style="opacity: 0; cursor: default">
        <input type="text" style="cursor: default" class="navbar-search-input" placeholder="Search anything in Spark..." id="main-search">
        <button class="navbar-search-btn" aria-label="Search">
          <i class="bi bi-search"></i>
        </button>
      </div>

      <!-- Right actions -->
      <div class="navbar-actions">

        <!-- Profile Dropdown -->
        <div class="dropdown ms-2">
          <button class="navbar-profile-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false" id="profile-dropdown">
            <img src="{{asset('Dashboard/assets/images/Avatar.jpg')}}" alt="Profile Image" class="navbar-profile-img">
            <span class="navbar-profile-name d-none d-md-inline">{{Auth::user()->name}}</span>
            <i class="bi bi-chevron-down navbar-profile-caret"></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-profile" aria-labelledby="profile-dropdown">
            <li><a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-right"></i>
                Logout</a></li>
                
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </ul>
        </div>
      </div>
    </header>
    <!-- END: Top Navbar Component -->

    @section('content')
    @show

  </div>
  <!-- ==========================================
         END: Main Content Area
         ========================================== -->

  <!-- Local Third-Party Libraries Script dependencies -->
  <script src="{{asset('Dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Dashboard/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('Dashboard/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

  <!-- Local dashboard interactions controller -->
  <script src="{{asset('Dashboard/assets/js/dashboard.js')}}"></script>
</body>

</html>