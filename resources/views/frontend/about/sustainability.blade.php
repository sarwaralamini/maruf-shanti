
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Sustainability')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Sustainability')
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
    <h1 class="mad-page-title">Sustainability</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>About</span> /
        <span>Sustainability</span>
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
                        <div class="mad-entity-pre-title">Sustainability</div>
                        <h6 class="mad-entity-title" style="text-align:center;">
                            This 4 hectares (9.8-acre) land within a pristine forest has allowed us to create a destination spa, which is completely accessible yet blissfully secluded.
                        </h6>
                        <p style="text-align:center;">
                            <img src="{{ asset('assets/img/about/sustainability.jpg') }}" alt="" style="width:50%;"/>
                        </p>
                        <p style="text-align:justify;">
                            Shanti, named for the Sanskrit word meaning “peace”, Shanti Wellness Sanctuary offers a thoughtful, sustainable approach to wellness: we bring you close to nature to revitalize you here and we educate your mind so that you leave our wellness retreat with healthy habits and practices which allow you to enjoy greater mental, spiritual and physical well-being for years to come.
                        </p>

                        <p style="text-align:justify;">
                            Shanti was built with the belief that humans heal and thrive when surrounded by nature. That harmony guides everything we do here. Within one of the Tagaytay-Batangas' lushest environments, the holistic architecture treads as lightly as possible upon the land to let nature’s rhythms lull you back to life.
                        </p>
                        <p style="text-align:justify;">
                            The resort features sustainable architecture, intended to help in preserving the environment. Shanti stresses the importance of mindfulness and allowing healing to happen at its own pace.
                        </p>
                        <p style="text-align:justify;">
                            Shanti is about seeking and finding inspiration, knowledge and encouragement to balance external demands with inner fulfillment. Offering effective, meaningful wellness without artifice, Shanti has a pure and simple purpose: to help you get unstuck.
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
