<!DOCTYPE html>
<html lang="en">
@include('layouts.dashboard.head')

<body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.dashboard.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('layouts.dashboard.nav')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper pb-0">
                @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('layouts.dashboard.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('layouts.dashboard.script')
  </body>
</html>
