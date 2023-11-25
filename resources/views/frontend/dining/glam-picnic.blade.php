
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Glam Picnic')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Glam Picnic')
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
    <h1 class="mad-page-title">Glam Picnic</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Dining</span> /
        <span>Glam Picnic</span>
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
                        <div class="mad-entity-pre-title">Glam Picnic</div>
                        <p style="text-align: justify;">
                            Glam Picnic, short for Glamorous Picnic, is an alfresco picnic setup (weather permitting) from 3 PM - 6 PM. The setup includes a low table, a fancy dining setup, and pillows.
                        </p>

                        <p>
                            <b>We have sets for:</b>
                            <br>2 pax • 4 pax • 6 pax
                            <br>
                            <br>𝐒𝐄𝐓 𝐀: Pizza, fries & onion rings, sandwiches, & fresh fruit platter
                            <br>𝐒𝐄𝐓 𝐁: Pizza, pasta, nachos, & fresh fruit platter
                            <br>𝐒𝐄𝐓 𝐂: Pasta, sandwiches, fries, & fresh fruit platter
                        </p>

                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/dining/glam-picnic/3.jpg')}}" alt="">
                        </p>
                        <p style="text-align:center!important;margin-bottom:0px">
                            <a href="{{ route('contact.contact-us') }}" target="_new" class="btn btn-huge btn-style-3 mt-3"> Message us to book this service </a>
                        </p>
                        <p style="text-align:center!important;margin-bottom:0px">
                            <a href="https://bit.ly/3YtrlNn" target="_new" class="btn btn-huge btn-style-3 mt-3"> VIEW MORE PHOTOS OF GLAM PICNIC </a>
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
