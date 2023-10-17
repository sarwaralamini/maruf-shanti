
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Holistic Escapes')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Holistic Escapes')
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
    <h1 class="mad-page-title">Holistic Escapes</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>About</span> /
        <span>Holistic Escapes</span>
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
                        <div class="mad-entity-pre-title">Holistic Escapes</div>
                        <p style="text-align:center;">
                            Minutes away from the charming city of Tagaytay, within 4 hectares of tropical greenery, serenity awaits.
                        </p>
                        <p style="text-align:center;">
                            Shanti Wellness Sanctuary. The haven of life. A beautiful sanctuary where enrichment thrives and creates good memories.
                        </p>
                        <p style="text-align:center;">
                            <b>A MEANINGFUL JOURNEY.  A MEANINGFUL VACATION. A JOURNEY WITH A PURPOSE.</b>
                        </p>
                        <p style="text-align:center;">
                            <img src="{{ asset('assets/img/about/holistic_escapes.jpg') }}" alt="" />
                        </p>

                        <div class="mad-list-content">
                            <ul class="mad-list--icon">
                                <li style="padding-left:0px!important;">The resort along with the eastern and western boundaries of the property is all surrounded by vibrant tropical gardens, flowering trees and coconut palms.</li>
                                <li style="padding-left:0px!important;">Each morning, your senses slowly awaken to a perfect day in paradise. Open your eyes to a profusion of tropical flowers and colors.</li>
                                <li style="padding-left:0px!important;">Here is a haven of tranquil seclusion. A place where you can relax and enjoy the serene beauty of the lush green valleys. Here you feel the special magic of wellness that purifies the spirit.</li>
                                <li style="padding-left:0px!important;">Blending unique design and secluded courtyards, spacious villa and private gardens create an intimate feeling like no other. </li>
                                <li style="padding-left:0px!important;">Rejuvenation.. relaxation… renewal..</li>
                                <li style="padding-left:0px!important;">A haven of sensual bliss…</li>
                                <li style="padding-left:0px!important;">A journey to wellness.</li>
                            </ul>
                        </div>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
