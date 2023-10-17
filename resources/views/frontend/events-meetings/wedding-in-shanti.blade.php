
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Wedding in Shanti')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Wedding in Shanti')
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
    <h1 class="mad-page-title">Wedding In Shanti</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>EVENTS & MEETINGS</span> /
        <span>Wedding in Shanti</span>
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
                        <div class="mad-entity-pre-title">Wedding in Shanti</div>
                        <p style="text-align:justify;">
                            Shanti Wellness Sanctuary is built as a place to celebrate life and love. The name Shanti means “peace” in Sanskrit.
                        </p>
                        <p style="text-align:justify;">
                            A blend of holiday and wellness. Privacy and comfort. Location and unique stay!
                        </p>
                        <p style="text-align:justify;">
                            Shanti Wellness Sanctuary is an ideal choice for those looking for a special place on the untouched side of Tagaytay and Batangas; a wedding destination or a romantic hideaway, where guests can experience peace and tranquility in beautiful surroundings.
                        </p>
                        <p style="text-align:center!important;">
                            <a href="https://shanti.ph/contact/contact-us" target="_blank" class="btn btn-huge btn-style-3 mt-3" > For wedding events at Shanti, please message us </a>
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
