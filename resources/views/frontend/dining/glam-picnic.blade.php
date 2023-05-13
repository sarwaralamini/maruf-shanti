
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
                        <p style="text-align:center;">
                            <b>Glam picnic, short for Glamorous Picnic, is an alfresco picnic setup from 3PM to 6PM. The setup includes a low table, a fancy dining setup, and pillows.</b>
                        </p>

                        <p  style="text-align:center;">
                            <b>MENU 1:</b>
                        </p>

                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/dining/glam-picnic/1.jpg')}}" alt="">
                        </p>

                        <p style="text-align:center;">
                            <b>MENU 2:</b>
                        </p>

                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/dining/glam-picnic/2.jpg')}}" alt="">
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
