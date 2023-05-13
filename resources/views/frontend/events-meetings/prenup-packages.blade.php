
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
        <span>EVENTS / MEETINGS</span> /
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
                            Capture those picture-perfect moments before you say 'I Do' while enjoying a relaxing getaway at Shanti Wellness Sanctuary.
                        </p>
                        <div class="mad-testimonial-bg content-element-4">
                            <div class="mad-testimonial">
                                <div class="mad-testimonial-info">
                                <blockquote>
                                    <p>
                                        “Get 20% discount of your Villa rate, off-season dates.”.
                                    </p>
                                </blockquote>
                                </div>
                            </div>
                        </div>
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
