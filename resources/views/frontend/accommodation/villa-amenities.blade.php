
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Villa Amenities')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Villa Amenities')
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
    <h1 class="mad-page-title">Villa Amenities</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Accommodation</span> /
        <span>Villa Amenities</span>
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
                        <div class="mad-entity-pre-title">Villa Amenities</div>
                        <h6 class="mad-entity-title" style="text-align:center;">
                            Our earth-favoring dome villa each extending to a bbq/bonfire area and approximately 150 sqm for single domes <br>and 250 sqm for twin dome. Single domes can accommodate up to six people with an extra floor mattress <br>and the twin dome can accommodate maximum of 12 pax. Each stylish villa faces into the surrounding jungle valley and the pristine nature.
                        </h6>
                        <div class="mad-list-content">
                            <ul class="mad-list--icon">
                                <li><i class="icon material-icons">check</i>Every villa bathroom is a delight to every sense and features a secluded outdoor shower in a private garden.</li>
                                <li><i class="icon material-icons">check</i>Each pool is set amidst the forest green.</li>
                                <li><i class="icon material-icons">check</i>While digital detox is a key component of the Shanti experience, we do offer TV and free wifi. Phone signals are reasonable in the forested area.</li>
                                <li><i class="icon material-icons">check</i>The walking distance from the villas to the main lounge or reception lobby is about 5-15 minutes, but complimentary shuttle is available upon request.</li>
                                <li><i class="icon material-icons">check</i>Lush living. Poolside sun-lazing and starlight dining.</li>
                                <li><i class="icon material-icons">check</i>Outdoor waterfall decor. Yoga or meditation at sunrise and sunset overlooking Balayan Bay.</li>
                            </ul>
                        </div>

                        <p style="text-align:center;">
                            <div role="alert" class="mad-alert-box mad-alert-box--info">
                                <div class="mad-alert-box-inner">
                                    Shanti Wellness Sanctuary is one of sensual indulgence.
                                </div>
                              </div>
                        </p>

                        <p>
                            <img src="{{ asset('assets/img/accommodation/villa-amenities.jpg') }}" alt="" />
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
