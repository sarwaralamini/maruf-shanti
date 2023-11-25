
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Packages and Promos')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Packages and Promos')
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
    <h1 class="mad-page-title">Packages and Promos</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Wellness</span> /
        <span>Packages and Promos</span>
    </nav>
    </div>
    </div>
    <!--================ End of Breadcrumb ================-->

    <div class="mad-content no-pd">
        <div class="container">
            <div class="mad-section">
                <div class="mad-entities mad-entities-reverse type-4">
                <!--================ Entity ================-->
                <article class="mad-entity" style="justify-content: flex-start;">
                    <div style="max-width:100rem;font-size: 1.125rem;line-height:1.5rem;" >
                        <div class="mad-entity-pre-title">Packages and Promos</div>
                        <section class="mad-widget">
                            <p style="text-align:justify;">
                                Here are the packages you may love to book with us.
                            </p>
                            <p style="text-align:justify;">
                                We welcome day tour guests for wellness activities and private dining. Advance booking is required.
                            </p>
                            <p style="text-align: center;">
                                <img src="{{ asset('assets/img/wellness/packages/499.jpg')}}" alt="">
                            </p>
                            <p style="text-align: center;">
                                <img src="{{ asset('assets/img/wellness/packages/new990.jpg')}}" alt="">
                            </p>
                            <p style="text-align: center;">
                                <img src="{{ asset('assets/img/wellness/packages/1.jpg')}}" alt="">
                            </p>
                            <p style="text-align: center;">
                                <img src="{{ asset('assets/img/wellness/packages/3.jpg')}}" alt="">
                            </p>
                            <p style="text-align: center;">
                                <img src="{{ asset('assets/img/wellness/packages/990.jpg')}}" alt="">
                            </p>
                            <p style="text-align: center;">
                                <img src="{{ asset('assets/img/wellness/packages/4.jpg')}}" alt="">
                            </p>
                            <p style="text-align: center;">
                                <img src="{{ asset('assets/img/wellness/packages/6.jpg')}}" alt="">
                            </p>
                            <p style="text-align: center;">
                                <img src="{{ asset('assets/img/wellness/packages/1290.jpg')}}" alt="">
                            </p>
                            <p style="text-align: center;">
                                <img src="{{ asset('assets/img/wellness/packages/7.jpg')}}" alt="">
                            </p>
                            <p style="text-align: center;">
                                <img src="{{ asset('assets/img/wellness/packages/8.jpg')}}" alt="">
                            </p>
                            <p style="text-align: center;">
                                <img src="{{ asset('assets/img/wellness/packages/12.jpg')}}" alt="">
                            </p>
                            <p style="text-align: center;">
                                <img src="{{ asset('assets/img/wellness/packages/14.jpg')}}" alt="">
                            </p>
                            <p style="text-align: center;">
                                <img src="{{ asset('assets/img/wellness/packages/15.jpg')}}" alt="">
                            </p>
                            <p style="text-align: center;">
                                <img src="{{ asset('assets/img/wellness/packages/18.jpg')}}" alt="">
                            </p>
                            <p style="text-align: center;">
                                <img src="{{ asset('assets/img/wellness/packages/16.jpg')}}" alt="">
                            </p>
                            <p style="text-align: center;">
                                <img src="{{ asset('assets/img/wellness/packages/17.jpg')}}" alt="">
                            </p>
                        </section>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
