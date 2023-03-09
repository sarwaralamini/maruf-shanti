
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Resort Services / Amenities ')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Resort Services / Amenities ')
@section('og_description', '')
@section('og_type', '')
@section('og_url', '')
@section('og_image', '')
@section('og_image_width', '')
@section('og_image_height', '')
@section('og_app_id', '')

{{-- Twitter SEO --}}
@section('twitter_card', '')
@section('twitter_site', '')
@section('twitter_creator', '')
@section('twitter_url', '')
@section('twitter_title', '')
@section('twitter_description', '')
@section('twitter_image', '')

@section('content')
    <!--================ Breadcrumb ================-->
    <div
    class="mad-breadcrumb with-bg-img with-overlay"
    data-bg-image-src="{{ asset('assets/img/bc.jpg') }}"
    >
    <div class="container wide">
    <h1 class="mad-page-title">Resort Services / Amenities </h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Accommodation</span> /
        <span>Resort Services / Amenities</span>
    </nav>
    </div>
    </div>
    <!--================ End of Breadcrumb ================-->

    <div class="mad-content no-pd">
        <div class="container">
            <div class="mad-section">
                <div class="mad-entities mad-entities-reverse type-4">
                <!--================ Entity ================-->
                <article class="mad-entity">
                    <div style="max-width:100rem;font-size: 1.125rem;line-height:1.5rem;" >
                        <div class="mad-entity-pre-title">Resort Services / Amenities</div>
                        <h6 class="mad-entity-title" style="text-align:center;">
                            Just 15 minutes away from the Twin Lakes Tagaytay, Shanti Wellness Sanctuary, the promise of peace, quiet, relaxation, wellness and adventure.
                        </h6>
                        <p style="text-align:center;">
                            A heavenly retreat. Backdrop of a lush tropical landscape.
                        </p>
                        <p style="text-align:center;">
                            <div role="alert" class="mad-alert-box mad-alert-box--info">
                                <div class="mad-alert-box-inner">
                                    We offer free parking inside the resort. From the car park, our 12-seater golf cart will bring you to your designated Villa.
                                </div>
                            </div>
                        </p>
                        <div class="mad-testimonial-bg content-element-4">
                            <div class="mad-testimonial">
                                <div class="mad-testimonial-info">
                                <blockquote>
                                    <p>
                                        If you commute by bus, we can fetch you at Tagaytay-Nasugbo highway near Welcome to Nasugbu Arch, without any charge.
                                    </p>
                                </blockquote>
                                </div>
                            </div>
                        </div>
                        <p>
                            Please note:
                            <br>
                            <i>
                                *One time pick up and one time drop off is free of charge at the Tagaytay-Nasugbu Highway Arch for check in and check out guests only.
                                <br>
                                *Cab capacity is maximum of 12 persons and must be scheduled in advance but may not be available from 11AM to 3PM. Please coordinate with our ground staff for proper arrangement.
                                <br>
                                *During your stay, our shuttle cab service is for within the resort premises use Only.
                            </i>
                        </p>
                        <p>
                            <img src="{{ asset('assets/img/accommodation/Resort_Services_Amenities_1.jpg') }}" alt="" />
                        </p>
                        <p>
                            <b>
                                Our extensive services / amenities have been expressly designed to support your chosen activities and the treatments which make up your Shanti retreat.
                            </b>
                        </p>
                        <div class="mad-list-content">
                            <ul class="mad-list--icon">
                                <li><i class="icon material-icons">check</i>24-Hour Front Desk Service</li>
                                <li><i class="icon material-icons">check</i>24-Hour Security</li>
                                <li><i class="icon material-icons">check</i>Airport Pickup/Drop Off (with charge)</li>
                                <li><i class="icon material-icons">check</i>Tagaytay Pickup/Drop Off (with charge)</li>
                                <li><i class="icon material-icons">check</i>Free Parking</li>
                                <li><i class="icon material-icons">check</i>Free Pickup from Tagaytay-Nasugbo highway near Welcome to Nasugbu Arch</li>
                                <li><i class="icon material-icons">check</i>Wireless Internet In All Domes </li>
                                <li><i class="icon material-icons">check</i>Room Service</li>
                                <li><i class="icon material-icons">check</i>Pets Are Allowed</li>
                                <li><i class="icon material-icons">check</i>Wellness Village</li>
                                <li><i class="icon material-icons">check</i>SPA Village</li>
                            </ul>
                        </div>

                        <p>
                            <img src="{{ asset('assets/img/accommodation/inclusions.jpg') }}" alt="" />
                        </p>
                        <div class="mad-info-header">
                            <h5 class="mad-team-member-name">
                                <a href="#">Pet Policy:</a>
                            </h5>
                        </div>
                        <div class="mad-testimonial-bg content-element-4">
                            <div class="mad-testimonial">
                                <div class="mad-testimonial-info" style="text-align:center">
                                <blockquote>
                                    <p>
                                        We welcome your pets.
                                    </p>
                                </blockquote>
                                </div>
                            </div>
                        </div>
                        <p style="text-align:center">
                            While in the dome, must keep them away from the tent. Stains, scratches to any areas or any damages by the pet will be charged.
                            <br>
                            Please be advised that we shall allow 3 pets maximum per dome, fully domesticated & non-aggressive.
                            <br>
                            You will be asked to sign "Pet Policy" upon check in. P5,000 security deposit is required upon check-in for any damage by the pet.  This is refundable upon check out. Thank you.
                        </p>
                        <p style="text-align:center">
                            <img src="{{ asset('assets/img/accommodation/Pet.jpg') }}" alt="" />
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
