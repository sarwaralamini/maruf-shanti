
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Partner With Us')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Partner With Us')
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
    <h1 class="mad-page-title">PARTNER WITH US</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>PARTNER WITH US</span>
    </nav>
    </div>
    </div>
    <!--================ End of Breadcrumb ================-->

    <div class="mad-content no-pd">
        <div class="container">
            <div class="mad-section">
                <div class="mad-entities mad-entities-reverse type-4">
                <!--================ Entity ================-->
                <article class="mad-entity" style="justify-content: flex-start;">
                    <div style="max-width:100rem;font-size: 1.125rem;line-height:1.5rem;" >
                        <div class="mad-entity-pre-title">PARTNER WITH US</div>
                        <section class="mad-widget">
                            <p style="text-align:justify;">We believe in partnerships.
                                <br>We are not looking for “clients” or “customers” but for partners.
                                <br>We believe in long-term relationships that bring value to both businesses.
                                <br>We believe in win-wins.</p>
                                <div class="row">
                                    <div class="col-3">
                                        <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;">
                                            Quality
                                        </h4>
                                        <p style="text-align:justify;">We put our expertise at the service of our partners and believe in providing them the highest quality of service possible</p>
                                    </div>
                                    <div class="col-3">
                                        <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;">
                                            Ownership
                                        </h4>
                                        <p style="text-align:justify;">We own our side of each partnership, being accountable for our performance and treating our partners’ projects as our own to guarantee long-term success</p>
                                    </div>
                                    <div class="col-3">
                                        <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;">
                                            Integrity
                                        </h4>
                                        <p style="text-align:justify;">We aim to be a trusted partner, operating with honesty and in full transparency, never sacrificing long-term value for short-term results</p>
                                    </div>
                                    <div class="col-3">
                                        <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;">
                                            Adaptability
                                        </h4>
                                        <p style="text-align:justify;">We adapt to our partners’ business, constantly searching for new ways to fulfill their needs</p>
                                    </div>
                                </div>

                                <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;">
                                    Types Of Information We Collect
                                </h4>
                                <ul style="padding-left: 15px;list-style: auto;text-align: justify;">
                                    <li>Reach your audience</li>
                                    <li>Enhance your brand/ image</li>
                                    <li>Create impact</li>
                                    <li>Gain access to our exclusive deals</li>
                                    <li>Engage with like minds</li>
                                </ul>

                                <p style="text-align: center;">
                                    <a href="{{ route('contact.contact-us') }}" class="btn btn-huge btn-style-3 mt-3"> Message Us For Partnerships and Collaborations </a>
                                </p>
                        </section>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
