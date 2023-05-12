
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Spa & Bath Menu')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Spa & Bath Menu')
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
    <h1 class="mad-page-title">Spa & Bath Menu</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Wellness</span> /
        <span>Spa & Bath Menu</span>
    </nav>
    </div>
    </div>
    <!--================ End of Breadcrumb ================-->

    <div class="mad-content no-pd">
        <div class="container">
            <div class="mad-section">
                <div class="mad-entities mad-entities-reverse type-4">
                    <article class="mad-entity">
                        <div style="max-width:100rem;font-size: 1.125rem;line-height:1.5rem;" >
                            <div class="mad-entity-pre-title">Spa & Bath Menu</div>
                            <h6 class="mad-entity-title" style="text-align:center;">
                                Refresh.. relax.. renew.. reflect.. return.
                            </h6>
                            <h6 class="mad-entity-title" style="text-align:center;">
                                Pamper the body and refresh the soul.
                            </h6>
                            <div role="alert" class="mad-alert-box mad-alert-box--info">
                                <div class="mad-alert-box-inner">
                                    Shanti Wellness Sanctuary promises a relaxing and refreshing escape.  The resort is surrounded by tropical forest, creating a peaceful ambience. An open-air sign concept allows the resort to blend seamlessly into its surrounds. Tranquility is a state which once experienced, lives in the memory forever.
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="villa-item">
                        <div data-isotope-layout="masonry" class="mad-gallery item-col-3 mad-grid--isotope g4">
                            <div class="mad-grid-sizer"></div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/wellness/spa-and-bath-menu/1.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/wellness/spa-and-bath-menu/1.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/wellness/spa-and-bath-menu/2.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/wellness/spa-and-bath-menu/2.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/wellness/spa-and-bath-menu/3.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/wellness/spa-and-bath-menu/3.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/wellness/spa-and-bath-menu/4.png')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/wellness/spa-and-bath-menu/4.png')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/wellness/spa-and-bath-menu/5.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/wellness/spa-and-bath-menu/5.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>

                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/wellness/spa-and-bath-menu/6.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/wellness/spa-and-bath-menu/6.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/wellness/spa-and-bath-menu/7.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/wellness/spa-and-bath-menu/7.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/wellness/spa-and-bath-menu/8.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/wellness/spa-and-bath-menu/8.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/wellness/spa-and-bath-menu/9.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/wellness/spa-and-bath-menu/9.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                        </div>
                    </div>

                    <div class="mad-testimonial-bg content-element-4 mt-5">
                        <div class="mad-testimonial">
                            <div class="mad-testimonial-info">
                            <blockquote>
                                <p style="text-align:center!important;">
                                    Please book in advance and specify the service date and time. The last call for a massage is at 7pm.
                                    <br>
                                    <a href="https://drive.google.com/file/d/1oBDiivpWIMIgymgEtcFh1kpTOtkbFEet" class="btn btn-huge btn-style-3 mt-3"> Download Spa & Bath Menu </a>
                                </p>
                            </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
