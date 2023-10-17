
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Activities')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Activities')
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
    <h1 class="mad-page-title">Activities</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Wellness</span> /
        <span>Activities</span>
    </nav>
    </div>
    </div>
    <!--================ End of Breadcrumb ================-->

    <div class="mad-content no-pd">
        <div class="container">
            <div class="mad-section">
                <div class="mad-entities mad-entities-reverse type-4">
                    <article class="mad-entity">
                        <div style="max-width:100rem;font-size: 1.125rem;line-height:1.5rem;" >
                            <div class="mad-entity-pre-title">Activities</div>
                            <h6 class="mad-entity-title">
                                …far from the everyday world.
                            </h6>
                            <h6 class="mad-entity-title">
                                …perched majestically between hills and valleys.
                            </h6>
                            <h6 class="mad-entity-title" style="text-align:center;">
                                Shanti Wellness Sanctuary is a unique concept, amidst the lushness of nature. A place where the mind can escape. An oasis for body, mind and spirit. Minutes away from Tagaytay.
                            </h6>
                            <div role="alert" class="mad-alert-box mad-alert-box--info">
                                <div class="mad-alert-box-inner">
                                    Try our unique wellness activities.
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="villa-item">
                        <h4 class="mad-title text-center">
                            Shinrin Yoku (Forest Bathing)
                        </h4>
                        <p>
                            <img src="{{ asset('assets/img/wellness/activities/1.jpg') }}" alt="" />
                        </p>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <td>Experience the connection with nature! Unique offer. Highly recommended.</td>
                                    </tr>
                                    <tr>
                                        <td>P499/person</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum of 2 pax</td>
                                    </tr>
                                    <tr>
                                        <td>30-45 minutes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="villa-item">
                        <h4 class="mad-title text-center">
                            Forest Sound Bath (Sound Wellness)
                        </h4>
                        <p>
                            <img src="{{ asset('assets/img/wellness/activities/2.jpg') }}" alt="" />
                        </p>
                        <h4 class="mad-title text-center" style="margin-top: 25px;">
                            In-room Sound Bath
                        </h4>
                        <p>
                            <img src="{{ asset('assets/img/wellness/activities/6.jpg') }}" alt="" />
                        </p>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <td>Meditative experience. Unique offer. Highly recommended.</td>
                                    </tr>
                                    <tr>
                                        <td>P499/person</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum of 2 pax</td>
                                    </tr>
                                    <tr>
                                        <td>30 minutes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="villa-item">
                        <h4 class="mad-title text-center">
                            Kawa Bath
                        </h4>
                        <p>
                            <img src="{{ asset('assets/img/wellness/activities/3.jpg') }}" alt="" />
                        </p>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <td>Kawa bath is indeed a sweet indulgence for both body and soul to enhance a blissful experience.</td>
                                    </tr>
                                    <tr>
                                        <td>Bath in an oversized wok. 2 persons at a time.</td>
                                    </tr>
                                    <tr>
                                        <td>P499/person</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum of 2 pax</td>
                                    </tr>
                                    <tr>
                                        <td>30-45 minutes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="alert" class="mad-alert-box mad-alert-box--info">
                        <div class="mad-alert-box-inner">
                            BESTSELLER: Get a package deal for all three (Forest Bath, Sound Bath, and Kawa Bath) at P1290/person, minimum of 2 pax.
                        </div>
                    </div>
                    <div class="villa-item">
                        <h4 class="mad-title text-center">
                            Aqua Yoga
                        </h4>
                        <p>
                            <img src="{{ asset('assets/img/wellness/activities/4.jpg') }}" alt="" />
                        </p>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <td>A guided therapeutic yoga done in the checked-in villa pool. Aqua yoga increases strength, decreases pressure on joints, and relaxes the entire body.</td>
                                    </tr>
                                    <tr>
                                        <td>P499/person</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum of 2 pax</td>
                                    </tr>
                                    <tr>
                                        <td>30 minutes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="villa-item">
                        <h4 class="mad-title text-center">
                            Guided Forest Meditation
                        </h4>
                        <p>
                            <img src="{{ asset('assets/img/wellness/activities/5.jpg') }}" alt="" />
                        </p>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <td>A voice-recorded guided meditation with a series of breathing exercises and mantras. This slows down racing thoughts, lets go of negativity, and calms your mind and body.</td>
                                    </tr>
                                    <tr>
                                        <td>P199/person</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum of 2 pax</td>
                                    </tr>
                                    <tr>
                                        <td>10 minutes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="villa-item">
                        <h4 class="mad-title text-center">
                            Botanical Tour
                        </h4>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <td>A guided nature therapy that focuses on boosting growth and healing, especially of the mental health in the presence of nature. Walks in the forest and learning about the different plants and trees and their characteristics.</td>
                                    </tr>
                                    <tr>
                                        <td>P499/person</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum of 2 pax</td>
                                    </tr>
                                    <tr>
                                        <td>30 minutes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mad-testimonial-bg content-element-4">
                        <div class="mad-testimonial">
                            <div class="mad-testimonial-info">
                            <blockquote>
                                <p>
                                    In the case of rain, we will find an alternative time to perform the Forest Bath, Sound Bath, and Meditative Botanical Tour. Other activities may be performed in the villa or in the SPA Village. This is non-refundable.
                                </p>
                            </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
