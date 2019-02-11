<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>{{ config('app.name', 'Tambola Bonanza') }}</title>
  <!-- plugins:css -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('template/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('template/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{ asset('template/vendors/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('template/css/vertical-layout-dark/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('template/images/favicon.png')}}" />
  @yield('style')
</head>

<body>
  <div class="container-scroller">
        <!--TOP NAVIGATION-->
        @include('layout.navbar')
        <!-- SIDEBAR -->
        @include('layout.sidebar')
      <div class="main-panel">
        <div class="content-wrapper" id="app">
            @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- FOOTER -->
        @include('layout.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('template/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{ asset('template/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('template/js/off-canvas.js')}}"></script>
  <script src="{{ asset('template/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('template/js/template.js')}}"></script>
  <script src="{{ asset('template/js/settings.js')}}"></script>
  <script src="{{ asset('template/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
  @yield('script')
</body>

</html>
