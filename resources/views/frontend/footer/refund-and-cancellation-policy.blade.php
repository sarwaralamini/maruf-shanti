
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Refund & Cancellation Policy')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Refund & Cancellation Policy')
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
    <h1 class="mad-page-title">REFUND & CANCELLATION POLICY</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>REFUND & CANCELLATION POLICY</span>
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
                        <div class="mad-entity-pre-title">REFUND & CANCELLATION POLICY</div>
                        <section class="mad-widget">
                            <h6 class="mad-widget-title">Refund & Cancellation Policy</h6>
                            <p class="content-element-4">
                                <div class="mad-list-content">
                                    <ul class="mad-list--icon">
                                        <li><i class="icon material-icons">check</i>All bookings are under strict non-refundable policy. Re-booking is allowed until Dec. 2023 but we need 30 days advance notification except for medical emergencies (medical certificate copy will be required).</li>
                                        <li><i class="icon material-icons">check</i>Booking is transferable with 30 days prior conformity but strictly non-refundable.</li>
                                        <li><i class="icon material-icons">check</i>Rate difference may apply when changed to high or peak season, however no refund or credit will be issued when changed to low season.</li>
                                        <li><i class="icon material-icons">check</i>Subject to villa availability.</li>
                                    </ul>
                                </div>
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
