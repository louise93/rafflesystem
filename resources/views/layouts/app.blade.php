<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicons -->
    <link rel="apple-touch-icon" href="userpanel/img/favicon-apple.png">
    <link rel="icon" href="userpanel/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="home/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Material design icons CSS -->
    <link rel="stylesheet" href="userpanel/vendor/materializeicon/material-icons.css">

    <!-- aniamte CSS -->
    <link rel="stylesheet" href="userpanel/vendor/animatecss/animate.css">

    <!-- swiper carousel CSS -->
    <link rel="stylesheet" href="userpanel/vendor/swiper/css/swiper.min.css">

    <!-- daterange CSS -->
    <link rel="stylesheet" href="userpanel/vendor/bootstrap-daterangepicker-master/daterangepicker.css">

    <!-- footable CSS -->
    <link rel="stylesheet" href="userpanel/vendor/footable-bootstrap/css/footable.bootstrap.min.css">

    <!-- Bootstra tour CSS -->
    <link rel="stylesheet" href="userpanel/vendor/bootstrap_tour/css/bootstrap-tour-standalone.css">

    <!-- jvector map CSS -->
    <link rel="stylesheet" href="userpanel/vendor/jquery-jvectormap/jquery-jvectormap-2.0.3.css">

    <!-- app CSS -->
    <link  rel="stylesheet" href="userpanel/css/dark-grey.css" type="text/css">


    <title>{{ config('app.name', 'Tambola') }}</title>
</head>

<body class="fixed-header sidebar-right-close" >
    <!-- page loader -->
    <div class="loader justify-content-center pink-gradient">
        <div class="align-self-center text-center">
            <div class="logo-img-loader">
                <img src="userpanel/img/loader-hole.png" alt="" class="logo-image">
                <img src="userpanel/img/loader-bg.png" alt="" class="logo-bg-image">
            </div>
            <h2 class="mt-3 font-weight-light">Tambola</h2>
            <p class="mt-2 text-white">Awesome things getting ready...</p>
        </div>
    </div>
    <!-- page loader ends  -->

    <div class="wrapper" id="app">
            <!--HEADER-->
            @include('layouts.header')
            <!--HEADER-->
        <!-- sidebar left -->
          @include('layouts.left_sidebar')
        <!-- sidebar left ends -->

        <!-- sidebar right -->
              {{-- @include('layouts.right_sidebar') --}}
        <!-- sidebar right ends -->



        <!-- content page title -->
          @yield('page_title')
        <!-- content page title ends -->

        <!-- content page -->
        <div class="container mt-4 main-container" >
            @yield('content')

        </div>
        <!-- content page ends -->

    </div>
    <footer class="border-top">
        <div class="row">
            <div class="col-12 col-sm-6"> Tambola </div>
            <div class="col-12 col-sm-6 text-right"><a href="" class="content-color-secondary">Privacy Policy</a> | <a href="" class="content-color-secondary">Terms of use</a></div>
        </div>
    </footer>


    <!-- modal for create form -->
    <div class="modal fade" id="createOrder" tabindex="-1" role="dialog" aria-labelledby="createOrderTitle" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header" id="createOrderTitle">
                    <div class="col text-center">
                        <img src="img/logo.png" alt="" class="mt-4">
                        <br>
                        <h5 class="mt-4 text-info">Feeling lucky today ? </h5>
                        <p class="text-info">Choose your lucky number and buy ticket now !</p>
                    </div>
                    <button type="button" class="close absolute" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="buyTicket">
                        @csrf
                         <div class="form-group">
                            <label for="">Enter your Lucky Number :</label>
                            <input type="number" class="form-control" name="number">
                         </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn_submit" class="btn btn-primary">Buy Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal for create form ends-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="userpanel/js/jquery-3.2.1.min.js"></script>
    <script src="userpanel/js/popper.min.js"></script>
    <script src="userpanel/vendor/bootstrap-4.1.3/js/bootstrap.min.js"></script>

    <!-- Cookie jquery file -->
    <script src="userpanel/vendor/cookie/jquery.cookie.js"></script>

    <!-- sparklines chart jquery file -->
    <script src="userpanel/vendor/sparklines/jquery.sparkline.min.js"></script>

    <!-- Circular progress gauge jquery file -->
    <script src="userpanel/vendor/circle-progress/circle-progress.min.js"></script>

    <!-- Swiper carousel jquery file -->
    <script src="userpanel/vendor/swiper/js/swiper.min.js"></script>

    <!-- Chart js jquery file -->
    <script src="userpanel/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="userpanel/vendor/chartjs/utils.js"></script>

    <!-- Footable jquery file -->
    <script src="userpanel/vendor/footable-bootstrap/js/footable.min.js"></script>

    <!-- datepicker jquery file -->
    <script src="userpanel/vendor/bootstrap-daterangepicker-master/moment.js"></script>
    <script src="userpanel/vendor/bootstrap-daterangepicker-master/daterangepicker.js"></script>

    <!-- jVector map jquery file -->
    <script src="userpanel/vendor/jquery-jvectormap/jquery-jvectormap.js"></script>
    <script src="userpanel/vendor/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Bootstrap tour jquery file -->
    <script src="userpanel/vendor/bootstrap_tour/js/bootstrap-tour-standalone.min.js"></script>

    <!-- circular progress file -->
    <script src="userpanel/vendor/circle-progress/circle-progress.min.js"></script>

    <!-- Application main common jquery file -->
    <script src="userpanel/js/main.js"></script>

    <!-- page specific script -->
    
   @yield('script')



</body>

</html>
