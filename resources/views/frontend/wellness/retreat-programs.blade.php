
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Retreat Programs')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Retreat Programs')
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
    <h1 class="mad-page-title">Retreat Programs</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Wellness</span> /
        <span>Retreat Programs</span>
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
                        <div class="mad-entity-pre-title">Retreat Programs</div>
                        <div class="mad-testimonial-bg content-element-4">
                            <div class="mad-testimonial">
                                <div class="mad-testimonial-info">
                                <blockquote>
                                    <p style="text-align:center;">
                                        Nature heals. Naturally.
                                    </p>
                                </blockquote>
                                </div>
                            </div>
                        </div>
                        <p style="text-align:justify;">
                            We believe that health stands for helping each other achieve lasting total health. To this end, Shanti has integrated a wealth of natural SPA treatments and services with traditional Asian therapies, allowing us to tailor the program specifically to the needs of each individual.
                        </p>
                        <p style="text-align:justify;">
                            We want your stay at Shanti as a journey of discovery. It is a voyage of mind, body and spirit. The ultimate destination is good health, defined as a feeling of vitality, wellness, peace, harmony and balance.
                        </p>
                        <p style="text-align:justify;">
                            Wellness is a journey and Shanti is a holistic destination.
                        </p>
                        <p style="text-align:justify;">
                            Indulge your senses.
                        </p>
                        <div role="alert" class="mad-alert-box mad-alert-box--info">
                            <div class="mad-alert-box-inner">
                                We offer a relaxed philosophy and a personalized approach to re-balancing, by blurring the distinction between inside and out, these private retreats invite you to rest, relax or meditate while inhaling the pure fresh air and taking in the pristine, truly inspiring scenery around you.
                            </div>
                          </div>
                        <p>
                            <img src="{{ asset('assets/img/wellness/retreat-programs/1.jpg') }}" alt="" />
                        </p>
                        <p>
                            <img src="{{ asset('assets/img/wellness/retreat-programs/2.jpg') }}" alt="" />
                        </p>
                        <p>
                            <img src="{{ asset('assets/img/wellness/retreat-programs/3.jpg') }}" alt="" />
                        </p>
                        <p>
                            <img src="{{ asset('assets/img/wellness/retreat-programs/4.jpg') }}" alt="" />
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
