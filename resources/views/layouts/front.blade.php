<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME', 'Laravel') }}</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="/images/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- LOADING FONTS AND ICONS -->
    <link rel="stylesheet" type="text/css" href="/rev/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="/rev/fonts/font-awesome/css/font-awesome.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="/rev/css/rs6.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- Progressbar CSS -->
    <link rel="stylesheet" href="/css/progressbar.css">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="/css/animations.min.css">
    <!-- Magnefic Popup CSS -->
    <link rel="stylesheet" href="/css/magnific-popup.min.css">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="/fonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="/css/ionicons.min.css">
    <link rel="stylesheet" href="/fonts/themify-icons/themify-icons.css">
    <!--  Style CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!--  Responsive CSS -->
    <link rel="stylesheet" href="/css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <!--loading start-->
    <div id="pq-loading">
        <div id="pq-loading-center">
            <img src="/images/logo.png" class="img-fluid" alt="loading">
        </div>
    </div>
    <!--loading End-->
    <x-navbar></x-navbar>
    <!--==================rev slider start==================-->
    <p class="rs-p-wp-fix"></p>
    @yield('content')
    <x-footer></x-footer>
    <!--Back To Top start-->
    <div id="back-to-top">
        <a class="topbtn" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!--Back To Top End-->
    <!--jquery js-->
    <script src="/js/jquery.min.js"></script>
    <!--bootstrap js-->
    <script src="/js/bootstrap.min.js"></script>
    <!--owl-carousal-->
    <script src="/js/owl.carousel.min.js"></script>
    <!--progress-bar js-->
    <script src="/js/progressbar.js"></script>
    <!--isotope js-->
    <script src="/js/isotope.pkgd.min.js"></script>
    <!--countTo js-->
    <script src="/js/jquery.countTo.min.js"></script>
    <!--Maginfic-Popup js-->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <!-- Animation JS -->
    <script src="/js/wow.min.js"></script>
    <!-- Rev-Slider -->
    <script src="/rev/js/rbtools.min.js"></script>
    <script src="/rev/js/rs6.min.js"></script>
    <script src="/js/rev-custom.js"></script>
    <!--custom js-->
    <script src="/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>
