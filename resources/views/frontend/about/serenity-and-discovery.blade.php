
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Serenity and Discovery')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Serenity and Discovery')
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
    <h1 class="mad-page-title">Serenity and Discovery</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>About</span> /
        <span>Serenity and Discovery</span>
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
                        <div class="mad-entity-pre-title">Serenity and Discovery</div>
                        <p class="mad-entity-title" style="text-align:center;margin-bottom: 0.5rem;">
                            Awaken to the songs of nature.
                        </p>
                        <p class="mad-entity-title" style="text-align:center;margin-bottom: 0.5rem;">
                            For a few minutes every day, close your eyes and listen to the sound of silence. It’s often the most beautiful music of all.
                        </p>
                        <p class="mad-entity-title" style="text-align:center;margin-bottom: 0.5rem;">
                            A secluded world of serenity and tranquility. A holistic destination! Begin your journey.
                        </p>
                        <p style="text-align:center;">
                            <img src="{{ asset('assets/img/about/serenity_and_discovery.jpg') }}" style="width:100%;" alt="" />
                        </p>
                        <p style="text-align:justify;">
                            Shanti Wellness Sanctuary is an enchanting hillside retreat overlooking lush forest, coconut plantation and Balayan Bay, yet located only minutes away from Tagaytay City.
                        </p>
                        <p style="text-align:justify;margin-bottom:0rem;">
                            Every detail has a creative touch. A spacious villa which pleasantly blends harmoniously with its natural surroundings. Plunge into the delicious seclusion of your private pool under a clear blue sky. Here, the lushness of the forest stretches before you and perfumed flowers scatter the ground. The resort provides a natural sanctuary for vividly-colored birds and butterflies. When it rains, enjoy watching the rain in the forest while listening to the sound of flowing water in the creek below.
                        </p>
                        <div class="mad-list-content">
                            <ul class="mad-list--icon">
                                <li class="text-justify-on-medium-device"><i class="icon material-icons">check</i>Stretch the body as well as the mind.</li>
                                <li class="text-justify-on-medium-device"><i class="icon material-icons">check</i>Experience the sights, sounds and scents, at your own speed or under your own power.</li>
                                <li class="text-justify-on-medium-device"><i class="icon material-icons">check</i>Wander the valleys and nature… explore village life.</li>
                                <li class="text-justify-on-medium-device"><i class="icon material-icons">check</i>The timeless spirituality of this setting penetrates the senses to nurture the body, mind and soul. A place of healing, reflection, contemplation, meditation and serenity.</li>
                            </ul>
                        </div>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
