@extends('layouts.app')


@section('content')
    <x-slider></x-slider>
    <x-appointment-form></x-appointment-form>
    <x-deliverables></x-deliverables>
    <x-what-we-do></x-what-we-do>

    <!--==================clinic start==================-->
    {{-- <section class="clinic pt-0 pb-0 pq-mt-335">
        <div class="container">
            <div class="row pq-bg-primary">
                <div class="col-xl-6 pq-blue-section-side-left">
                    <div class="pq-section pq-style-1 text-left">
                        <span class="pq-section-sub-title">visit our clinic</span>
                        <h5 class="pq-section-title pq-text-white">A Great Place Of Medical Health Care</h5>
                        <p class="pq-section-description pq-text-white">Lorem Ipsum dolor sit amet, consectetur
                            adipiscing elit. Ut elit tellus,<br> luctus nec ullamcorper mattis, pulvinar dapibus leo.
                        </p>
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
    </section> --}}
    <!--==================clinic end==================-->

    <!--==================service start==================-->
    {{-- <section class="pq-service pb-0">
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
                                <h6 class="pq-icon-box-title"><a href="endocrinology-services.html">Endocrinology</a>
                                </h6>
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
                                <h6 class="pq-icon-box-title"><a href="endocrinology-services.html">Endocrinology</a>
                                </h6>
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
                                <h6 class="pq-icon-box-title"><a href="endocrinology-services.html">Endocrinology</a>
                                </h6>
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
                                <h6 class="pq-icon-box-title"><a href="endocrinology-services.html">Endocrinology</a>
                                </h6>
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
                                <h6 class="pq-icon-box-title"><a href="endocrinology-services.html">Endocrinology</a>
                                </h6>
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
                                <h6 class="pq-icon-box-title"><a href="endocrinology-services.html">Endocrinology</a>
                                </h6>
                                <p class="pq-icon-box-description">Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--==================service end==================-->

    <!--==================quality start==================-->
    {{-- <section class="pq-bg-primary-dark pq-bg-img-1">
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
    </section> --}}
    <!--==================quiality end==================-->

    <!--==================who we are start==================-->
    {{-- <section class="whoweare pq-bg-img-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="pq-section pq-style-1 text-left mb-4">
                        <span class="pq-section-sub-title">who we are</span>
                        <h5 class="pq-section-title">We Protect You In Any Sphere Of Life</h5>
                        <p class="pq-section-description">It is a long established fact that a reader will be
                            distracted by the readable content of a page when looking at its layout. The point of using
                            Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                    </div>
                    <div class="pq-progressbar-box pq-progressbar-style-1" data-h="5">
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
    </section> --}}
    <!--==================who we are end==================-->

    <x-team></x-team>
    <!--==================testimonial start==================-->
    {{-- <x-testimonials></x-testimonials> --}}
    <!--==================testimonial end==================-->
@endsection
