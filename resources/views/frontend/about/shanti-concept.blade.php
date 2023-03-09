
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Shanti Concept')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Shanti Concept')
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
    <h1 class="mad-page-title">Shanti Concept</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>About</span> /
        <span>Shanti Concept</span>
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
                        <div class="mad-testimonial-bg content-element-4">
                            <div class="mad-testimonial">
                                <div class="mad-testimonial-info">
                                <blockquote>
                                    <p>
                                        “Shanti is a word from Sanskrit which means peace. In particular, inner peace or peace of mind, a state of mental and spiritual peace that allows one to remain whole and grounded during stress. Shanti means peace, rest, calmness, tranquility or bliss”.
                                    </p>
                                </blockquote>
                                </div>
                            </div>
                        </div>
                        <p>
                            <img src="{{ asset('assets/img/about/shanti_concept.jpg') }}" alt="" />
                        </p>
                        <p style="text-align:justify;">
                            Drawing inspiration from nature, Shanti Wellness Sanctuary is a haven for comfort, ease, wellness and the warmth of Filipino hospitality.
                        </p>
                        <p style="text-align:justify;">
                            The resort is fully managed by local professionals, making it the perfect gateway to enjoy an authentic Filipino hospitality experience.

From the flower-filled tub on arrival to the smallest detail throughout the stay, Shanti surely is an unknown gem.
                        </p>
                        <p style="text-align:justify;">
                            Imagine receiving a warm welcome at a resort with the soothing sound of "kulintang" played by a local and nestling amid the raw nature of the forest. Shanti, a naturally terraced landscape interlinked by winding paths.
                        </p>
                        <p style="text-align:justify;">
                            Tucked in the rolling hillside, the resort offers majestic views of valleys and Balayan Bay. In the evenings, you will experience millions of stars, the sound of insects and observe fireflies.
                        </p>
                        <p style="text-align:justify;">
                            A resort in a haven of tranquility. Nestled deep in the heart of the Tagaytay-Batangas valley. Offering unique accommodation and wellness.
                        </p>
                        <p style="text-align:justify;">
                            Create an unforgettable memory. Enjoy every moment at Shanti Wellness Sanctuary. We offer a welcoming place to retreat and rejuvenate within an unspoilt wilderness. The temperature at the resort is comfortably cool at 1300 feet above sea level. Our guests are free to roam around these 4 hectares of tropical jungle, to practice yoga or to meditate along the dry creek or in thick forest. Dive in and go for a swim if you wish. In the evening, enjoy a glass of bubbly by a campfire, relax in our spa. The choice is yours.
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
