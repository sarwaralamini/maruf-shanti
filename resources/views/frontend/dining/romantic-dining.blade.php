
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
                <article class="mad-entity" style="justify-content: flex-start;">
                    <div style="max-width:100rem;font-size: 1.125rem;line-height:1.5rem;" >
                        <div class="mad-entity-pre-title">Romantic Dining</div>
                        <section class="mad-widget">
                            <p style="text-align:justify;">
                                To turn the romance up by several notches, we also offer a glamorous romantic dinner table setup. Something special, very special.
                            </p>
                            <p  style="text-align:justify;">
                                Food is not included.
                                <br>
                                P1000/table setup with petals, candles, etc.
                            </p>
                            <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                                Add-ons:
                            </h4>
                            <p style="text-align:justify;">
                                P1,000 for a small cake (subject to availability in local bakeshop), provide any 3 flavors choices 1-2-3 whichever is available, also your cake dedication.
                                <br>P2,000 for 1 dz rose bouquet
                                <br>P1,000 if you want real rose petals to be used in the table setup
                            </p>

                            <div class="mad-section no-pd content-element-main mad-section--stretched-content-no-px mad-colorizer--scheme-" style="margin-bottom: 3rem!important; margin-top: -1rem!important;">
                                <div class=" mad-gallery-slider mad-grid owl-carousel mad-grid--cols-1 mad-owl-moving nav-size-2">
                                    <div class="mad-col">
                                        <img src="{{ asset('assets/img/dining/romantic-dining/5.jpg')}}" alt="" />
                                    </div>
                                    <div class="mad-col">
                                        <img src="{{ asset('assets/img/dining/romantic-dining/1.jpg')}}" alt="" />
                                    </div>
                                    <div class="mad-col">
                                        <img src="{{ asset('assets/img/dining/romantic-dining/2.jpg')}}" alt="" />
                                    </div>
                                    <div class="mad-col">
                                        <img src="{{ asset('assets/img/dining/romantic-dining/3.jpg')}}" alt="" />
                                    </div>
                                    <div class="mad-col">
                                        <img src="{{ asset('assets/img/dining/romantic-dining/4.jpg')}}" alt="" />
                                    </div>
                                </div>
                            </div>
                            <p style="text-align:center!important;margin-top:-15px; margin-bottom:35px;">
                                <a href="{{ route('contact.contact-us') }}" target="_new" class="btn btn-huge btn-style-3 mt-3"> Message us to book this service </a>
                            </p>
                            <p style="text-align:center!important;margin-top:-25px;">
                                <a href="https://bit.ly/3Quag0z" class="btn btn-huge btn-style-3 mt-3" target="_blank"> VIEW MORE PHOTOS OF ROMANTIC DINING  </a>
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
