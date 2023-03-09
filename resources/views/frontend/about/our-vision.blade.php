
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Our Vision')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Our Vision')
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
    <h1 class="mad-page-title">Our Vision</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>About</span> /
        <span>Our Vision</span>
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
                        <div class="mad-entity-pre-title">What is Shanti?</div>
                        <h6 class="mad-entity-title" style="text-align:center;">
                            Shanti is the brainchild of Dr. Maruf Hasan, founder of Bigfish Manila Inc. BIGFISH Hospitality with its resorts in Boracay and El Nido, <br> though with a different concept, he dreamed of creating a total mind and body experience superior to any in existence way back in 2004.
                        </h6>
                        <div class="mad-testimonial-bg content-element-4">
                            <div class="mad-testimonial">
                                <div class="mad-testimonial-info">
                                <blockquote>
                                    <p>
                                        “My vision was to bring together hospitality and vacation to a holistic approach to health, a paradisiacal environment of mind, body and spirit. Connecting with nature, healthy food and mental health is all about humans, happier and healthier. So Shanti was born“.
                                    </p>
                                </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="mad-info-header">
                            <h5 class="mad-team-member-name">
                                <a href="#">CELEBRATE LIFE</a>
                            </h5>
                        </div>
                        <p style="text-align:justify;">
                            Shanti is where mind, body and spirit exist in harmony. A crossroads of east and west, its name means ‘peace’.
                        </p>
                        <p>
                            <img src="{{ asset('assets/img/about/our_vision_1.jpg') }}" alt="" />
                        </p>
                        <div class="mad-info-header">
                            <h5 class="mad-team-member-name">
                                <a href="#">WORK IS PLEASURE</a>
                            </h5>
                        </div>
                        <p style="text-align:justify;">
                            Shanti is not just a great place to visit, it’s a great place to work.
                        </p>
                        <p style="text-align:center;">
                            <img src="{{ asset('assets/img/about/our_vision_2.jpg') }}" alt="" style="width:50%;" />
                        </p>
                        <div class="mad-info-header">
                            <h5 class="mad-team-member-name">
                                <a href="#">A MOMENT IN TIME</a>
                            </h5>
                        </div>
                        <p style="text-align:justify;">
                            Walk with us now through the tranquil gardens of Shanti today and experience the sense of well-being. Everyone seeks a state of harmony between mind, body and spirit. And we are here to connect the dots. As this journey of the imagination, you can go anywhere you please within our 4 hectares of lush green property. The SPA village is our signature development where everything is created very artfully, carefully and passionately.
                        </p>
                        <p style="text-align:center;">
                            <img src="{{ asset('assets/img/about/our_vision_3.jpg') }}" alt="" style="width:70%;"/>
                        </p>

                        <p style="text-align:justify;">
                            Just minutes away from Tagaytay City. Enjoy some of life’s better moments…
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
