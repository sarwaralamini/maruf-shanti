
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Location')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Location')
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
    <h1 class="mad-page-title">Location</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Contact</span> /
        <span>Location</span>
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
                        <div class="mad-entity-pre-title">Location</div>
                        <h6 class="mad-entity-title" style="text-align:center;">
                            Welcome to Shanti. The nature lovers' haven.
                        </h6>
                        <p style="text-align:center;">
                            <b>Not many places in the world offer a timeless lifestyle the way Shanti does. Where relaxation, health & vacation blend together to create an irresistible charm. Away from crowds with beautiful surroundings, with the intoxicating sounds of serenity in the air.</b>
                        </p>
                        <p>
                            It’s around 15 mins away from Tagaytay. Hidden gem. Wonderful rich nature - Shanti Wellness Sanctuary. The surroundings are so beautiful because of lush greens and coconut plantations.
                        </p>

                        <p  style="text-align:center;">
                            <b>SHANTI MAP:</b>
                        </p>

                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/contact/location/1.jpg')}}" alt="">
                        </p>

                        <p style="text-align:center;">
                            <b>SHANTI VIA WAZE:</b>
                        </p>

                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/contact/location/2.jpg')}}" alt="">
                        </p>

                        <p style="text-align:center;">
                            <b>RESORT MAP:</b>
                        </p>

                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/contact/location/3.jpg')}}" alt="">
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
