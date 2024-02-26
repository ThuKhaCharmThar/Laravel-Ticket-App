<footer class="main-footer">
    {{-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> --}}
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github"
        viewBox="0 0 16 16">
        <path
            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
    </svg>
     <a href="https://github.com/ThukhaChan">github.com/ThukhaChan</a>.</strong>
    {{-- All rights reserved. --}}
    <div class="float-right d-none d-sm-inline-block">
        <a class="btn btn-dark" href="{{ route('logout') }}"
            onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</footer>

<!-- Control Sidebar -->
{{-- <aside class="control-sidebar control-sidebar-dark"> --}}
    <!-- Control sidebar content goes here -->
{{-- </aside> --}}
<!-- /.control-sidebar -->
{{-- </div> --}}
<!-- ./wrapper -->
<!-- jQuery -->

<script src={{ asset('plugins/jquery/jquery.min.js') }}></script>
<!-- jQuery UI 1.11.4 -->
<script src={{ asset('plugins/jquery-ui/jquery-ui.min.js') }}></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src={{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
<!-- ChartJS -->
<script src={{ asset('plugins/chart.js/Chart.min.js') }}></script>
<!-- Sparkline -->
<script src={{ asset('plugins/sparklines/sparkline.js') }}></script>
<!-- JQVMap -->
<script src={{ asset('plugins/jqvmap/jquery.vmap.min.js') }}></script>
<script src={{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}></script>
<!-- jQuery Knob Chart -->
<script src={{ asset('plugins/jquery-knob/jquery.knob.min.js') }}></script>
<!-- daterangepicker -->
<script src={{ asset('plugins/moment/moment.min.js') }}></script>
<script src={{ asset('plugins/daterangepicker/daterangepicker.js') }}></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src={{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}></script>
<!-- Summernote -->
<script src={{ asset('plugins/summernote/summernote-bs4.min.js') }}></script>
<!-- overlayScrollbars -->
<script src={{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}></script>
<!-- AdminLTE App -->
<script src={{ asset('dist/js/adminlte.js') }}></script>
<!-- AdminLTE for demo purposes -->
<script src={{ asset('dist/js/demo.js') }}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{ asset('dist/js/pages/dashboard.js') }}></script>
