
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Prenup Packages')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Prenup Packages')
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
    <h1 class="mad-page-title">Prenup Packages</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>EVENTS & MEETINGS</span> /
        <span>Prenup Packages</span>
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
                        <div class="mad-entity-pre-title">Prenup Packages</div>
                        <p style="text-align:justify;">
                            Shanti is a romantic hideaway that encourages guests to abandon routine and embrace personal freedom and healthy living. It is a spiritual destination that introduces a way of life enriched by nature and tradition. The journey begins where every precious moment counts.
                        </p>
                        <p style="text-align:justify;">
                            Capture those picture-perfect moments before you say 'I Do' while enjoying a relaxing getaway at Shanti Wellness Sanctuary. Check out our prenup packages today!
                        </p>
                        {{-- <div class="mad-testimonial-bg content-element-4">
                            <div class="mad-testimonial">
                                <div class="mad-testimonial-info">
                                <blockquote>
                                    <p>
                                        “Get 20% discount of your Villa rate, off-season dates.”.
                                    </p>
                                </blockquote>
                                </div>
                            </div>
                        </div> --}}
                        <p style="text-align:center!important;">
                            <img src="{{ asset('assets/img/events-meetings/prenup-packages/1.jpg')}}" alt="" />
                        </p>
                        <h4 class="mad-title text-center" style="margin-bottom: 0.5rem;">
                            Shanti Prenup Packages
                        </h4>
                        <p>
                            <b>Basic Package: Php 5,000</b>
                            <br>- Open access to the entire 4 hectares forest, gardens.  Open spaces only.
                            <br>- Maximum of 5 hours.
                            <br>- An open tent and table chairs will be provided for preparation.
                            <br>- No food included but can be ordered at least a day before the scheduled date.
                            <br>- Maximum of 6 pax.
                            <br>- Full payment is required, non-refundable but change date is allowed at least 7 days prior to the event. Advance food orders can’t be refunded or rescheduled within 48 hours of the booking date.
                        </p>
                        <p>
                            <b>Silver Package: Php 8,000 (with dome exterior and pool)</b>
                            <br>- Open access to the entire 4 hectares forest, gardens for 5 hours plus dome exterior with pool shooting for an hour.
                            <br>- Dome exterior time slot is subject to availability from 12 nn to 1 pm, actual time will be given on the date itself.
                            <br>- Maximum of 6 hours.
                            <br>- An open tent and table chairs will be provided for preparation.
                            <br>- No food included but can be ordered at least a day before the scheduled date.
                            <br>- Maximum of 8 pax.
                            <br>- Full payment is required, non-refundable but change date is allowed at least 7 days prior to the event. Advance food orders can’t be refunded or rescheduled within 48 hours of the booking date.
                        </p>
                        <p>
                            <b>Gold Package: Php 10,000 (with single dome interior and exterior and pool)</b>
                            <br>- Open access to the entire 4 hectares forest, gardens for 6 hours plus dome interior and exterior with pool shooting for an hour.
                            <br>- Dome interior and exterior time slots are subject to availability from 12 nn to 1 pm, actual time will be given on the date itself.
                            <br>- Maximum of 7 hours.
                            <br>- An open tent and table chairs will be provided for preparation.
                            <br>- No foods included but can be ordered at least a day before the scheduled date.
                            <br>- Maximum of 10 pax.
                            <br>- Full payment is required, non-refundable but change date is allowed at least 7 days prior to the event. Advance food orders can’t be refunded or rescheduled within 48 hours of the booking date.
                        </p>
                        <p style="text-align:justify;">
                            For in-house guests with a booked villa, additional Php 3,500 is required for the prenup photo shooting.
                        </p>
                        <p style="text-align:center!important;">
                            <img src="{{ asset('assets/img/events-meetings/prenup-packages/2.jpg')}}" alt="" />
                        </p>
                        <p style="text-align:center!important;">
                            <img src="{{ asset('assets/img/events-meetings/prenup-packages/3.jpg')}}" alt="" />
                        </p>
                        <p style="text-align:center!important;">
                            <img src="{{ asset('assets/img/events-meetings/prenup-packages/4.jpg')}}" alt="" />
                        </p>
                        <p style="text-align:center!important;">
                            <img src="{{ asset('assets/img/events-meetings/prenup-packages/5.jpg')}}" alt="" />
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
