
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Bohemian Dining')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Bohemian Dining')
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
    <h1 class="mad-page-title">Bohemian Dining</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Dining</span> /
        <span>Bohemian Dining</span>
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
                        <div class="mad-entity-pre-title">Bohemian Dining</div>
                        <h6 class="mad-entity-title" style="text-align:center;">
                            Unique experience.
                        </h6>
                        <p style="text-align:center;">
                            <b>Bohemian dinner is an alfresco dinner setup from 5PM to 9PM. The setup includes a low table, a fancy dining setup, pillows, candles, and lights.</b>
                        </p>
                        <p>
                            <b>RATES:</b>
                        </p>
                        <div class="mad-list-content">
                            <ul class="mad-list--icon">
                                <li><i class="icon material-icons">check</i>2 persons = Php 2,499</li>
                                <li><i class="icon material-icons">check</i>4 persons = Php 2,999</li>
                                <li><i class="icon material-icons">check</i>6 persons = Php 3,599</li>
                            </ul>
                        </div>
                        <p style="text-align:justify;" class="mt-2">
                            Advance booking is required. In case of bad weather condition, setup will be done at the villa dining area. Strictly non-refundable. Prices are VAT-inclusive. 10% service charge will apply.
                        </p>


                        <p  style="text-align:center;">
                            <b>MENU 1:</b>
                        </p>

                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/dining/bohemian-dining/1.jpg')}}" alt="">
                        </p>

                        <p style="text-align:center;">
                            <b>MENU 2:</b>
                        </p>

                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/dining/bohemian-dining/2.jpg')}}" alt="">
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
