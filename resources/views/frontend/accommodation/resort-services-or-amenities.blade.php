
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
        <span>Resort Services and Amenities</span>
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
                                    We offer free parking inside the resort. From the car park, our 12-seater golf cart will bring you to your designated Villa or Tent Lodge.
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
                                    <p style="text-align:justify;">
                                        <span style="font-weight:700;">Please note:</span>
                                    <br>
                                    <i>
                                        *One time pick up and one time drop off is free of charge at the Tagaytay-Nasugbu Highway Arch for check in and check out guests only.
                                        <br>
                                        *Cab capacity is maximum of 12 persons and must be scheduled in advance but may not be available from 11AM to 3PM. Please coordinate with our ground staff for proper arrangement.
                                        <br>
                                        *During your stay, our shuttle cab service is for within the resort premises use Only.
                                    </i>
                                </p>
                                </blockquote>
                                </div>
                            </div>
                        </div>
                        <p>
                            <img src="{{ asset('assets/img/accommodation/Resort_Services_Amenities_1.jpg') }}" alt="" />
                        </p>
                        <p>
                            <b>
                                Our extensive services / amenities have been expressly designed to support your chosen activities and the treatments which make up your Shanti retreat.
                            </b>
                        </p>
                        <div class="mad-list-content">
                            <ul class="mad-list--icon-2">
                                <li style="margin-bottom:5px;"><i class="icon material-icons">check</i>24-Hour Front Desk Service</li>
                                <li style="margin-bottom:5px;"><i class="icon material-icons">check</i>24-Hour Security</li>
                                <li style="margin-bottom:5px;"><i class="icon material-icons">check</i>Airport Pickup/Drop Off (with charge)</li>
                                <li style="margin-bottom:5px;"><i class="icon material-icons">check</i>Tagaytay Pickup/Drop Off (with charge)</li>
                                <li style="margin-bottom:5px;"><i class="icon material-icons">check</i>Free Parking</li>
                                <li style="margin-bottom:5px;"><i class="icon material-icons">check</i>Free Pickup from Tagaytay-Nasugbo highway near Welcome to Nasugbu Arch</li>
                                <li style="margin-bottom:5px;"><i class="icon material-icons">check</i>Wireless Internet In All Domes </li>
                                <li style="margin-bottom:5px;"><i class="icon material-icons">check</i>Room Service</li>
                                <li style="margin-bottom:5px;"><i class="icon material-icons">check</i>Pets Are Allowed</li>
                                <li style="margin-bottom:5px;"><i class="icon material-icons">check</i>Wellness Village</li>
                                <li style="margin-bottom:5px;"><i class="icon material-icons">check</i>SPA Village</li>
                            </ul>
                        </div>

                        <h3 class="mad-title" style="margin-bottom:0px!important;text-align:center;">
                            Inclusions
                        </h3>

                        <p style="text-align:justify;">
                            Experience or things you may love to do here (complimentary and self-experienced):
                        </p>
                        <table class="mad-table">
                            <tbody>
                                <tr>
                                    <td>Jungle or poolside meditation</td>
                                    <td>Jungle BBQ</td>
                                </tr>
                                <tr>
                                    <td>Yoga</td>
                                    <td>Bonfire</td>
                                </tr>
                                <tr>
                                    <td>Balance walk</td>
                                    <td>Swimming</td>
                                </tr>
                                <tr>
                                    <td>Stone walk</td>
                                    <td>Gardening activities</td>
                                </tr>
                                <tr>
                                    <td>Labyrinth</td>
                                    <td>Sunset -- overlooking Balayan Bay (watch from the main entrance gate)</td>
                                </tr>
                                <tr>
                                    <td>Grounding or earthing</td>
                                    <td>Forest full moon experience</td>
                                </tr>
                                <tr>
                                    <td>Fruit picking (seasonal availability)</td>
                                    <td>Relaxing on hammock/duyan</td>
                                </tr>
                                <tr>
                                    <td>Mandala arrangement</td>
                                    <td>Semi outdoor bathroom experience</td>
                                </tr>
                                <tr>
                                    <td>Breathing exercise</td>
                                    <td>Sunrise (watch from kawa bath area)</td>
                                </tr>
                                <tr>
                                    <td>Rock balancing</td>
                                    <td>Reading books</td>
                                </tr>
                                <tr>
                                    <td>Bird watching</td>
                                    <td>Watching movies</td>
                                </tr>
                                <tr>
                                    <td>Cooking in nature</td>
                                    <td>Staring at the milky way or counting stars at night from hammock</td>
                                </tr>
                                <tr>
                                    <td>Nature or forest trailing</td>
                                    <td>Unwind and chill at your way or simply do nothing, listen to the silence.</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mad-info-header">
                            <h5 class="mad-team-member-name">
                                <a href="#">Pet Policy:</a>
                            </h5>
                        </div>
                        <div class="mad-testimonial-bg content-element-4">
                            <div class="mad-testimonial">
                                <div class="mad-testimonial-info" style="text-align:center">
                                <blockquote>
                                    <p style="text-align:center;">
                                        We welcome your pets.
                                    </p>
                                </blockquote>
                                </div>
                            </div>
                        </div>
                        <p style="text-align:justify;">
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
