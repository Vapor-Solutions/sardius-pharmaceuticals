<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicate – Health & Medical HTML Template</title>
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
</head>
<body>

    <!--loading start-->
    <div id="pq-loading">
        <div id="pq-loading-center">
            <img src="/images/logo.png" class="img-fluid" alt="loading">
        </div>
    </div>
    <!--loading End-->
    <!--==================header start==================-->
    <header id="pq-header" class="pq-header-style-4 pq-has-sticky">
        <div class="pq-top-header">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-md-6 text-right">
                        <div class="pq-header-social text-right">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pq-header-contact ">
                            <ul>
                                <li><a href="tel:{{ env('COMPANY_PHONE') }}"><i class="fas fa-phone"></i><span>{{ env('COMPANY_PHONE') }}</span></a>
                                </li>
                                <li><a href="mailto:{{ env('COMPANY_EMAIL') }}"><i class="fas fa-envelope"></i><span>{{ env('COMPANY_EMAIL') }}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pq-bottom-header">
            <div class="pq-header-infobox">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pq-header-top-wrapper">
                                <div class="pq-site-logo">
                                    <a class="navbar-brand" href="index.html">
                                        <img class="img-fluid logo" src="/images/logo.png" alt="medicate">
                                    </a>
                                </div>
                                <div class="pq-top-info-content">
                                    <div class="pq-header-info">
                                        <div class="pq-header-info-box address">
                                            <div class="info-icon">
                                                <div class="icon">
                                                    <i class="ti-location-pin"></i>
                                                </div>
                                            </div>
                                            <div class="info-icon-content">
                                                <h4>Visit Us</h4>
                                                <p>Themeforest, Envato HQ 24 Fifth st., Los Angeles, USA </p>
                                            </div>
                                        </div>
                                        <div class="pq-header-info-box">
                                            <div class="info-icon">
                                                <div class="icon">
                                                    <i class="ti-email"></i>
                                                </div>
                                            </div>
                                            <div class="info-icon-content">
                                                <h4>Email Us</h4>
                                                <p>info@peacefulthemes.com </p>
                                            </div>
                                        </div>
                                        <div class="pq-header-info-box">
                                            <div class="info-icon">
                                                <div class="icon">
                                                    <i class="ti-headphone"></i>
                                                </div>
                                            </div>
                                            <div class="info-icon-content">
                                                <h4>Free call</h4>
                                                <p> +1800-001-658</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pq-header-menu">
                <div id="site-header-menu" class="site-header-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <nav class="navbar navbar-expand-lg">
                                    <a class="navbar-brand" href="index.html">
                                        <img class="img-fluid logo" src="/images/logo.png" alt="medicate">
                                    </a>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <div class="pq-menu-contain">
                                            <div class="pq-menu-contain">
                                                <ul id="pq-main-menu" class="navbar-nav">
                                                    <li class="menu-item current-menu-item">
                                                        <a href="index.html">Home</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item">
                                                                <a href="index.html">Home 1</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="index-2.html">Home 2</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="index-3.html">Home 3</a>
                                                            </li>
                                                            <li class="menu-item current-menu-item">
                                                                <a href="index-4.html" aria-current="page">Home 4</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="index-5.html">Home 5</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="index-6.html">Home 6</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#">Pages</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item">
                                                                <a href="about-us.html">About Us</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="our-services.html">Our Services</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="our-process.html">Our Process</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="our-plan.html">Our Plans</a>
                                                            </li>
                                                            <li class="menu-item menu-item-has-children">
                                                                <a href="#">Our Doctors</a><i
                                                                    class="fa fa-chevron-down pq-submenu-icon"></i>
                                                                <ul class="sub-menu">
                                                                    <li class="menu-item">
                                                                        <a href="doctor-1.html">Doctors 1</a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="our-doctor.html">Our Doctor Details</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="make-appoinment.html">Make Appointments</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="faq.html">FAQ</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="404.html">404</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#">Services</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item">
                                                                <a href="angioplasty-services.html">Angioplasty Services</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="cardiology-services.html">Cardiology Services</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="dental-services.html">Dental Services</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="endocrinology-services.html">Endocrinology Services</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="eye-care-services.html">Eye Care Services</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="nurology-services.html">Neurology Services</a></li>
                                                            <li class="menu-item">
                                                                <a href="orthopaedics-services.html">Orthopaedics Services</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="rmi-services.html">RMI Services</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#">Projects</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item menu-item-has-children">
                                                                <a href="#">Types</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                                <ul class="sub-menu">
                                                                    <li class="menu-item">
                                                                        <a href="standard.html">Standard</a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="masonry.html">Masonry</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item menu-item-has-children">
                                                                <a href="#">Columns</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                                <ul class="sub-menu">
                                                                    <li class="menu-item">
                                                                        <a href="2-column.html">2 Column</a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="3-column.html">3 Column</a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="3-column-wide.html">3 Column Wide</a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="4-column-wide.html">4 Column Wide</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item menu-item-has-children">
                                                                <a href="#">Slider</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                                <ul class="sub-menu">
                                                                    <li class="menu-item">
                                                                        <a href="2-column-slider.html">2 Column Slider</a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="3-column-slider.html">3 Column Slider</a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="3-column-slider-wide.html">3 Column Slider Wide</a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="4-column-slider.html">4 Column Slider</a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="4-column-slider-wide.html">4 Column Slider Wide</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="home-visit.html">Projects Details</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#">Blog</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item menu-item-has-children">
                                                                <a href="#">Grid Style</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                                <ul class="sub-menu">
                                                                    <li class="menu-item">
                                                                        <a href="1-column-blog.html">1 Column Blog</a></li>
                                                                    <li class="menu-item">
                                                                        <a href="2-column-blog.html">2 Column Blog</a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="3-column-blog.html">3 Column Blog</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item menu-item-has-children">
                                                                <a href="#">Blog Sidebar</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                                <ul class="sub-menu">
                                                                    <li class="menu-item">
                                                                        <a href="left-sidebar.html">Left Sidebar</a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="right-sidebar.html">Right Sidebar</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="get-the-exercise-limited-mobility.html">Blog Single</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="contact-us.html">Contact Us</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pq-header-info-box">
                                        <div class="pq-menu-search-block">
                                            <a href="javascript:void(0)" id="pq-seacrh-btn"><i class="ti-search"></i></a>
                                            <div class="pq-search-form">
                                                <form role="search" method="get" class="search-form" action=".html">
                                                    <label>
                                                        <span class="screen-reader-text">Search for:</span>
                                                        <input type="search" class="search-field" placeholder="Search …" value="" name="">
                                                    </label>
                                                    <button type="submit" class="search-submit"><span class="screen-reader-text">Search</span></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="make-appoinment.html" class="pq-button">
                                        <div class="pq-button-block">
                                            <span class="pq-button-text">Appointments</span>
                                            <i class="ion ion-plus-round"></i>
                                        </div>
                                    </a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--==================header end==================-->

    <!--==================rev slider start==================-->
    <p class="rs-p-wp-fix"></p>
			<rs-module-wrap id="rev_slider_26_1_wrapper" data-alias="Home-4" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
				<rs-module id="rev_slider_26_1" data-version="6.5.19">
					<rs-slides>
						<rs-slide style="position: absolute;" data-key="rs-90" data-title="Slide" data-thumb="rev/assets/1-7-50x100.jpg" data-anim="ms:600;" data-in="o:0;" data-out="a:false;">
							<img src="/rev/assets/1-7.jpg" alt="" title="1" width="1920" height="936" class="rev-slidebg tp-rs-img" data-no-retina>
<!--
							--><rs-layer
								id="slider-26-slide-90-layer-1"
								data-type="text"
								data-color="#2490eb"
								data-rsp_ch="on"
								data-xy="xo:84px,72px,72px,64px;y:m;yo:-214px,-167px,-161px,-78px;"
								data-text="w:normal;s:14,14,14,13;l:22,22,26,21;fw:600;"
								data-dim="w:auto,auto,auto,149px;"
								data-frame_0="y:50,39,29,17;"
								data-frame_1="st:800;sp:1000;"
								data-frame_999="o:0;st:w;sR:7200;"
								style="z-index:10;font-family:'Quicksand';text-transform:uppercase;"
							>Passion for caring
							</rs-layer><!--

							--><rs-layer
								id="slider-26-slide-90-layer-2"
								data-type="text"
								data-color="#18100f"
								data-rsp_ch="on"
								data-xy="xo:73px,64px,64px,58px;y:m;yo:-100px,-67px,-68px,-16px;"
								data-text="w:normal;s:54,42,38,22;l:62,50,46,30;fw:600;"
								data-dim="w:448px,352px,278px,191px;"
								data-border="boc:#14457b;bow:1px,1px,1px,1px;"
								data-frame_0="y:50,39,29,17;"
								data-frame_1="st:1100;sp:1000;"
								data-frame_999="o:0;st:w;sR:6900;"
								style="z-index:11;font-family:'Quicksand';text-transform:capitalize;"
							>We Also have A Ton Of Fun in The Process
							</rs-layer><!--

							--><rs-layer
								id="slider-26-slide-90-layer-3"
								data-type="shape"
								data-rsp_ch="on"
								data-xy="xo:29px,29px,30px,26px;y:m;yo:-73px,-45px,-46px,0;"
								data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
								data-dim="w:515px,423px,348px,250px;h:407px,354px,325px,252px;"
								data-frame_0="x:0,0,0px,0px;y:0,0,0px,0px;sX:0.8;sY:0.8;"
								data-frame_1="x:0,0,0px,0px;y:0,0,0px,0px;e:power4.out;st:600;sp:1000;"
								data-frame_999="o:0;st:w;sR:7400;"
								style="z-index:8;background-color:#ffffff;"
							>
							</rs-layer><!--

							--><rs-layer
								id="slider-26-slide-90-layer-4"
								data-type="shape"
								data-rsp_ch="on"
								data-xy="xo:73px,64px,64px,57px;yo:185px,142px,74px,84px;"
								data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
								data-dim="w:164px,158px,160px,151px;h:30px,30px,30px,25px;"
								data-border="bor:3px,3px,3px,3px;"
								data-frame_0="y:50,39,29,17;"
								data-frame_1="st:800;sp:1000;"
								data-frame_999="o:0;st:w;sR:7200;"
								style="z-index:9;background-color:#d3e9fb;"
							>
							</rs-layer><!--

							--><a
								id="slider-26-slide-90-layer-6"
								class="rs-layer pt-button rev-btn"
								href="https://medicate.peacefulqode.com/about-us/" target="_self"
								data-type="button"
								data-rsp_ch="on"
								data-xy="xo:70px,65px,66px,57px;y:m;yo:54px,63px,57px,70px;"
								data-text="w:normal;s:14,14,14,12;l:22,22,22,20;fw:600;a:left,left,center,center;"
								data-dim="minh:0px,none,none,none;"
								data-padding="t:15,15,14,10;r:30,30,25,20;b:15,15,14,10;l:30,30,25,20;"
								data-border="bor:3px,3px,3px,3px;"
								data-frame_0="y:50,39,29,17;"
								data-frame_1="st:1500;sp:1000;"
								data-frame_999="o:0;st:w;sR:6500;"
								data-frame_hover="bgc:#14457b;bor:3px,3px,3px,3px;bos:solid;sp:100;bri:120%;"
								style="z-index:12;background-color:#2490eb;font-family:'Quicksand';text-transform:uppercase;"
							><span class="text">Read More</span><i class="ion ion-plus-round"></i>
							</a><!--
-->						</rs-slide>
						<rs-slide style="position: absolute;" data-key="rs-91" data-title="Slide" data-thumb="rev/assets/2-7-50x100.jpg" data-anim="ms:600;" data-in="o:0;" data-out="a:false;">
							<img src="/rev/assets/2-7.jpg" alt="" title="2" width="1920" height="936" class="rev-slidebg tp-rs-img" data-no-retina>
<!--
							--><rs-layer
								id="slider-26-slide-91-layer-1"
								data-type="text"
								data-color="#2490eb"
								data-rsp_ch="on"
								data-xy="xo:84px,72px,72px,64px;y:m;yo:-215px,-167px,-161px,-78px;"
								data-text="w:normal;s:14,14,14,13;l:22,22,26,21;fw:600;"
								data-dim="w:auto,auto,auto,149px;"
								data-frame_0="y:50,39,29,17;"
								data-frame_1="st:800;sp:1000;"
								data-frame_999="o:0;st:w;sR:7200;"
								style="z-index:10;font-family:'Quicksand';text-transform:uppercase;"
							>Passion for caring
							</rs-layer><!--

							--><rs-layer
								id="slider-26-slide-91-layer-2"
								data-type="text"
								data-color="#18100f"
								data-rsp_ch="on"
								data-xy="xo:73px,64px,64px,58px;y:m;yo:-101px,-67px,-68px,-16px;"
								data-text="w:normal;s:54,42,38,22;l:62,50,46,30;fw:600;"
								data-dim="w:448px,352px,278px,191px;"
								data-border="boc:#14457b;bow:1px,1px,1px,1px;"
								data-frame_0="y:50,39,29,17;"
								data-frame_1="st:1100;sp:1000;"
								data-frame_999="o:0;st:w;sR:6900;"
								style="z-index:11;font-family:'Quicksand';text-transform:capitalize;"
							>We Also have A Ton Of Fun in The Process
							</rs-layer><!--

							--><rs-layer
								id="slider-26-slide-91-layer-3"
								data-type="shape"
								data-rsp_ch="on"
								data-xy="xo:29px,29px,30px,26px;y:m;yo:-74px,-45px,-46px,0;"
								data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
								data-dim="w:515px,423px,348px,250px;h:407px,354px,325px,252px;"
								data-frame_0="x:0,0,0px,0px;y:0,0,0px,0px;sX:0.8;sY:0.8;"
								data-frame_1="x:0,0,0px,0px;y:0,0,0px,0px;e:power4.out;st:600;sp:1000;"
								data-frame_999="o:0;st:w;sR:7400;"
								style="z-index:8;background-color:#ffffff;"
							>
							</rs-layer><!--

							--><rs-layer
								id="slider-26-slide-91-layer-4"
								data-type="shape"
								data-rsp_ch="on"
								data-xy="xo:73px,64px,64px,57px;yo:184px,142px,74px,84px;"
								data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
								data-dim="w:164px,158px,160px,151px;h:30px,30px,30px,25px;"
								data-border="bor:3px,3px,3px,3px;"
								data-frame_0="y:50,39,29,17;"
								data-frame_1="st:800;sp:1000;"
								data-frame_999="o:0;st:w;sR:7200;"
								style="z-index:9;background-color:#d3e9fb;"
							>
							</rs-layer><!--

							--><a
								id="slider-26-slide-91-layer-6"
								class="rs-layer pt-button rev-btn"
								href="https://medicate.peacefulqode.com/about-us/" target="_self"
								data-type="button"
								data-rsp_ch="on"
								data-xy="xo:70px,65px,66px,57px;y:m;yo:53px,63px,57px,70px;"
								data-text="w:normal;s:14,14,14,12;l:22,22,22,20;fw:600;a:left,left,center,center;"
								data-dim="minh:0px,none,none,none;"
								data-padding="t:15,15,14,10;r:30,30,25,20;b:15,15,14,10;l:30,30,25,20;"
								data-border="bor:3px,3px,3px,3px;"
								data-frame_0="y:50,39,29,17;"
								data-frame_1="st:1500;sp:1000;"
								data-frame_999="o:0;st:w;sR:6500;"
								data-frame_hover="bgc:#14457b;bor:3px,3px,3px,3px;bos:solid;sp:100;bri:120%;"
								style="z-index:12;background-color:#2490eb;font-family:'Quicksand';text-transform:uppercase;"
							><span class="text">Read More</span><i class="ion ion-plus-round"></i>
							</a><!--
-->						</rs-slide>
						<rs-slide style="position: absolute;" data-key="rs-92" data-title="Slide" data-thumb="rev/assets/3-5-50x100.jpg" data-anim="ms:600;" data-in="o:0;" data-out="a:false;">
							<img src="/rev/assets/3-5.jpg" alt="" title="3" width="1920" height="936" class="rev-slidebg tp-rs-img" data-no-retina>
<!--
							--><rs-layer
								id="slider-26-slide-92-layer-1"
								data-type="text"
								data-color="#2490eb"
								data-rsp_ch="on"
								data-xy="xo:84px,72px,72px,64px;y:m;yo:-213px,-167px,-161px,-78px;"
								data-text="w:normal;s:14,14,14,13;l:22,22,26,21;fw:600;"
								data-dim="w:auto,auto,auto,149px;"
								data-frame_0="y:50,39,29,17;"
								data-frame_1="st:800;sp:1000;"
								data-frame_999="o:0;st:w;sR:7200;"
								style="z-index:10;font-family:'Quicksand';text-transform:uppercase;"
							>Passion for caring
							</rs-layer><!--

							--><rs-layer
								id="slider-26-slide-92-layer-2"
								data-type="text"
								data-color="#18100f"
								data-rsp_ch="on"
								data-xy="xo:73px,64px,64px,58px;y:m;yo:-99px,-67px,-68px,-16px;"
								data-text="w:normal;s:54,42,38,22;l:62,50,46,30;fw:600;"
								data-dim="w:448px,352px,278px,191px;"
								data-border="boc:#14457b;bow:1px,1px,1px,1px;"
								data-frame_0="y:50,39,29,17;"
								data-frame_1="st:1100;sp:1000;"
								data-frame_999="o:0;st:w;sR:6900;"
								style="z-index:11;font-family:'Quicksand';text-transform:capitalize;"
							>We Also have A Ton Of Fun in The Process
							</rs-layer><!--

							--><rs-layer
								id="slider-26-slide-92-layer-3"
								data-type="shape"
								data-rsp_ch="on"
								data-xy="xo:29px,29px,30px,26px;y:m;yo:-72px,-45px,-46px,0;"
								data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
								data-dim="w:515px,423px,348px,250px;h:407px,354px,325px,252px;"
								data-frame_0="x:0,0,0px,0px;y:0,0,0px,0px;sX:0.8;sY:0.8;"
								data-frame_1="x:0,0,0px,0px;y:0,0,0px,0px;e:power4.out;st:600;sp:1000;"
								data-frame_999="o:0;st:w;sR:7400;"
								style="z-index:8;background-color:#ffffff;"
							>
							</rs-layer><!--

							--><rs-layer
								id="slider-26-slide-92-layer-4"
								data-type="shape"
								data-rsp_ch="on"
								data-xy="xo:73px,64px,64px,57px;yo:186px,142px,74px,84px;"
								data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
								data-dim="w:164px,158px,160px,151px;h:30px,30px,30px,25px;"
								data-border="bor:3px,3px,3px,3px;"
								data-frame_0="y:50,39,29,17;"
								data-frame_1="st:800;sp:1000;"
								data-frame_999="o:0;st:w;sR:7200;"
								style="z-index:9;background-color:#d3e9fb;"
							>
							</rs-layer><!--

							--><a
								id="slider-26-slide-92-layer-6"
								class="rs-layer pt-button rev-btn"
								href="https://medicate.peacefulqode.com/about-us/" target="_self"
								data-type="button"
								data-rsp_ch="on"
								data-xy="xo:70px,65px,66px,57px;y:m;yo:55px,63px,57px,70px;"
								data-text="w:normal;s:14,14,14,12;l:22,22,22,20;fw:600;a:left,left,center,center;"
								data-dim="minh:0px,none,none,none;"
								data-padding="t:15,15,14,10;r:30,30,25,20;b:15,15,14,10;l:30,30,25,20;"
								data-border="bor:3px,3px,3px,3px;"
								data-frame_0="y:50,39,29,17;"
								data-frame_1="st:1500;sp:1000;"
								data-frame_999="o:0;st:w;sR:6500;"
								data-frame_hover="bgc:#14457b;bor:3px,3px,3px,3px;bos:solid;sp:100;bri:120%;"
								style="z-index:12;background-color:#2490eb;font-family:'Quicksand';text-transform:uppercase;"
							><span class="text">Read More</span><i class="ion ion-plus-round"></i>
							</a><!--
-->						</rs-slide>
					</rs-slides>
					<rs-static-layers><!--
					--></rs-static-layers>
				</rs-module>
			</rs-module-wrap>
    <!--==================rev slider end==================-->

    <!--==================appoinment form start==================-->
    <section class="apply-form appointment-form py-0 pq-mt-130">
        <div class="container">
            <span class="pq-form-title">make appointment</span>
            <form action="#" class="pq-applyform pq-bg-primary-dark p-xl-5 p-4" novalidate>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <input type="text" id="patient-name" class="form-control patient-name-field" placeholder="Patient Name" required>
                        <select class="form-select">
                            <option selected>Please Select A Doctor</option>
                            <option value="1">Naiden Smith</option>
                            <option value="2">Danial Frankie</option>
                            <option value="3">Jason Roy</option>
                        </select>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mt-4 mt-sm-0">
                        <input type="text" id="phone-number" class="form-control phone-number-field" placeholder="Phone" required>
                        <input type="date" value="" class="form-control" aria-invalid="false">
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <input type="text" id="e-mail" class="form-control e-mail-field" placeholder="Your Email" required>
                        <a class="pq-button home-4">
                            <div class="pq-button-block">
                                <span class="pq-button-text me-0">make an appointment</span>
                            </div>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--==================appoinment form end==================-->

    <!--==================health & medicine start==================-->
    <section class="health">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="health-img">
                        <img src="/images/health/1.jpg" class="pq-image3 wow fadeInLeft" alt="">
                        <img src="/images/health/2.jpg" class="pq-image4 wow fadeInLeft" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-xl-0">
                    <div class="pq-section pq-style-1 text-left">
                        <span class="pq-section-sub-title">health & medicine</span>
                        <h5 class="pq-section-title">The Heart And Science Of Medicine Service</h5>
                        <p class="pq-section-description">There are many variations of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomised words which don't look even slightly believable.</p>
                    </div>
                    <div class="hl"></div>
                    <div class="row mt-3 mb-5">
                        <div class="col-xl-6">
                            <ul class="pq-list-check">
                                <li>
                                    <i class="ion ion-checkmark-round"></i>
                                    <span>Mauris mattis lectus eget ligula</span>
                                </li>
                                <li>
                                    <i class="ion ion-checkmark-round"></i>
                                    <span>Aenean facilisis erat et metus</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-6">
                            <ul class="pq-list-check">
                                <li>
                                    <i class="ion ion-checkmark-round"></i>
                                    <span>Mauris mattis lectus eget ligula</span>
                                </li>
                                <li>
                                    <i class="ion ion-checkmark-round"></i>
                                    <span>Aenean facilisis erat et metus</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="about-us.html" class="pq-button">
                        <div class="pq-button-block">
                            <span class="pq-button-text">Read More</span>
                            <i class="ion ion-plus-round"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--==================health & medicine end==================-->

    <!--==================what we do start==================-->
    <section class="pq-bg-grey pq-pb-465">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-lg-12">
                    <div class="pq-section pq-style-1 text-center">
                        <span class="pq-section-sub-title">what we do</span>
                        <h5 class="pq-section-title">We Deliver Quality Caregiving Services</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="pq-fancy-box pq-style-3">
                        <div class="pq-fancy-box-hoverbg">
                            <img src="/images/services/1.jpg" alt="">
                        </div>
                        <div class="pq-fancy-box-icon">
                            <i class="flaticon-medicine"></i>
                        </div>
                        <div class="pq-fancy-box-info">
                            <h5 class="pq-fancy-box-title">Angioplasty</h5>
                            <p class="pq-fancybox-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum dummy text</p>
                            <a href="angioplasty-services.html" class="pq-button pq-button-link">
                                <div class="pq-button-block">
                                    <span class="pq-button-text">Read More</span>
                                    <i class="ion ion-plus-round"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-md-0">
                    <div class="pq-fancy-box pq-style-3">
                        <div class="pq-fancy-box-hoverbg">
                            <img src="/images/services/2.jpg" alt="">
                        </div>
                        <div class="pq-fancy-box-icon">
                            <i class="flaticon-consulting"></i>
                        </div>
                        <div class="pq-fancy-box-info">
                            <h5 class="pq-fancy-box-title">Endocrinology</h5>
                            <p class="pq-fancybox-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum dummy text</p>
                            <a href="endocrinology-services.html" class="pq-button pq-button-link">
                                <div class="pq-button-block">
                                    <span class="pq-button-text">Read More</span>
                                    <i class="ion ion-plus-round"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0">
                    <div class="pq-fancy-box pq-style-3">
                        <div class="pq-fancy-box-hoverbg">
                            <img src="/images/services/3.jpg" alt="">
                        </div>
                        <div class="pq-fancy-box-icon">
                            <i class="flaticon-mask"></i>
                        </div>
                        <div class="pq-fancy-box-info">
                            <h5 class="pq-fancy-box-title">Neurology</h5>
                            <p class="pq-fancybox-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum dummy text</p>
                            <a href="nurology-service.html" class="pq-button pq-button-link">
                                <div class="pq-button-block">
                                    <span class="pq-button-text">Read More</span>
                                    <i class="ion ion-plus-round"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================what we do end==================-->

    <!--==================clinic start==================-->
    <section class="clinic pt-0 pb-0 pq-mt-335">
        <div class="container">
            <div class="row pq-bg-primary">
                <div class="col-xl-6 pq-blue-section-side-left">
                    <div class="pq-section pq-style-1 text-left">
                        <span class="pq-section-sub-title">visit our clinic</span>
                        <h5 class="pq-section-title pq-text-white">A Great Place Of Medical Health Care</h5>
                        <p class="pq-section-description pq-text-white">Lorem Ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,<br> luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>
                    <h5 class="pq-text-white">Effective Medical Treatment</h5>
                    <div class="pq-home4-counter">
                        <div class="pq-counter pq-style-2">
                            <div class="pq-counter-contain">
                                <div class="pq-counter-info text-center">
                                    <div class="pq-counter-num-prefix">
                                        <h5 class="timer" data-to="86" data-speed="5000">86</h5>
                                        <span class="pq-counter-prefix">k</span>
                                    </div>
                                    <p class="pq-counter-description">Trusted User</p>
                               </div>
                            </div>
                        </div>
                        <div class="pq-counter pq-style-2">
                            <div class="pq-counter-contain">
                                <div class="pq-counter-info text-center">
                                    <div class="pq-counter-num-prefix">
                                        <h5 class="timer" data-to="102" data-speed="5000">102</h5>
                                        <span class="pq-counter-prefix">%</span>
                                    </div>
                                    <p class="pq-counter-description">Positive Rating</p>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 p-0">
                    <img src="/images/clinic/1.jpg" alt="clinic doctor">
                </div>
            </div>
        </div>
    </section>
    <!--==================clinic end==================-->

    <!--==================service start==================-->
    <section class="pq-service pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section pq-style-1 text-center">
                        <span class="pq-section-sub-title">our service</span>
                        <h5 class="pq-section-title">A Wide Range Of Optometry Services</h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="pq-icon-box pq-style-1">
                        <div class="pq-icon-box-wrapper">
                            <div class="pq-icon">
                                <i class="flaticon-medical-doctor"></i>
                            </div>
                            <div class="pq-icon-box-content">
                                <h6 class="pq-icon-box-title"><a href="endocrinology-services.html">Endocrinology</a></h6>
                                <p class="pq-icon-box-description">Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                        </div>
                    </div>
                    <div class="pq-icon-box pq-style-2">
                        <div class="pq-icon-box-wrapper">
                            <div class="pq-icon">
                                <i class="flaticon-heartbeat"></i>
                            </div>
                            <div class="pq-icon-box-content">
                                <h6 class="pq-icon-box-title"><a href="endocrinology-services.html">Endocrinology</a></h6>
                                <p class="pq-icon-box-description">Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                        </div>
                    </div>
                    <div class="pq-icon-box pq-style-1">
                        <div class="pq-icon-box-wrapper">
                            <div class="pq-icon">
                                <i class="flaticon-stethoscope"></i>
                            </div>
                            <div class="pq-icon-box-content">
                                <h6 class="pq-icon-box-title"><a href="endocrinology-services.html">Endocrinology</a></h6>
                                <p class="pq-icon-box-description">Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-4 mt-xl-0">
                    <img src="/images/services/1.png" alt="service-img">
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="pq-icon-box pq-style-2">
                        <div class="pq-icon-box-wrapper">
                            <div class="pq-icon">
                                <i class="flaticon-doctor"></i>
                            </div>
                            <div class="pq-icon-box-content">
                                <h6 class="pq-icon-box-title"><a href="endocrinology-services.html">Endocrinology</a></h6>
                                <p class="pq-icon-box-description">Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                        </div>
                    </div>
                    <div class="pq-icon-box pq-style-1">
                        <div class="pq-icon-box-wrapper">
                            <div class="pq-icon">
                                <i class="flaticon-first-aid-box"></i>
                            </div>
                            <div class="pq-icon-box-content">
                                <h6 class="pq-icon-box-title"><a href="endocrinology-services.html">Endocrinology</a></h6>
                                <p class="pq-icon-box-description">Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                        </div>
                    </div>
                    <div class="pq-icon-box pq-style-2">
                        <div class="pq-icon-box-wrapper">
                            <div class="pq-icon">
                                <i class="flaticon-medicine"></i>
                            </div>
                            <div class="pq-icon-box-content">
                                <h6 class="pq-icon-box-title"><a href="endocrinology-services.html">Endocrinology</a></h6>
                                <p class="pq-icon-box-description">Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================service end==================-->

    <!--==================quality start==================-->
    <section class="pq-bg-primary-dark pq-bg-img-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-icon-box pq-style-3 text-center">
                        <div class="pq-icon">
                            <i class="flaticon-laboratory"></i>
                        </div>
                        <h6 class="pq-sub-title">Quality & Excellence</h6>
                        <h5 class="pq-title">Expect Nothing But The Best Form<br> Medical Technologies</h5>
                        <a href="about-us.html" class="pq-button pq-button-flat">
                            <div class="pq-button-block">
                                <span class="pq-button-text">Read More</span>
                                <i class="ion ion-plus-round"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================quiality end==================-->

    <!--==================who we are start==================-->
    <section class="whoweare pq-bg-img-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="pq-section pq-style-1 text-left mb-4">
                        <span class="pq-section-sub-title">who we are</span>
                        <h5 class="pq-section-title">We Protect You In Any Sphere Of Life</h5>
                        <p class="pq-section-description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                    </div>
                    <div class="pq-progressbar-box pq-progressbar-style-1"  data-h="5">
                        <div class="pq-progressbar-content">
                            <span class="progress-title">Client Satisfaction</span>
                            <span class="progress-value">65% </span>
                            <div class="pq-progress-bar">
                                <span data-width="65" class="show-progress"></span>
                            </div>
                        </div>
                        <div class="pq-progressbar-content">
                            <span class="progress-title">Medic Success</span>
                            <span class="progress-value">90% </span>
                            <div class="pq-progress-bar">
                                <span data-width="90" class="show-progress"></span>
                            </div>
                        </div>
                        <div class="pq-progressbar-content">
                            <span class="progress-title">Client Referral</span>
                            <span class="progress-value">55% </span>
                            <div class="pq-progress-bar">
                              <span data-width="55" class="show-progress"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================who we are end==================-->

    <!--==================team start==================-->
    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section pq-style-1 text-center">
                        <span class="pq-section-sub-title">Our Team</span>
                        <h5 class="pq-section-title">Meet Our Specialist Doctors</h5>
                    </div>
                </div>
                <div class="col-lg-12 pb-dot-mt-0">
                    <div class="owl-carousel owl-theme " data-dots="true" data-nav="false" data-desk_num="3" data-lap_num="3" data-tab_num="2" data-mob_num="2" data-mob_sm="1" data-autoplay="false" data-loop="false" data-margin="30">
                        <div class="item">
                            <div class="pq-team-box pq-style-1">
                                <div class="pq-team-img">
                                    <img src="/images/team/1.jpg" class="img-fluid" alt="team-image">
                                    <div class="pq-team-social">
                                        <ul>
                                            <li>
                                                <a class="facebook" href="" target="_blank"> <span class="sr-only">Facebook</span> <i class="fab fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="" target="_blank"> <span class="sr-only">Twitter</span> <i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="" target="_blank"> <span class="sr-only">Google-plus</span> <i class="fab fa-google-plus"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pq-team-info">
                                    <h5 class="pq-member-name">
                                        <a href="doctor-1.html">Naidan Smith</a>
                                    </h5>
                                    <span class="pq-team-designation">Outpatient Surgery</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-team-box pq-style-1">
                                <div class="pq-team-img"> <img src="/images/team/2.jpg" class="img-fluid" alt="team-image">
                                    <div class="pq-team-social">
                                        <ul>
                                            <li>
                                                <a class="facebook" href="" target="_blank"> <span class="sr-only">Facebook</span> <i class="fab fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="" target="_blank"> <span class="sr-only">Twitter</span> <i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="" target="_blank"> <span class="sr-only">Google-plus</span> <i class="fab fa-google-plus"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pq-team-info">
                                    <h5 class="pq-member-name">
                                        <a href="doctor-1.html">Danial Frankie</a>
                                    </h5>
                                    <span class="pq-team-designation">Outpatient Surgery</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-team-box pq-style-1">
                                <div class="pq-team-img"> <img src="/images/team/3.jpg" class="img-fluid" alt="team-image">
                                    <div class="pq-team-social">
                                        <ul>
                                            <li>
                                                <a class="facebook" href="" target="_blank"> <span class="sr-only">Facebook</span> <i class="fab fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="" target="_blank"> <span class="sr-only">Twitter</span> <i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="" target="_blank"> <span class="sr-only">Google-plus</span> <i class="fab fa-google-plus"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pq-team-info">
                                    <h5 class="pq-member-name">
                                        <a href="doctor-1.html">Alex Jhon</a>
                                    </h5>
                                    <span class="pq-team-designation">Outpatient Surgery</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-team-box pq-style-1">
                                <div class="pq-team-img"> <img src="/images/team/4.jpg" class="img-fluid" alt="team-image">
                                    <div class="pq-team-social">
                                        <ul>
                                            <li>
                                                <a class="facebook" href="" target="_blank"> <span class="sr-only">Facebook</span> <i class="fab fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="" target="_blank"> <span class="sr-only">Twitter</span> <i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="" target="_blank"> <span class="sr-only">Google-plus</span> <i class="fab fa-google-plus"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pq-team-info">
                                    <h5 class="pq-member-name">
                                        <a href="doctor-1.html">Rihana Roy</a>
                                    </h5>
                                    <span class="pq-team-designation">Outpatient Surgery</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-team-box pq-style-1">
                                <div class="pq-team-img"> <img src="/images/team/5.jpg" class="ig-fluid" alt="team-image">
                                    <div class="pq-team-social">
                                        <ul>
                                            <li>
                                                <a class="facebook" href="" target="_blank"> <span class="sr-only">Facebook</span> <i class="fab fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="" target="_blank"> <span class="sr-only">Twitter</span> <i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="" target="_blank"> <span class="sr-only">Google-plus</span> <i class="fab fa-google-plus"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pq-team-info">
                                    <h5 class="pq-member-name">
                                        <a href="doctor-1.html"> Jason Roy</a>
                                    </h5>
                                    <span class="pq-team-designation">Outpatient Surgery</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================team end==================-->

    <!--==================testimonial start==================-->
    <section class="testimonial pq-bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 pe-xl-5">
                    <div class="pq-section pt-style-1 text-left">
                        <span class="pq-section-sub-title">our testimonial</span>
                        <h5 class="pq-section-title">Here's what our customers have said</h5>
                        <p class="pq-section-description">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                    </div>
                    <a class="pq-button pq-button-flat" href="about-us.html">
                        <div class="pq-button-block">
                            <span class="pq-button-text">Read More</span>
                            <i class="ion ion-plus-round"></i>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="pq-testimonial pq-testimonial-style-3 mt-4 mt-xl-0">
                        <div class="owl-carousel owl-theme" data-dots="true" data-nav="false" data-desk_num="1" data-lap_num="1" data-tab_num="1" data-mob_num="1" data-mob_sm="1" data-autoplay="true" data-loop="true" data-margin="30">
                            <div class="item">
                                <div class="pq-testimonial-box pq-style-3">
                                    <div class="pq-testimonial-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="pq-testimonial-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomized words which don’t look even believable. There are many variations of passages.</div>
                                    <div class="pq-testimonial-media">
                                        <div class="pq-testimonial-img">
                                            <img src="/images/testimonial/1.png" alt="Testimonial-image">
                                        </div>
                                        <div class="pq-testimonial-meta">
                                            <h5>Danial Frankie</h5>
                                            <span>patient</span>
                                        </div>
                                        <div class="pq-testimonial-icon">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-testimonial-box pq-style-3">
                                    <div class="pq-testimonial-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="pq-testimonial-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomized words which don’t look even believable. There are many variations of passages.</div>
                                    <div class="pq-testimonial-media">
                                        <div class="pq-testimonial-img">
                                            <img src="/images/testimonial/4.png" alt="Testimonial-image">
                                        </div>
                                        <div class="pq-testimonial-meta">
                                            <h5>john Martin</h5>
                                            <span>patient</span>
                                        </div>
                                        <div class="pq-testimonial-icon">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-testimonial-box pq-style-3">
                                    <div class="pq-testimonial-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="pq-testimonial-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomized words which don’t look even believable. There are many variations of passages.</div>
                                    <div class="pq-testimonial-media">
                                        <div class="pq-testimonial-img">
                                            <img src="/images/testimonial/t3.png" alt="Testimonial-image">
                                        </div>
                                        <div class="pq-testimonial-meta">
                                            <h5> Rihana Roy</h5>
                                            <span>patient</span>
                                        </div>
                                        <div class="pq-testimonial-icon">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-testimonial-box pq-style-3">
                                    <div class="pq-testimonial-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="pq-testimonial-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomized words which don’t look even believable. There are many variations of passages.</div>
                                    <div class="pq-testimonial-media">
                                        <div class="pq-testimonial-img">
                                            <img src="/images/testimonial/5.png" alt="Testimonial-image">
                                        </div>
                                        <div class="pq-testimonial-meta">
                                            <h5>Alexa Jhon</h5>
                                            <span>patient</span>
                                        </div>
                                        <div class="pq-testimonial-icon">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================testimonial end==================-->

    <!--==================pricing plan start==================-->
    <section class="pricing-plan pq-pb-210">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-lg-12">
                    <div class="pq-section pq-style-1 text-center">
                        <span class="pq-section-sub-title">our pricing plan</span>
                        <h5 class="pq-section-title">Choose Your Optimal Plan</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="pq-pricing-plan pq-style-2 ">
                        <span class="pq-title">standard</span>
                        <div class="price">
                            <span class="pq-price-dollar">$</span>
                            <span class="pq-amount">69</span>
                            <span class="price-month">/ Monthly</span>
                        </div>
                        <ul class="pq-pricing-list">
                            <li>
                                <i aria-hidden="true" class="ion ion-checkmark-round"></i>
                                <span> Access to Employers Hotline</span>
                            </li>
                            <li>
                                <i aria-hidden="true" class="ion ion-checkmark-round"></i>
                                <span> Medical specialties</span>
                            </li>
                            <li>
                                <i aria-hidden="true" class="ion ion-checkmark-round"></i>
                                <span> Binding Arbitration and Class</span>
                            </li>
                            <li class="active">
                                <i aria-hidden="true" class="ion ion-close"></i>
                                <span> 24/7 Customer Support</span>
                            </li>
                            <li class="active">
                                <i aria-hidden="true" class="ion ion-close"></i>
                                <span> Free Equipment Use</span>
                            </li>
                            <li class="active">
                                <i aria-hidden="true" class="ion ion-close"></i>
                                <span> Safety Training Topics</span>
                            </li>
                        </ul>
                        <a class="pq-button pq-button-flat" href="our-plan.html">
                            <div class="pq-button-block">
                                <span class="pq-button-text">Buy Now</span>
                                <i class="ion ion-plus-round"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-md-0">
                    <div class="pq-pricing-plan pq-style-2  active">
                        <span class="pq-title">Professional</span>
                        <div class="price">
                            <span class="pq-price-dollar">$</span>
                            <span class="pq-amount">99</span>
                            <span class="price-month">/ Monthly</span>
                        </div>
                        <ul class="pq-pricing-list">
                            <li>
                                <i aria-hidden="true" class="ion ion-checkmark-round"></i>
                                <span> Access to Employers Hotline</span>
                            </li>
                            <li>
                                <i aria-hidden="true" class="ion ion-checkmark-round"></i>
                                <span> Medical specialties</span>
                            </li>
                            <li class="active">
                                <i aria-hidden="true" class="ion ion-close"></i>
                                <span> Binding Arbitration and Class</span>
                            </li>
                            <li class="active">
                                <i aria-hidden="true" class="ion ion-close"></i>
                                <span> 24/7 Customer Support</span>
                            </li>
                            <li>
                                <i aria-hidden="true" class="ion ion-checkmark-round"></i>
                                <span> Free Equipment Use</span>
                            </li>
                            <li>
                                <i aria-hidden="true" class="ion ion-checkmark-round"></i>
                                <span> Safety Training Topics</span>
                            </li>
                        </ul>
                        <a class="pq-button pq-button-flat" href="our-plan.html">
                            <div class="pq-button-block">
                                <span class="pq-button-text">Buy Now</span>
                                <i class="ion ion-plus-round"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0">
                    <div class="pq-pricing-plan pq-style-2 ">
                        <span class="pq-title">Pristage</span>
                        <div class="price">
                            <span class="pq-price-dollar">$</span>
                            <span class="pq-amount">199</span>
                            <span class="price-month">/ Monthly</span>
                        </div>
                        <ul class="pq-pricing-list">
                            <li class="active">
                                <i aria-hidden="true" class="ion ion-close"></i>
                                <span> Access to Employers Hotline</span>
                            </li>
                            <li>
                                <i aria-hidden="true" class="ion ion-checkmark-round"></i>
                                <span> Medical specialties</span>
                            </li>
                            <li>
                                <i aria-hidden="true" class="ion ion-checkmark-round"></i>
                                <span> Binding Arbitration and Class</span>
                            </li>
                            <li>
                                <i aria-hidden="true" class="ion ion-checkmark-round"></i>
                                <span> 24/7 Customer Support</span>
                            </li>
                            <li>
                                <i aria-hidden="true" class="ion ion-checkmark-round"></i>
                                <span> Free Equipment Use</span>
                            </li>
                            <li>
                                <i aria-hidden="true" class="ion ion-checkmark-round"></i>
                                <span> Safety Training Topics</span>
                            </li>
                        </ul>
                        <a class="pq-button pq-button-flat" href="our-plan.html">
                            <div class="pq-button-block">
                                <span class="pq-button-text">Buy Now</span>
                                <i class="ion ion-plus-round"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================pricing plan end==================-->
    <!--==================footer start==================-->
    <footer id="pq-footer">
        <div class="pq-footer-style-1">
            <div class="pq-subscribe align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="pq-subscribe-bg">
                                <div class="row align-items-center">
                                    <div class="col-lg-5">
                                        <div class="pq-subscribe-block">
                                            <img src="/images/Subscribe.png" class="pq-subscribe-img img-fluid" alt="medicate-subscribe-image">
                                            <div class="pq-subscribe-details">
                                                <h5>Latest Updates Subscribe To Our Newsletter</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 align-self-center">
                                        <div class="pq-subscribe-from">
                                            <form id="form" class="form">
                                                <div class="form-fields">
                                                    <input class="w-100 pq-bg-transparent" type="email" name="EMAIL" placeholder="Enter Your Email" required="">
                                                    <input class="" type="submit"  value="Sign up">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pq-footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="pq-footer-block">
                                <img src="/images/footer_logo.png" class="pq-footer-logo img-fluid" alt="medicate-footer-logo" >
                                <p>It helps designers plan out where the content will sit, the content to be written and approved.</p>
                                <div class="pq-footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3  col-md-6">
                            <div class="pq-footer-block">
                                <h4 class="footer-title">Our Courses</h4>
                                <div class="menu-useful-links-container">
                                    <ul id="menu-useful-links" class="menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="our-services.html">Our Services</a></li>
                                        <li><a href="our-process.html">Our Process</a></li>
                                        <li><a href="doctor-1.html">Doctors 1</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="our-doctor.html">Doctors 2</a></li>
                                        <li><a href="home-visit.html">Departments</a></li>
                                        <li><a href="make-appoinment.html">Events</a></li>
                                        <li><a href="our-plan.html">Member</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3  col-md-6">
                            <div class="pq-footer-block">
                                <h4 class="footer-title">Recent Posts</h4>
                                <div class="pq-footer-recent-post">
                                    <div class="pq-footer-recent-post-media">
                                        <a href="get-the-exercise-limited-mobility.html"> <img src="/images/footer-image/1.jpg" alt=""></a>
                                    </div>
                                    <div class="pq-footer-recent-post-info">
                                        <a href="get-the-exercise-limited-mobility.html" class="pq-post-date">
                                            <i class="far fa-calendar-alt"></i>December <span>12</span>, 2021
                                        </a>
                                        <h6><a href="get-the-exercise-limited-mobility.html">Get the Exercise Limited Mobility</a></h6>
                                    </div>
                                </div>
                                <div class="pq-footer-recent-post">
                                    <div class="pq-footer-recent-post-media">
                                        <a href="get-the-exercise-limited-mobility.html"> <img src="/images/footer-image/2.jpg" alt=""></a>
                                    </div>
                                    <div class="pq-footer-recent-post-info">
                                        <a href="get-the-exercise-limited-mobility.html" class="pq-post-date">
                                            <i class="far fa-calendar-alt"></i>December <span>12</span>, 2021
                                        </a>
                                        <h6><a href="get-the-exercise-limited-mobility.html">Transfusion strategy and heart surgery</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3  col-md-6">
                            <div class="pq-footer-block">
                                <h4 class="footer-title">Contact Us</h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="pq-contact">
                                            <li>
                                                <a href="tel:+1800001658"><i class="fas fa-phone"></i><span> +1800-001-658</span></a>
                                            </li>
                                            <li>
                                                <a href="mailto:info@peacefulthemes.com"><i class="fas fa-envelope"></i><span>info@peacefulthemes.com</span></a>
                                            </li>
                                            <li>
                                                <i class="fas fa-map-marker"></i> <span> Themeforest, Envato HQ 24 Fifth st., Los Angeles, USA</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pq-copyright-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center "> <span class="pq-copyright"> Copyright 2022 medicate All Rights Reserved</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--==================footer end==================-->
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
</body>
</html>
