
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

                        <p style="text-align:justify;">
                            Feel free to bring your own food and drinks. No corkage fee.
                        </p>

                        <p style="text-align:justify;">
                            For dome villa guests: There's a private kitchen in each Villa. You may cook. It's fully-equipped. OR You may order food at SHANTI.
                        </p>

                        <p style="text-align:justify;">
                            (NOTE: JTL is without a kitchen, but we provide bbq griller and drinking water)
                        </p>
                        <p style="text-align: center;">
                            {{-- <a href="{http://bit.ly/3sUz4G9}" class="btn btn-huge btn-style-3 mt-3"> SEE FOOD MENU </a> --}}
                            <a href="{{ route('dining.private-dining.food-menu') }}" target="_new" class="btn btn-huge btn-style-3 mt-3"> SEE FOOD MENU </a>
                        </p>
                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/dining/private-dining/5.jpg')}}" alt="">
                        </p>
                        <p>
                            <b>FOOD MENU POLICY:</b>
                        </p>
                        <div class="mad-list-content" style="margin-top:-22px;">
                            <ul class="mad-list--icon">
                                <li><i class="icon material-icons">check</i>Plan your meals in advance. A minimum of 2 days advance order for food is required. All Ala carte menu is good for 2 persons unless specified. Order separately for Lunch, Snacks, Dinner, and Breakfast. Specify serving time as well.</li>
                                <li><i class="icon material-icons">check</i>No restaurant yet. We will serve your food to your dining area inside your Villa or Tent Lodge. On-site menu alteration or change of a quantity is not possible as we will purchase everything in advance prior to your arrival. No cancellation or changes are accepted and full payment is required upon placing the order. All payments are strictly non-refundable. Nearby restaurants are located at the Twin Lakes 10-15 mins away.</li>
                            </ul>
                        </div>

                        <div class="mad-section no-pd content-element-main mad-colorizer--scheme-" style="margin-bottom: 3rem!important; margin-top: 2rem!important;">
                            <div class=" mad-gallery-slider mad-grid owl-carousel mad-grid--cols-1 mad-owl-moving nav-size-2">
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/dining/private-dining/1.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/dining/private-dining/2.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/dining/private-dining/3.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/dining/private-dining/4.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/dining/private-dining/6.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/dining/private-dining/7.jpg')}}" alt="" />
                                </div>
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
