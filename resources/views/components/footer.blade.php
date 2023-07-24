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
                                        <img src="/images/Subscribe.png" class="pq-subscribe-img img-fluid"
                                            alt="medicate-subscribe-image">
                                        <div class="pq-subscribe-details">
                                            <h5>Latest Updates Subscribe To Our Newsletter</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="pq-subscribe-from">
                                        <form id="form" class="form">

                                            @csrf

                                            <div class="form-fields">
                                                <input class="w-100 pq-bg-transparent" type="email" name="subscriber_email" id="subscriber_email"
                                                    placeholder="Enter Your Email" required="">
                                                    <button type="submit" class="btn btn-light" onclick="addSubscriber();">Sign Up</button>
                                                {{-- <input class="" type="submit" onclick="addSubscriber();" value="Sign up"> --}}
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
                    <div class="col-xl-4 col-md-6">
                        <div class="pq-footer-block">
                            <img src="/images/footer_logo.png" class="pq-footer-logo img-fluid"
                                alt="medicate-footer-logo">
                            <p>We are open for business. Please feel free to contact us for a product brochure or
                                request a proposal and we will endeavour to revert to
                                you as soon as possible. </p>
                            <div class="pq-footer-social">
                                <ul>
                                    @if(env('COMPANY_FACEBOOK'))<li><a href="{{ env('COMPANY_FACEBOOK') }}"><i class="fab fa-facebook-f"></i></a></li>@endif
                                    @if(env('COMPANY_TWITTER'))<li><a href="{{ env('COMPANY_TWITTER') }}"><i class="fab fa-twitter"></i></a></li>@endif
                                    @if(env('COMPANY_LINKEDIN'))<li><a href="{{ env('COMPANY_LINKEDIN') }}"><i class="fab fa-linkedin"></i></a></li>@endif
                                    @if(env('COMPANY_YOUTUBE'))<li><a href="{{ env('COMPANY_YOUTUBE') }}"><i class="fab fa-youtube"></i></a></li>@endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4  col-md-6">
                        <div class="pq-footer-block">
                            <h4 class="footer-title ">Our Links</h4>
                            <div class="menu-useful-links-container">
                                <ul id="menu-useful-links" class="menu">
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/contact-us">Contact Us</a></li>
                                    <li><a href="/services">Our Services</a></li>
                                    <li><a href="/gallery">Gallery</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4  col-md-6">
                        <div class="pq-footer-block">
                            <h4 class="footer-title">Contact Us</h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="pq-contact">
                                        <li>
                                            <a href="tel:{{ env('COMPANY_PHONE') }}"><i class="fas fa-phone"></i><span>
                                                    {{ env('COMPANY_PHONE') }}</span></a>
                                        </li>
                                        <li>
                                            <a href="mailto:{{ env('COMPANY_EMAIL') }}"><i
                                                    class="fas fa-envelope"></i><span>{{ env('COMPANY_EMAIL') }}</span></a>
                                        </li>
                                        <li>
                                            <i class="fas fa-map-marker"></i> <span> {{ env('COMPANY_ADDRESS') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--==================footer end==================-->
