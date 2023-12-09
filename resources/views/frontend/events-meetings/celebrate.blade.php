
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Celebrate')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Celebrate')
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
    <h1 class="mad-page-title">Celebrate</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>EVENTS & MEETINGS</span> /
        <span>Celebrate</span>
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
                        <div class="mad-entity-pre-title">Celebrate</div>
                        <p style="text-align:justify;">
                            A peaceful retreat into the natural environment. 15 mins away from Twin Lakes Tagaytay.
                        </p>
                        <p style="text-align:justify;">
                            Without a doubt, Shanti Wellness Sanctuary has been blessed with one of the best pieces of natural landscape western Batangas has to offer. Nestled deep within the serene rural village of Lemery, on the outskirts of Tagaytay. This captivating sanctuary truly celebrates love and wellness.
                        </p>
                        <p style="text-align:justify;">
                            We’re excited to announce that our open-space 𝑬𝒗𝒆𝒏𝒕 𝑮𝒂𝒓𝒅𝒆𝒏 is now available to hold special events such as afternoon teas, corporate events, weddings, birthdays, team buildings, group yoga activities, etc. This space surely makes a stunning canvas for any good old fashioned party. We can accommodate up to 150 guests for any event.
                        </p>
                        <br>
                        <div class="mad-section no-pd content-element-main mad-colorizer--scheme-" style="margin-bottom: 3rem!important; margin-top: -1rem!important;">
                            <div class=" mad-gallery-slider mad-grid owl-carousel mad-grid--cols-1 mad-owl-moving nav-size-2">
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/events-meetings/celebrate/4.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/events-meetings/celebrate/1.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/events-meetings/celebrate/2.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/events-meetings/celebrate/3.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                        <p style="text-align:center!important;">
                            <a href="https://shanti.ph/contact/contact-us" target="_blank" class="btn btn-huge btn-style-3 mt-3" > For event proposal/ celebrations at Shanti, please message us </a>
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
