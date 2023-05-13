
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Romantic Dining')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Romantic Dining')
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
    <h1 class="mad-page-title">Romantic Dining</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Dining</span> /
        <span>Romantic Dining</span>
    </nav>
    </div>
    </div>
    <!--================ End of Breadcrumb ================-->

    <div class="mad-content no-pd">
        <div class="container">
            <div class="mad-section">
                <div class="mad-entities mad-entities-reverse type-4">
                    <!--================ Entity ================-->
                    <article class="mad-entity" style="justify-content: flex-start!important;">
                        <div style="max-width:100rem;font-size: 1.125rem;line-height:1.5rem;" >
                            <div class="mad-entity-pre-title">Romantic Dining</div>
                        </div>
                    </article>
                    <article>
                        <div>

                            <p style="text-align:justify;">
                                To turn the romance up by several notches, we also offer a glamorous romantic dinner table setup. Something special, very special.
                            </p>
                            <p  style="text-align:justify;">
                                Food is not included.
                                <br>
                                P1000/table setup with petals, candles, etc.
                            </p>

                            <p style="text-align:center!important;">
                                <button type="button" class="btn btn-huge btn-style-3 mt-3"> Message us to book this service.  </button>
                            </p>

                            <div data-isotope-layout="masonry" class="mad-gallery item-col-3 mad-grid--isotope g4 mt-3">
                                <div class="mad-grid-sizer"></div>
                                <div class="mad-grid-item">
                                    <!--================ Gallery Item ================-->
                                    <div class="mad-gallery-item">
                                        <a href="{{ asset('assets/img/dining/romantic-dining/1.jpg')}}" data-fancybox="gallery"
                                        ><img src="{{ asset('assets/img/dining/private-dining/1.jpg')}}" alt=""
                                        /></a>
                                    </div>
                                    <!--================ End Of Gallery Item ================-->
                                </div>
                                <div class="mad-grid-item">
                                    <!--================ Gallery Item ================-->
                                    <div class="mad-gallery-item">
                                        <a href="{{ asset('assets/img/dining/romantic-dining/2.jpg')}}" data-fancybox="gallery"
                                        ><img src="{{ asset('assets/img/dining/private-dining/2.jpg')}}" alt=""
                                        /></a>
                                    </div>
                                    <!--================ End Of Gallery Item ================-->
                                </div>
                                <div class="mad-grid-item">
                                    <!--================ Gallery Item ================-->
                                    <div class="mad-gallery-item">
                                        <a href="{{ asset('assets/img/dining/romantic-dining/3.jpg')}}" data-fancybox="gallery"
                                        ><img src="{{ asset('assets/img/dining/private-dining/3.jpg')}}" alt=""
                                        /></a>
                                    </div>
                                    <!--================ End Of Gallery Item ================-->
                                </div>
                            </div>

                            <p style="text-align:center!important;">
                                <a href="https://bit.ly/3Quag0z" class="btn btn-huge btn-style-3 mt-3"> View more photos  </a>
                            </p>
                        </div>
                    </article>
                    <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
