<div>
    <!--==================header start==================-->
    <header id="pq-header" class="pq-header-style-4 pq-has-sticky">
        <div class="pq-top-header">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-md-6 text-right">
                        <div class="pq-header-social text-right">
                            <ul>
                                <li><a href="{{ env('COMPANY_FACEBOOK') }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ env('COMPANY_WHATSAPP') }}"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="{{ env('COMPANY_LINKEDIN') }}"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="{{ env('COMPANY_TWITTER') }}"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pq-header-contact ">
                            <ul>
                                <li><a href="tel:{{ env('COMPANY_PHONE') }}"><i
                                            class="fas fa-phone"></i><span>{{ env('COMPANY_PHONE') }}</span></a>
                                </li>
                                <li><a href="mailto:{{ env('COMPANY_EMAIL') }}"><i
                                            class="fas fa-envelope"></i><span>{{ env('COMPANY_EMAIL') }}</span></a></li>
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
                                                <p>{{ env('COMPANY_ADDRESS') }}</p>
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
                                                <p>{{ env('COMPANY_EMAIL') }}</p>
                                            </div>
                                        </div>
                                        <div class="pq-header-info-box">
                                            <div class="info-icon">
                                                <div class="icon">
                                                    <i class="ti-headphone"></i>
                                                </div>
                                            </div>
                                            <div class="info-icon-content">
                                                <h4>Call Us</h4>
                                                <p> {{ env('COMPANY_PHONE') }}</p>
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
                                                        <a href="/"
                                                            class="@if (Request::is('/')) text-dark @endif">Home</a>

                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="/about"
                                                            class="@if (Request::is('about')) text-dark @endif">About
                                                            Us</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="/services"
                                                            class="@if (Request::is('services')) text-dark @endif">Services</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="/gallery" class="@if(Request::is('gallery'))text-dark @endif">Gallery</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="/contact-us" class="@if(Request::is('contact-us'))text-dark @endif">Contact Us</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pq-header-info-box">
                                        <div class="pq-menu-search-block">
                                            <a href="javascript:void(0)" id="pq-seacrh-btn"><i
                                                    class="ti-search"></i></a>
                                            <div class="pq-search-form">
                                                <form role="search" method="get" class="search-form"
                                                    action=".html">
                                                    <label>
                                                        <span class="screen-reader-text">Search for:</span>
                                                        <input type="search" class="search-field"
                                                            placeholder="Search …" value="" name="">
                                                    </label>
                                                    <button type="submit" class="search-submit"><span
                                                            class="screen-reader-text">Search</span></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <a href="make-appoinment.html" class="pq-button">
                                        <div class="pq-button-block">
                                            <span class="pq-button-text">Appointments</span>
                                            <i class="ion ion-plus-round"></i>
                                        </div>
                                    </a> --}}
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarSupportedContent"
                                        aria-controls="navbarSupportedContent" aria-expanded="false"
                                        aria-label="Toggle navigation">
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

</div>
