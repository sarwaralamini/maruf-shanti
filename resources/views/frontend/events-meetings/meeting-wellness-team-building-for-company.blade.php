
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Meeting, Wellness Team Building For Company')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Meeting, Wellness Team Building For Company')
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
    <h1 class="mad-page-title">Meeting, Wellness Team Building For Company</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>EVENTS / MEETINGS</span> /
        <span>Meeting, Wellness Team Building For Company</span>
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
                        <div class="mad-entity-pre-title">Meeting, Wellness Team Building For Company</div>
                        <p style="text-align:justify;">
                            Shanti Wellness Sanctuary helps you disconnect to connect. It is purposely built offering nature escapes, designed according to the highest sustainability and eco-standards. We spent more than six years searching for this pristine location because we understood humans heal and thrive most effectively where nature meets intelligent, sustainable design.
                        </p>
                        <p style="text-align:justify;">
                            We offer a meeting area in our SPA Village, a relaxing environment with a new level of guest experience. Surprisingly different.
                        </p>
                        <p style="text-align:center!important;">
                            <button type="button" class="btn btn-huge btn-style-3 mt-3"> Message us for details </button>
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
