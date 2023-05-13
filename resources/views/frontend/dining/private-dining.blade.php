
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Private Dining')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Private Dining')
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
    <h1 class="mad-page-title">Private Dining</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Dining</span> /
        <span>Private Dining</span>
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
                        <div class="mad-entity-pre-title">Private Dining</div>
                        <h6 class="mad-entity-title" style="text-align:center;">
                            The resort is built on 4 hectares of undulating land within an old coconut plantation. <br> Accommodation includes a villa with semi-outdoor private dining area.<br> Villas have been sited with sufficient space between the units so as to provide you with more than adequate privacy.
                        </h6>
                        <p>
                            <b>Feel free to bring and cook your own food. No corkage fee. There's a private kitchen in each Villa. It's fully-equipped. OR You may order food at SHANTI.</b>
                        </p>
                        <p style="text-align: center;">
                            <a href="http://bit.ly/3sUz4G9" class="btn btn-huge btn-style-3 mt-3"> SEE FOOD MENU </a>
                        </p>
                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/dining/private-dining/1.jpg')}}" alt="">
                        </p>
                        <p>
                            <b>FOOD MENU POLICY:</b>
                        </p>
                        <div class="mad-list-content">
                            <ul class="mad-list--icon">
                                <li><i class="icon material-icons">check</i>Plan your meals in advance. A minimum of 2 days advance order for food is required. Php 2k minimum purchase per night stay. All Ala carte menu is good for 2 persons unless specified. Order separately for Lunch, Snacks, Dinner, and Breakfast. Please specify serving date and time.</li>
                                <li><i class="icon material-icons">check</i>No restaurant yet. We will serve your food to your dining area inside your Villa. On-site menu alteration or change of a quantity is not possible as we will purchase everything in advance prior to your arrival. No cancellation or changes are accepted and full payment is required upon placing the order. All payments are strictly non-refundable.</li>
                            </ul>
                        </div>

                        <div data-isotope-layout="masonry" class="mad-gallery item-col-3 mad-grid--isotope g4 mt-3">
                            <div class="mad-grid-sizer"></div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/dining/private-dining/2.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/dining/private-dining/2.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/dining/private-dining/3.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/dining/private-dining/3.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/dining/private-dining/4.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/dining/private-dining/4.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                        </div>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
