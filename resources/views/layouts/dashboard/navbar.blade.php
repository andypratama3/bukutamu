<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile border-bottom">
        <a href="#" class="nav-link flex-column">
          <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
            <span class="font-weight-semibold mb-1 mt-2 text-center">Dashboard</span>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::routeIs('dashboard') ? '' : 'active' }}" href="{{ route('dashboard')}}">
          <i class="mdi mdi-compass-outline menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="pt-2 pb-1">
        <span class="nav-item-head">Data</span>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::routeIs('dashboard.bukutamu.*') ? 'active' : '' }}" href="{{ route('dashboard.bukutamu.index') }}">
          <i class="mdi mdi-book menu-icon"></i>
          <span class="menu-title">Buku Tamu Data</span>
        </a>
      </li>
      {{-- <li class="nav-item {{ Request::routeIs('dashboard.survei.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard.survei.index') }}">
          <i class="mdi mdi-book menu-icon"></i>
          <span class="menu-title">Survei Data</span>
        </a>
      </li> --}}
    </ul>
  </nav>
