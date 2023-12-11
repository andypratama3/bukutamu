<!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('asset_dashboard/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('asset_dashboard/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
    <script src="{{ asset('asset_dashboard/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('asset_dashboard/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('asset_dashboard/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('asset_dashboard/vendors/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{ asset('asset_dashboard/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{ asset('asset_dashboard/vendors/flot/jquery.flot.stack.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('asset_dashboard/js/off-canvas.js')}}"></script>
    <script src="{{ asset('asset_dashboard/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('asset_dashboard/js/misc.js')}}"></script>
    <script src="{{ asset('asset_dashboard/js/settings.js')}}"></script>
    <script src="{{ asset('asset_dashboard/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('asset_dashboard/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
    <script src="{{ asset('asset/SwetAlert/index.js') }}"></script>
@stack('js')
