
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'History')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'History')
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
    <h1 class="mad-page-title">History</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>About</span> /
        <span>History</span>
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
                        <div class="mad-entity-pre-title">History</div>
                        <h6 class="mad-entity-title" style="text-align:center!important;;">
                            Welcome to nothing! but a beautiful hillside, four hectares of land where I dreamed of developing a destination SPA resort!
                        </h6>
                        <p>
                            <img src="{{ asset('assets/img/about/history_1.jpg') }}" alt="" />
                        </p>
                        <p style="text-align:justify;">
                            The resort was conceptualized way back in 2004. However, it only materialized in 2021. Since then, the land has been carefully taken care of for its natural landscape, for what it’s a forest look today. The last decade has been a journey of planting thousands of plants and most of them are related to wellness.
                        </p>
                        <p style="text-align:center;">
                            <div role="alert" class="mad-alert-box mad-alert-box--info">
                                <div class="mad-alert-box-inner">
                                    Please join us now as we retrace our path and rejoice in the future.
                                </div>
                              </div>
                        </p>
                        <div class="mad-info-header">
                            <h5 class="mad-team-member-name">
                                <a href="#">DESIGNS ON TRANQUILITY</a>
                            </h5>
                        </div>
                        <p style="text-align:justify;">
                            Architects Elizabeth, Stella & Maglayo, are the major architects who designed Shanti. The concept and core part remains the masterpiece of the founder Dr. Maruf Hasan, as he loves his creation with passion.
                        </p>
                        <div class="mad-testimonial-bg content-element-4">
                            <div class="mad-testimonial">
                                <div class="mad-testimonial-info">
                                <blockquote>
                                    <p>
                                    “I strove ultimately for simplicity. Attention to detail in every corner of the resort. Achieving it can be harder than you think, it’s the stuff you don’t notice. For example, there are fragrant plants which were planted along the walkway. Citrus, dama de noche & like plants are placed beside a meditation platform for its smell, which is in aromatherapy. The scents for relaxation are lavender (for calming properties), sage (for cleansing abilities), and peppermint (for mental focus). The experience is a journey. As you wind your way through the resort, you are enveloped by peace and leave the worries of the outside world behind.”
                                    </p>
                                </blockquote>
                                </div>
                            </div>
                        </div>
                        <p style="text-align:justify;">
                            Plants were collected throughout Luzon and Mindanao. Each plant is its own character. Medicinal, herbal, mind-soothing plants are planted in the entire resort.
                        </p>
                        <p style="text-align:justify;">
                            Each lamp, furniture, spa complex and many other construction items, have perfections, it was a nightmare, ten were discarded for each one used. But if just one feature is sub-standard, the whole development is flawed.
                        </p>
                        <p style="text-align:justify;">
                            Shanti is a magical retreat for those seeking peace of mind and relaxation. Relax in your private sanctuary with sensational views of the surrounding verdant gardens. A relaxing atmosphere throughout. Experience a hidden paradise.
                        </p>
                        <p style="text-align:center;">
                            <img src="{{ asset('assets/img/about/history_2.jpg') }}" alt="" />
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
