
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Birthday Setup')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Birthday Setup')
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
    <h1 class="mad-page-title">Birthday Setup</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Accommodation</span> /
        <span>Birthday Setup</span>
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
                        <div class="mad-entity-pre-title">Birthday Setup</div>
                        <h6 class="mad-entity-title" style="text-align:center;">
                            Birthday celebrations also make us feel loved, which can be a nice way to increase our mental health—especially during stressful times.
                        </h6>
                        <div class="mad-testimonial-bg content-element-4">
                            <div class="mad-testimonial">
                                <div class="mad-testimonial-info">
                                <blockquote>
                                    <p style="text-align:center;">
                                        Want to have your dome decorated for your birthday, too? Or just want to surprise the celebrant? Book this service for P1,000/ dome or tent setup. This includes a birthday banner, balloons, bed and tub decor, arranged randomly by our staff. We will use the available forest flowers and petals at Shanti. If you have any preferences, please let us know.
                                    </p>
                                    <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                                        Add-ons:
                                    </h4>
                                    <p style="text-align:justify;">
                                        P1,000 for a small cake (subject to availability in local bakeshop), provide any 3 flavors choices 1-2-3 whichever is available, also your cake dedication, specify if male or female celebrant and age
                                        <br>P2,000 for 1 dz rose bouquet
                                        <br>P1,000 if you want real rose petals to be used in bed and tub
                                    </p>
                                </blockquote>
                                </div>
                            </div>
                        </div>
                        <div data-isotope-layout="masonry" data-isotope-filter="#portfolio-filter" class="mad-gallery item-col-3 mad-grid--isotope">
                            <div class="mad-grid-sizer"></div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/accommodation/birthday-setup/1.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/accommodation/birthday-setup/1.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/accommodation/birthday-setup/2.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/accommodation/birthday-setup/2.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/accommodation/birthday-setup/3.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/accommodation/birthday-setup/3.jpg')}}" alt=""
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
