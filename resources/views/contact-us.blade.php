@extends('layouts.front')


@section('content')
    <x-banner url="/rev/assets/2-6.jpg">
        <x-slot name="title">Contact Us</x-slot>
    </x-banner>
    <!--=================================
                contact-us start-->
    <div class="container mb-4">
        <div class="row">
            <div class="col-lg-12 mb-0">
                <section class="pq-contact-us">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="pq-contact-box" style="height: 350px;">
                                    <div class="pq-contact-box-icon">
                                        <div class="icon animation-grow"> <i aria-hidden="true"
                                                class="ion ion-location"></i> </div>
                                    </div>
                                    <div class="pq-contact-box-info">
                                        <h4 class="pq-contact-box-title">
                                            Our Location
                                        </h4>
                                        <p class="pq-contact-box-description" style="color: var(--primary-color);">
                                            {{ env('COMPANY_ADDRESS') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-md-0 mt-4">
                                <div class="pq-contact-box" style="height: 350px;">
                                    <div class="pq-contact-box-icon">
                                        <div class="icon animation-grow"> <i aria-hidden="true"
                                                class="ion ion-ios-telephone"></i>
                                        </div>
                                    </div>
                                    <div class="pq-contact-box-info">
                                        <h4 class="pq-contact-box-title">
                                            Our Contact
                                        </h4>
                                        <a href="{{ env('COMPANY_WHATSAPP') }}" style="text-decoration: none;">
                                            <p class="pq-contact-box-description" style="color: var(--primary-color);">
                                                {{ env('COMPANY_PHONE') }}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
                                <div class="pq-contact-box" style="height: 350px;">
                                    <div class="pq-contact-box-icon">
                                        <div class="icon animation-grow"> <i aria-hidden="true"
                                                class="ion ion-email-unread"></i> </div>
                                    </div>
                                    <div class="pq-contact-box-info">
                                        <h4 class="pq-contact-box-title">
                                            Mail Us
                                        </h4>
                                        <a href="mailto:{{ env('COMPANY_EMAIL') }}" style="text-decoration: none;">
                                            <p class="pq-contact-box-description" style="color: var(--primary-color);">
                                                {{ env('COMPANY_EMAIL') }}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--=================================
            contact-us end-->
    <!--=================================
            get-in-touch start-->
    <div class="container mb-4">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <section class="get-in-touch p-20">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8  pq-form-box">
                                <div class="form-container">
                                    <div class="pq-section pq-style-1 text-center p-0"> <span
                                            class="pq-section-sub-title">contact
                                            us</span>
                                        <h5 class="pq-section-title">Get in touch with us</h5>
                                    </div>
                                </div>
                                <div class="pq-applyform-whitebg text-start">
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between align-items-center"
                                            role="alert">
                                            <div>
                                                {{ session('success') }}
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <form action="{{ route('contactUs') }}" class="pq-applyform" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 mb-3">
                                                <input type="text" id="name" name="name" class="name-field"
                                                    value="" size="40" aria-required="true" aria-invalid="false"
                                                    placeholder="Enter Your Name">
                                            </div>
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="col-lg-6 col-md-6 mb-3">
                                                <input type="email" id="email" name="email" class="e-mail-field"
                                                    value="" size="40" aria-required="true" aria-invalid="false"
                                                    placeholder="Enter Your Email">
                                            </div>
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="col-lg-6 col-md-6 mb-3">
                                                <input type="text" id="phone_number" name="phone_number"
                                                    class="phone-number-field" value="" size="40"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Enter Your Phone Number">
                                            </div>
                                            @error('phone_number')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="col-lg-6 col-md-6 mb-3">
                                                <input type="text" id="subject" name="subject" class="subject-field"
                                                    size="40" aria-required="true" aria-invalid="false"
                                                    placeholder="Subject">
                                            </div>
                                            @error('subject')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="col-lg-12 col-md-12 mb-3">
                                                <textarea name="message" id="message" cols="40" rows="10" aria-required="true" aria-invalid="false"
                                                    placeholder="Write Your Message"></textarea>
                                            </div>
                                            @error('message')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="btn btn-dark">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!--=================================
    get-in-touch end-->
    <!--=================================
    map start-->
    {{-- <div class="map pt-0">
        <div class="pq-bg-map">
            <iframe src="https://maps.google.com/maps?q=The%20Stables%20Karen&t=&z=15&ie=UTF8&iwloc=&output=embed"
                allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div> --}}
    <!--=================================
    map end-->
    <!--=================================-->
@endsection
