
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Spa Village')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Spa Village')
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
    <h1 class="mad-page-title">Spa Village</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Wellness</span> /
        <span>Spa Village</span>
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
                        <div class="mad-entity-pre-title">Spa Village</div>
                        <h6 class="mad-entity-title" style="text-align:center;">
                            The SPA Village is your total retreat.
                        </h6>

                        <p style="text-align:justify;">
                            Relax to the soothing sound of nature and let all your cares melt away.
                        </p>
                        <p style="text-align:center;">
                            <div role="alert" class="mad-alert-box mad-alert-box--info">
                                <div class="mad-alert-box-inner">
                                    Surrounded by untouched nature, the SPA Village provides a unique wellness immersion.
                                </div>
                            </div>
                        </p>
                        <div class="mad-list-content">
                            <ul class="mad-list--icon">
                                <li><i class="icon material-icons">check</i>At the moment, we focus on natural healing through nature like the Japanese wellness practice such as shinrin-yoku (forest bathing).</li>
                                <li><i class="icon material-icons">check</i>We also have different massage services, nail & foot spa and relaxing facials.</li>
                                <li><i class="icon material-icons">check</i>Facilities include a sauna, steam room, volcanic sand bath, salt cave and negative ion pads.</li>
                                <li><i class="icon material-icons">check</i>For bathing, we offer the traditional Kawa bath and our salt, herbal, detox, milk and tea baths.</li>
                            </ul>
                        </div>
                        <div class="mad-testimonial-bg content-element-4">
                            <div class="mad-testimonial">
                                <div class="mad-testimonial-info">
                                <blockquote>
                                    <p>
                                    “Shanti’s holistic approach to relaxation and wellness could have no better home than at the resort. Guests are inspired by the nature of the location to reinvent the nature of their lifestyle. The quality of the Filipino hospitality, service by the heart, and the SPA Village makes Shanti, Philippines, the perfect place to start or rekindle a journey of learning, achievement and discovery.”
                                    </p>
                                </blockquote>
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
