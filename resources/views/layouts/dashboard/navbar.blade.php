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
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-compass-outline menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="pt-2 pb-1">
        <span class="nav-item-head">Data</span>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::routeIs('bukutamu.*') ? 'active' : '' }}" href="{{ route('dashboard.bukutamu.index') }}">
          <i class="mdi mdi-book menu-icon"></i>
          <span class="menu-title">Buku Tamu Data</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/forms/basic_elements.html">
          <i class="mdi mdi-format-list-bulleted menu-icon"></i>
          <span class="menu-title">Survei</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <i class="mdi mdi-chart-bar menu-icon"></i>
          <span class="menu-title">Charts</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/tables/basic-table.html">
          <i class="mdi mdi-table-large menu-icon"></i>
          <span class="menu-title">Tables</span>
        </a>
      </li>
      <li class="nav-item pt-3">
        <a class="nav-link" href="http://bootstrapdash.com/demo/plus-free/documentation/documentation.html" target="_blank">
          <i class="mdi mdi-file-document-box menu-icon"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li>
    </ul>
  </nav>
