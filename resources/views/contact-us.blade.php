@extends('layouts.front')


@section('content')
    <x-banner url="/rev/assets/2-6.jpg">
        <x-slot name="title">Contact Us</x-slot>
    </x-banner>
    <!--=================================
                             conatct-us start-->
    <section class="pq-contact-us">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="pq-contact-box" style="height: 350px;">
                        <div class="pq-contact-box-icon">
                            <div class="icon animation-grow"> <i aria-hidden="true" class="ion ion-location"></i> </div>
                        </div>
                        <div class="pq-contact-box-info">
                            <h4 class="pq-contact-box-title">
                                Our Location
                            </h4>
                            <p class="pq-contact-box-description"> {{ env('COMPANY_ADDRESS') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-md-0 mt-4">
                    <div class="pq-contact-box" style="height: 350px;">
                        <div class="pq-contact-box-icon">
                            <div class="icon animation-grow"> <i aria-hidden="true" class="ion ion-ios-telephone"></i>
                            </div>
                        </div>
                        <div class="pq-contact-box-info">
                            <h4 class="pq-contact-box-title">
                                Our Contact
                            </h4>
                            <p class="pq-contact-box-description">{{ env('COMPANY_PHONE') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
                    <div class="pq-contact-box" style="height: 350px;">
                        <div class="pq-contact-box-icon">
                            <div class="icon animation-grow"> <i aria-hidden="true" class="ion ion-email-unread"></i> </div>
                        </div>
                        <div class="pq-contact-box-info">
                            <h4 class="pq-contact-box-title">
                                Mail Us
                            </h4>
                            <p class="pq-contact-box-description"> {{ env('COMPANY_EMAIL') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                   contact-us end-->
    <!--=================================
                                   get-in-touch start-->
    <section class="get-in-touch p-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8  pq-form-box">
                    <div class="form-container">
                        <div class="pq-section pq-style-1 text-center p-0"> <span class="pq-section-sub-title">contact
                                us</span>
                            <h5 class="pq-section-title">Get in touch with us</h5>
                        </div>
                    </div>
                    <div class="pq-applyform-whitebg text-start">
                        <form action="#" class="pq-applyform">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <input type="text" id="first-name" name="your-name" class="name-field" value=""
                                        size="40" aria-required="true" aria-invalid="false"
                                        placeholder="Enter Your Name">
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <input type="email" id="e-mail" name="your-email" class="e-mail-field"
                                        value="" size="40" aria-required="true" aria-invalid="false"
                                        placeholder="Enter Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <input type="text" id="phone-number" name="phone-number" class="phone-number-field"
                                        value="" size="40" aria-required="true" aria-invalid="false"
                                        placeholder="Enter Your Phone Number">
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <input type="text" id="subject" name="your-Subject" class="subject-field"
                                        size="40" aria-required="true" aria-invalid="false" placeholder="Subject">
                                </div>
                                <div class="col-lg-12 col-md-12 mb-3">
                                    <textarea name="your-message" id="message" cols="40" rows="10" aria-required="true" aria-invalid="false"
                                        placeholder="Write Your Message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <a class="pq-button form-btn mt-3" href="#">
                                        <div class="pq-button-block">
                                            <span class="pq-button-text me-0">send message</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                   get-in-touch end-->
    <!--=================================
                                   map start-->
    <div class="map pt-0">
        <div class="pq-bg-map">
            <iframe src="https://maps.google.com/maps?q=The%20Stables%20Karen&t=&z=15&ie=UTF8&iwloc=&output=embed"
                allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!--=================================
                                   map end-->
    <!--=================================-->
@endsection
