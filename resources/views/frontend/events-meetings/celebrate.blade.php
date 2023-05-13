
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
        <span>EVENTS / MEETINGS</span> /
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
                        <p style="text-align:center!important;">
                            <button type="button" class="btn btn-huge btn-style-3 mt-3"> For event proposal/ celebrations at Shanti, please message us </button>
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
